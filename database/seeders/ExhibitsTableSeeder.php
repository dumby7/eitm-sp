<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exhibits = [
            [
                'unique_name' => 'gt40',
                'picture_name' => 'exhibits/FordGT40/GT40.jpeg;exhibits/FordGT40/FordGT40_02.jpg;exhibits/FordGT40/GT40.jpeg;exhibits/FordGT40/FordGT40_02.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03;Test textu u obrazku 04',
                'date_created' => '2023-01-01',
                'date_modified' => '2023-01-02',
                'title' => 'Ford GT 40',
                'description' => 'The Ford GT40 is a high-performance endurance racing car designed and built by the Ford Motor Company. It grew out of the "Ford GT" (for Grand Touring) project, an effort to compete in European long-distance sports car races, against Ferrari, who had won the prestigious 24 Hours of Le Mans race from 1960 to 1965. Ford succeeded with the GT40, winning the 1966 through 1969 races.

The effort began in the early 1960s when Ford Advanced Vehicles began to build the GT40 Mk I, based upon the Lola Mk6, at their base in Slough, UK. After disappointing race results, the engineering team was moved in 1964 to Dearborn, Michigan (Kar Kraft). The range was powered by a series of American-built Ford V8 engines modified for racing.

In 1966, Ford with the GT40 Mk II car broke Ferrari\'s streak at Le Mans, thus becoming the first American manufacturer to have won a major European race since Jimmy Murphy\'s triumph with Duesenberg at the 1921 French Grand Prix. In 1967, the Mk IV car became the only car designed and built entirely in the United States to achieve the overall win at Le Mans.

The Mk I, the oldest of the cars, won in 1968 and 1969, the second chassis to win Le Mans more than once. (This Ford/Shelby chassis, #P-1075, was believed to have been the first until the Ferrari 275P chassis 0816 was revealed to have won the 1964 race after winning the 1963 race in 250P configuration and with a 0814 chassis plate). Its American Ford V8 engine, originally of 4.7-liter displacement capacity (289 cubic inches), was enlarged to 4.9 liters (302 cubic inches), with custom alloy Gurney–Weslake cylinder heads.

The "40" represented its height of 40 inches (1.02 m), measured at the windshield, the minimum allowed. The first 12 "prototype" vehicles carried serial numbers GT-101 to GT-112. Once "production" began, the Mk I, Mk II, Mk III, and Mk IV were numbered GT40P/1000 through GT40P/1145, and thus officially "GT40s". The Mk IVs were numbered J1-J12.

The contemporary Ford GT is a modern homage to the GT40',
            ],
            [
                'unique_name' => 'etype',
                'picture_name' => 'exhibits/JaguarEType/EType01.jpg;exhibits/JaguarEType/EType02.jpg;exhibits/JaguarEType/EType03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-02-01',
                'date_modified' => '2023-02-02',
                'title' => 'Jaguar E-type',
                'description' => 'The Jaguar E-Type, or the Jaguar XK-E for the North American market, is a British sports car that was manufactured by Jaguar Cars Ltd between 1961 and 1974. Its combination of beauty, high performance, and competitive pricing established the model as an icon of the motoring world. The E-Type\'s claimed 150 miles per hour (240 km/h) top speed, sub-7-second 0 to 60 mph (97 km/h) acceleration, unitary construction, disc brakes, rack-and-pinion steering, and independent front and rear suspension distinguished the car and spurred industry-wide changes.

The E-Type was based on Jaguar\'s D-Type racing car, which had won the 24 Hours of Le Mans for three consecutive years beginning in 1955.

The E-Type employed what was, for the early 1960s, a novel design principle, with a front subframe carrying the engine, front suspension and front bodywork bolted directly to the body tub. No ladder frame chassis, as was common at the time, was needed and as such the first cars weighed only 1,315 kg (2,899 lb).

It is rumored that, on its debut on 15 March 1961, Enzo Ferrari called it "the most beautiful car ever made", but this statement is not fully confirmed. In 2004, Sports Car International magazine placed the E-Type at number one on their list of Top Sports Cars of the 1960s. In March 2008, the Jaguar E-Type ranked first in The Daily Telegraph\'s online list of the world\'s "100 most beautiful cars" of all time. Outside automotive circles, the E-type has featured in the Diabolik comic series, Austin Powers films and the television series Mad Men.',
            ],
            [
                'unique_name' => 'veyron',
                'picture_name' => 'exhibits/BugattiVeyron/BugattiVeyron01.jpg;exhibits/BugattiVeyron/BugattiVeyron02.jpg;exhibits/BugattiVeyron/BugattiVeyron03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'Bugatti Veyron',
                'description' => 'The Bugatti Veyron is a mid-engine sports car, designed and developed in Germany by the Volkswagen Group and Bugatti and manufactured in Molsheim, France, by French automobile manufacturer Bugatti. It was named after the racing driver Pierre Veyron.

The original version has a top speed of 407 km/h (253 mph). It was named the 2000s Car of the Decade by the BBC television programme Top Gear. The standard Veyron also won Top Gear\'s Best Car Driven All Year award in 2005.

The Super Sport version of the Veyron is one of the fastest street-legal production cars in the world, with a top speed of 431.072 km/h (267.856 mph). The Veyron Grand Sport Vitesse was the fastest roadster in the world, reaching an averaged top speed of 408.84 km/h (254.04 mph) in a test on 6 April 2013.

The Veyron\'s chief designer was Hartmut Warkuß, with the exterior being designed by Jozef Kabaň of Volkswagen. Much of the engineering work was conducted under the guidance of chief technical officer Wolfgang Schreiber. The Veyron includes a sound system designed and built by Burmester Audiosysteme.

Several special variants have been produced. In December 2010, Bugatti began offering prospective buyers the ability to customise exterior and interior colours by using the Veyron 16.4 Configurator application on the marque\'s official website. The Bugatti Veyron was discontinued in late 2014, but special edition models continued to be produced until 2015.',
            ],
            [
                'unique_name' => 'quattro',
                'picture_name' => 'exhibits/AudiQuattro/AudiQuattro01.jpg;exhibits/AudiQuattro/AudiQuattro02.jpg;exhibits/AudiQuattro/AudiQuattro03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'Audi Quattro',
                'description' => 'The word quattro is derived from the Italian word for "four" to represent the fact that the vehicle delivers power to all four wheels. The name has also been used by Audi to refer to the quattro four-wheel-drive system, or any four-wheel-drive version of an Audi model. The original Quattro model is also commonly referred to as the Ur-Quattro - the "Ur-" (German for "primordial", "original", or "first of its kind") is an augmentative prefix. The idea of such a car came from the Audi engineer Jörg Bensinger.

The Audi Quattro was the first rally car to take advantage of the then-recently changed rules that allowed the use of four-wheel drive in competition racing. It won consecutive competitions for the next two years. To commemorate the success of the original vehicle, all subsequent Audi production automobiles with this four-wheel-drive system were badged with the trademark quattro with a lower case "q" letter.

The Audi Quattro shared many parts and platform with the Coupé version of the Audi 80 (B2). The quattro was internally designated Typ 85, a production code it shared with the quattro versions of the Audi Coupé. Its characteristic flared wheelarches were styled by Martin Smith. The Audi Quattro also had independent front and rear suspension.',
            ],
            [
                'unique_name' => 'mini',
                'picture_name' => 'exhibits/AustinMini/AustinMini01.jpg;exhibits/AustinMini/AustinMini02.jpg;exhibits/AustinMini/AustinMini03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'Austin Mini',
                'description' => 'The Mini is a small, two-door, four-seat car, developed as ADO15, and produced by the British Motor Corporation (BMC) and its successors, from 1959 until 2000. Minus a brief hiatus, original Minis were built for four decades and sold during six, from the last year of the 1950s into the last year of the 20th century, over a single generation, as fastbacks, estates, and convertibles.

The original Mini is considered an icon of 1960s British popular culture. Its space-saving transverse engine and front-wheel drive layout – allowing 80% of the area of the car\'s floorpan to be used for passengers and luggage – influenced a generation of car makers. In 1999, the Mini was voted the second-most influential car of the 20th century, behind the Ford Model T, and ahead of the Citroën DS and Volkswagen Beetle. The front-wheel-drive, transverse-engine layout were used in many other "supermini" style car designs such as Honda N360 (1967), Nissan Cherry (1970), and Fiat 127 (1971). The layout was also adapted for larger subcompact designs.

    This distinctive two-door car was designed for BMC by Sir Alec Issigonis. It was manufactured at the Longbridge plant in Birmingham, England located next to BMC\'s headquarters and at the former Morris Motors plant at Cowley near Oxford, in the Victoria Park/Zetland British Motor Corporation (Australia) factory in Sydney, Australia, and later also in Spain (Authi), Belgium, Italy (Innocenti) Chile, Malta, Portugal, South Africa, Uruguay, Venezuela, and Yugoslavia (IMV).

The Italian version of the Mini was produced by Innocenti in Milan and it was sold under the "Innocenti Mini" marque. Innocenti was also producing Lambretta scooters at that time.

The Mini Mark I had three major UK updates: the Mark II, the Clubman, and the Mark III. Within these was a series of variations, including an estate car, a pick-up truck, a van, and the Mini Moke, a jeep-like buggy.

The performance versions, the Mini Cooper and Cooper "S", were successful as both race and rally cars, winning the Monte Carlo Rally in 1964, 1965, and 1967. In 1966, the first-placed Mini (along with nine other cars) was disqualified after the finish, under a controversial decision that the car\'s headlights were against the rules.

In August 1959, the Mini was marketed under the Austin and Morris names, as the Austin Seven and Morris Mini-Minor. The Austin Seven was renamed Austin Mini in January 1962 and Mini became a marque in its own right in 1969. In 1980, it once again became the Austin Mini, and in 1988, just "Mini" (although the "Rover" badge was applied on some models exported to Japan).

BMW acquired the Rover Group (formerly British Leyland) in 1994, and sold the greater part of it in 2000, but retained the rights to build cars using the Mini name. Retrospectively, the car is known as the "Classic Mini" to distinguish it from the modern, BMW influenced MINI family of vehicles produced since 2000.',
            ],
            [
                'unique_name' => 'mustang',
                'picture_name' => 'exhibits/FordMustang/Mustang1G01.jpg;exhibits/FordMustang/Mustang1G02.jpg;exhibits/FordMustang/Mustang1G03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'For Mustang (first generation)',
                'description' => 'The first-generation Ford Mustang was manufactured by Ford from March 1964 until 1973. The introduction of the Mustang created a new class of automobiles known as the pony cars. The Mustang’s styling, with its long hood and short deck, proved wildly popular and inspired a host of competition.

It was initially introduced on April 17, 1964, as a hardtop and convertible with the fastback version put on sale in August 1964. At the time of its introduction, the Mustang, sharing its platform with the Falcon, was slotted into a compact car segment.

With each revision, the Mustang saw an increase in overall dimensions and in engine power. The 1971 model saw a drastic redesign to its predecessors. After an initial surge, sales were steadily declining, as Ford began working on a new generation Mustang. With the onset of the 1973 oil crisis, Ford was prepared, having already designed the smaller Mustang II for the 1974 model year. This new car had no common components with preceding models.

As Lee Iacocca\'s assistant general manager and chief engineer, Donald N. Frey was the head engineer for the Mustang project — supervising the development of the Mustang in a record 18 months from September 1962 to April 1964. — while Iacocca himself championed the project as Ford Division general manager.

    Drawing on inspiration from the mid-engined Ford Mustang I concept vehicle, Lee Iacocca ordered development of a new "small car" to vice-president of design at Ford, Eugene Bordinat.

    Bordinat tasked Ford\'s three design studios (Ford, Lincoln-Mercury, and Advanced Design) to create proposals for the new vehicle.

The design teams had been given five goals for the design of the Mustang: It would seat four, have bucket seats and a floor mounted shifter, weigh no more than 2,500 pounds (1,100 kg) and be no more than 180 inches (5 m) in length, sell for less than US$2,500 (equivalent to $21,843 in 2021), and have multiple power, comfort, and luxury options.',
            ],
            [
                'unique_name' => 'beetle',
                'picture_name' => 'exhibits/VWBeetle/VWBeetle01.jpg;exhibits/VWBeetle/VWBeetle02.jpg;exhibits/VWBeetle/VWBeetle03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'Volkswagen Beetle Type 1',
                'description' => 'The Volkswagen Beetle—officially the Volkswagen Type 1, is an economy car that was manufactured and marketed by the German company Volkswagen (VW) from 1938 until 2003. It has a rear-engine design with a two-door bodystyle and is intended for five occupants (later, Beetles were restricted to four people in some countries).

The need for a people\'s car (Volkswagen in German), its concept and its functional objectives were formulated by the leader of Nazi Germany, Adolf Hitler, who wanted a cheap, simple car to be mass-produced for his country\'s new road network (Reichsautobahn). Members of the National Socialist party, with an additional dues surcharge, were promised the first production, but the Spanish Civil War shifted most production resources to military vehicles to support the Nationalists under Francisco Franco.

Lead engineer Ferdinand Porsche and his team took until 1938 to finalise the design. Béla Barényi is credited with conceiving the original basic design for this car in 1925, notably by Mercedes-Benz, on their website, including his original technical drawing, five years before Porsche claimed to have done his initial version. The influence on Porsche\'s design of other contemporary cars, such as the Tatra V570, and the work of Josef Ganz remains a subject of dispute. The result was the first Volkswagen, and one of the first rear-engined cars since the Brass Era. With 21,529,464 produced, the Beetle is the longest-running and most-manufactured car of a single platform ever made.

    Although designed in the 1930s, due to World War II, civilian Beetles only began to be produced in significant numbers by the end of the 1940s. The car was then internally designated the Volkswagen Type 1, and marketed simply as the Volkswagen. Later models were designated Volkswagen 1200, 1300, 1500, 1302, or 1303, the first three indicating engine displacement, the last two derived from the model number.

    The car became widely known in its home country as the Käfer (German for "beetle", cognate with English chafer) and was later marketed under that name in Germany, and as the Volkswagen in other countries. For example, in France it was known as the Coccinelle (French for ladybug).',
            ],
            [
                'unique_name' => 'porsche911',
                'picture_name' => 'exhibits/Porsche911/Porsche911_01.jpg;exhibits/Porsche911/Porsche911_02.jpg;exhibits/Porsche911/Porsche911_03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'Porsche 911 \'64',
                'description' => 'The original Porsche 911 (pronounced nine eleven, German: Neunelfer) is a luxury sports car made by Porsche AG of Stuttgart, Germany. A prototype of the famous, distinctive, and durable design was shown to the public in autumn 1963. Production began in September 1964 and continued through 1989. It was succeeded by a modified version, internally referred to as Porsche 964 but still sold as Porsche 911, as are current models.

Mechanically, the 911 was notable for being rear engined and air-cooled. From its inception, the 911 was modified both by private teams and the factory itself for racing, rallying and other types of automotive competition. The original 911 series is often cited as the most successful competition car ever, especially when its variations are included, mainly the powerful 911-derived 935 which won 24 Hours of Le Mans and other major sports cars races outright against prototypes.

The Porsche 911 was developed as a much more powerful, larger, more comfortable replacement for the Porsche 356. The new car made its public debut at the 1963 Internationale Automobil-Ausstellung, better known to English speakers as the Frankfurt Motor Show.

It was initially designated as the "Porsche 901", after its internal project number. However, Peugeot protested on the grounds that in France it had exclusive rights to car names formed by three numbers with a zero in the middle. So, instead of selling the new model with another name in France, Porsche changed the name to 911. It went on sale in 1964.',
            ],
            [
                'unique_name' => '300sl',
                'picture_name' => 'exhibits/MB300SL/MB300SL01.jpg;exhibits/MB300SL/MB300SL02.jpg;exhibits/MB300SL/MB300SL03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'Mercedes-Benz 300 SL',
                'description' => 'The Mercedes-Benz 300 SL (chassis code W 198) is a two-seat sports car that was produced by Mercedes-Benz from 1954 to 1957 as a gullwinged coupé and from 1957 to 1963 as a roadster. The 300 SL traces its origins to the company\'s 1952 racing car, the W194, and was equipped with a mechanical direct fuel injection system that significantly increased the power output of its three-liter overhead camshaft straight-six engine. The 300 SL was capable of reaching speeds of up to 263 km/h (163 mph), earning it a reputation as a sports car racing champion and making it the fastest production car of its time. The car\'s iconic gullwing doors and innovative lightweight tubular-frame construction contributed to its status as a groundbreaking and highly influential automobile. The name "SL" is an abbreviation of the German term "super-leicht," meaning "super-light," a reference to the car\'s racing-bred lightweight construction. The 300 SL was introduced to the American market at the suggestion of Max Hoffman, Mercedes-Benz\'s United States importer at the time, who recognized the potential demand for a high-performance sports car among American buyers. The Mercedes-Benz 300 SL remains a highly sought-after classic car and is celebrated for its performance, design, and technological advancements.

                Mass production of the 300 SL was not initially planned. However, the idea of a toned-down Grand Prix car for affluent performance enthusiasts in the booming post-war American market was suggested by Max Hoffman at a 1953 directors\' meeting in Stuttgart. Mercedes\' new general director, Fritz Konecke, agreed to Hoffman\'s order for 1,000 cars; the 300 SL was introduced at the February 1954 New York International Auto Show instead of the Frankfurt or Geneva shows, where company models usually debuted. In addition, the production of a smaller roadster, the Mercedes-Benz 190 SL, was announced after Hoffman ordered another 1,000 of the roadsters. The 300 SL and the 190 SL premiered at the 1954 New York show; Mercedes-Benz experienced a positive visitor response to both, and production began at the Sindelfingen plant in August of that year.

                The price for the 300 SL coupe in Germany was DM 29,000, and $6,820 in the US. The roadster was DM 32,500 in Germany, and $10,950 in the US – 10 percent more expensive than the coupe in Europe, and over 70 percent more in the US.',
            ],
            [
                'unique_name' => 'mclarenF1',
                'picture_name' => 'exhibits/MclarenF1/MclarenF1_01.jpg;exhibits/MclarenF1/MclarenF1_02.jpg;exhibits/MclarenF1/MclarenF1_03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'McLaren F1',
                'description' => 'The McLaren F1 is a sports car designed and manufactured by British automobile manufacturer McLaren Cars, and powered by the BMW S70/2 V12 engine. The original concept was conceived by Gordon Murray. Murray was able to convince Ron Dennis to back the project. He hired Peter Stevens to design the exterior and interior of the car. On 31 March 1998, the XP5 prototype with a modified rev limiter set the Guinness World Record for the world\'s fastest production car, reaching 240.1 mph (386.4 km/h), surpassing the modified Jaguar XJ220\'s 217.1 mph (349 km/h) record from 1993.

The car features numerous proprietary designs and technologies; it is lighter and has a more streamlined structure than many modern sports cars, despite having one seat more than most similar sports cars, with the driver\'s seat located in the centre (and slightly forward) of two passengers\' seating positions, providing driver visibility superior to that of a conventional seating layout. It was conceived as an exercise in creating what its designers hoped would be considered the ultimate road car. Despite not having been designed as a track machine, a modified race car edition of the vehicle won several races, including the 1995 24 Hours of Le Mans, where it faced purpose-built prototype race cars. Production began in 1992 and ended in 1998. In all, 106 cars were manufactured, with some variations in the design.

In 1994, the British car magazine Autocar stated in a road test regarding the F1, "The McLaren F1 is the finest driving machine yet built for the public road." They further stated, "The F1 will be remembered as one of the great events in the history of the car, and it may possibly be the fastest production road car the world will ever see." In 2005, Channel4 placed the car at number one on their list of the 100 greatest cars, calling it "the greatest automotive achievement of all time". In popular culture, the McLaren F1 has earned its spot as \'The greatest automobile ever created\' and \'The Most Excellent Sports Car of All Time\' amongst a wide variety of car enthusiasts and lovers. Notable past and present McLaren F1 owners include Lewis Hamilton, Elon Musk, Rowan Atkinson, Jay Leno, George Harrison, Ralph Lauren, Nick Mason, and the Sultan of Brunei. In the April 2017 issue of Top Gear Magazine, the McLaren F1 was listed as one of the fastest naturally aspirated cars currently available in the world, and in the same league as more modern vehicles such as the Ferrari Enzo and Aston Martin One-77 despite being produced and engineered 10 years prior to the Ferrari Enzo and 17 years prior to the Aston Martin One-77.',
            ],
            [
                'unique_name' => 'xj220',
                'picture_name' => 'exhibits/JaguarXJ220/JaguarXJ220_01.jpg;exhibits/JaguarXJ220/JaguarXJ220_02.jpg;exhibits/JaguarXJ220/JaguarXJ220_03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'Jaguar XJ 220',
                'description' => 'The Jaguar XJ220 is a two-seat sports car produced by British luxury car manufacturer Jaguar from 1992 until 1994, in collaboration with the specialist automotive and race engineering company Tom Walkinshaw Racing. The XJ220 recorded a top speed of 212.3 mph (341.7 km/h) during testing by Jaguar at the Nardo test track in Italy. This made it the fastest production car from 1992 to 1993. According to Jaguar, an XJ220 prototype managed a Nürburgring lap time of 7:46.36 in 1991 which was faster than any production car lap time before it.

The XJ220 was developed from a V12-engined 4-wheel drive concept car designed by an informal group of Jaguar employees working in their spare time. The group wished to create a modern version of the successful Jaguar 24 Hours of Le Mans racing cars of the 1950s and 1960s that could be entered into FIA Group B competitions. The XJ220 made use of engineering work undertaken for Jaguar\'s then current racing car family.

The initial XJ220 concept car was unveiled to the public at the 1988 British International Motor Show, held in Birmingham, England. Its positive reception prompted Jaguar to put the car into production. Approximately 1,500 deposits of £50,000 each were taken and deliveries were planned for 1992.

Engineering and emissions requirements resulted in significant changes to the specification of the XJ220, most notably the replacement of the Jaguar V12 engine by a turbocharged V6 engine. The changes to the specification and a collapse in the demand of high performance cars brought about by the early 1990s recession resulted in many buyers choosing not to exercise their purchase options. A total of just 275 cars were produced by the time production ended, each with a retail price of £470,000 in 1992, making it one of the most expensive cars at that time.',
            ],
            [
                'unique_name' => 'testarossa',
                'picture_name' => 'exhibits/FerrariTestarossa/Testarossa01.jpg;exhibits/FerrariTestarossa/Testarossa02.jpg;exhibits/FerrariTestarossa/Testarossa03.jpg',
                'picture_description' => 'Test textu u obrazku 01;Test textu u obrazku 02;Test textu u obrazku 03',
                'date_created' => '2023-05-18',
                'date_modified' => '2023-05-18',
                'title' => 'Ferrari Testarossa',
                'description' => 'The Ferrari Testarossa (Type F110) is a 12-cylinder mid-engine sports car manufactured by Ferrari, which went into production in 1984 as the successor to the Ferrari Berlinetta Boxer. The Pininfarina-designed car was originally produced from 1984 until 1991, with two model revisions following the end of Testarossa production called the 512 TR and F512 M, which were produced from 1992 until 1996. Including revised variations, almost 10,000 cars in total were produced, making it at the time one of the most mass-produced Ferrari models.

The Testarossa is a two-door coupé that premiered at the 1984 Paris Auto Show. All versions of the Testarossa were available with a rear-mounted, five-speed manual transmission. The rear mid-engine design (engine between the axles but behind the cabin) keeps the centre of gravity in the middle of the car, which increases stability and improves the car\'s cornering ability, and thus results in a standing weight distribution of 40% front: 60% rear.

The original Testarossa was re-engineered for the 1992 model year and was introduced as the 512 TR (TR meaning TestaRossa), at the Los Angeles Auto Show, effectively as a completely new car, and an improved weight distribution of 41% front, 59% rear. Another new variant called the F512 M was introduced at the 1994 Paris Auto Show. The car dropped the TR initials and added the M which in Italian stood for modificata, or translated to modified, and was the final version of the Testarossa, which continued its predecessor\'s weight distribution improvement of 42% front, 58% rear. The F512 M was Ferrari\'s last vehicle that featured the flat-12 engine.

    The Testarossa is a recognized cultural icon of the 1980s, and was popularized by media including the 1984 television series Miami Vice (from the 1986 season onward) and Sega\'s 1986 video game Out Run.',
            ],
            // Add more exhibits as needed
        ];

        DB::table('exhibits')->insert($exhibits);
    }
}
