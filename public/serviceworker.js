var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    // styles
    '/css/bootstrap.css',
    '/css/exhibits/index.css',
    '/css/exhibits/unique.css',
    '/js/bootstrap.bundle.min.js',
    //views
    '/',
    '/home',
    '/test',
    '/exhibits',
    '/exhibits/gt40',
    '/exhibits/etype',
    '/exhibits/veyron',
    '/exhibits/quattro',
    '/exhibits/mini',
    '/exhibits/mustang',
    '/exhibits/beetle',
    '/exhibits/porsche911',
    '/exhibits/300sl',
    '/exhibits/mclarenF1',
    '/exhibits/xj220',
    '/exhibits/testarossa',
    // images
    '/images/icons/museum.png',
    '/images/exhibits/offline.jpg',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

let online = true
// Serve from Cache
self.addEventListener("fetch", event => {
    if (event.request.method === 'POST') {
        if (!navigator.onLine) {
            online = false
            event.respondWith(
                savePostData(event.request)
                    .then(() => {
                        return Response.redirect('/home', 302);
                    })
            );
        } else {
            event.respondWith(fetch(event.request).then((response) => {
                if (event.request.url.endsWith("/login")) {
                    caches.open(staticCacheName).then(function (cache) {
                        cache.delete('/');
                        cache.delete('/exhibits');
                        cache.delete('/exhibits/gt40');
                        cache.delete('/exhibits/etype');
                        cache.delete('/exhibits/veyron');
                        cache.delete('/exhibits/quattro');
                        cache.delete('/exhibits/mini');
                        cache.delete('/exhibits/mustang');
                        cache.delete('/exhibits/beetle');
                        cache.delete('/exhibits/porsche911');
                        cache.delete('/exhibits/300sl');
                        cache.delete('/exhibits/mclarenF1');
                        cache.delete('/exhibits/xj220');
                        cache.delete('/exhibits/testarossa');
                        cache.delete('/home');
                        return cache.delete('/test');
                    }).then(function () {
                        return caches.open(staticCacheName);
                    }).then(function (cache) {
                        return cache.addAll([
                            '/', // Seznam pohledů pro cachování
                            '/home',
                            '/test',
                            '/exhibits',
                            '/exhibits/gt40',
                            '/exhibits/etype',
                            '/exhibits/veyron',
                            '/exhibits/quattro',
                            '/exhibits/mini',
                            '/exhibits/mustang',
                            '/exhibits/beetle',
                            '/exhibits/porsche911',
                            '/exhibits/300sl',
                            '/exhibits/mclarenF1',
                            '/exhibits/xj220',
                            '/exhibits/testarossa',
                        ]);
                    });
                }
                return response;
            }));

        }
    } else {
        if (!online && navigator.onLine) {
            online = true
            sendCachedRequests().then(r => console.log("Sended!"));
        }

        event.respondWith(
            fetch(event.request)
                .then((response) => {
                    // response from server, cache update
                    const clonedResponse = response.clone();
                    caches.open(staticCacheName)
                        .then((cache) => {
                            console.log("update cache")
                            cache.put(event.request, clonedResponse);
                        });
                    return response;
                })
                .catch(() => {
                    // response from cache
                    return caches.match(event.request);
                })
        );
    }
});

let iterator = 0;

function savePostData(request) {
    return new Promise((resolve, reject) => {
        const openRequest = indexedDB.open('requestDatabase', 2);
        openRequest.onerror = () => {
            reject(new Error('Error while opening storage'));
        };

        openRequest.onupgradeneeded = () => {
            const db = openRequest.result;
            if (!db.objectStoreNames.contains('postData')) {
                const objectStore = db.createObjectStore('postData', {keyPath: 'id'});
            }
        };

        openRequest.onsuccess = async () => {
            const db = openRequest.result;

            const clonedRequest = request.clone();
            const requestUrl = clonedRequest.url;
            const requestBody = await clonedRequest.text();

            const transaction = db.transaction('postData', 'readwrite');
            const store = transaction.objectStore('postData');

            const requestObject = {id: iterator++, url: requestUrl, body: requestBody};
            const putRequest = store.put(requestObject);

            putRequest.onerror = () => {
                reject(new Error('Error while saving data'));
            };
            putRequest.onsuccess = () => {
                resolve();
            };
            transaction.oncomplete = () => {
                db.close();
            };
        };
    });
}

function sendCachedRequests() {
    return new Promise((resolve, reject) => {
        const openRequest = indexedDB.open('requestDatabase', 2);

        openRequest.onerror = () => {
            reject(new Error('Error while opening storage'));
        };

        openRequest.onupgradeneeded = () => {
            const db = openRequest.result;

            if (!db.objectStoreNames.contains('postData')) {
                const objectStore = db.createObjectStore('postData', {keyPath: 'id'});
            }
        };

        openRequest.onsuccess = () => {
            const db = openRequest.result;
            const transaction = db.transaction('postData', 'readonly');
            const store = transaction.objectStore('postData');

            const getRequest = store.get(iterator - 1);

            getRequest.onsuccess = (event) => {
                const requestObject = event.target.result;

                if (requestObject) {
                    const {url, body, headers} = requestObject;
                    const params = new URLSearchParams(body);
                    const formData = new FormData();
                    formData.append("question1", params.get('question1'))
                    formData.append("question2", params.get('question2'))
                    formData.append("question3", params.get('question3'))
                    formData.append("question4", params.get('question4'))
                    formData.append("question5", params.get('question5'))
                    formData.append("question6", params.get('question6'))
                    formData.append("question7", params.get('question7'))
                    formData.append("question8", params.get('question8'))
                    formData.append("question9", params.get('question9'))
                    formData.append("question10", params.get('question10'))
                    formData.append("_token", params.get('_token'))
                    const request = new Request(url, {method: 'POST', body: formData});

                    fetch(request).catch((error) => console.log("Still offline"))
                        .then((response) => {
                            if (response && response.ok) {
                                const deleteDB = indexedDB.open('requestDatabase', 2);
                                deleteDB.onsuccess = () => {
                                    const deleteD = deleteDB.result;
                                    const deleteTransaction = deleteD.transaction('postData', 'readwrite');
                                    const deleteStore = deleteTransaction.objectStore('postData');
                                    const deleteRequest = deleteStore.delete(iterator - 1);

                                    deleteRequest.onsuccess = (event) => {
                                        console.log('Object deleted successfully');
                                    };

                                    deleteRequest.onerror = (event) => {
                                        console.error('Error deleting object:', event.target.error);
                                    };

                                    deleteTransaction.oncomplete = () => {
                                        console.log('Delete transaction completed');
                                    };
                                }
                            }
                        })
                        .catch((error) => {
                            console.log("Error while sending POST request", error)
                        });

                    getRequest.onerror = () => {
                        reject(new Error('Error while selecting data'));
                    };

                    transaction.oncomplete = () => {
                        db.close();
                    };
                }
            }
        }

    });

}
