@extends('layouts.app')

{{--@section('title', 'Welcome') --}}

@section('css_files')
    <link href="{{ asset('css/exhibits/unique.css') }}" rel="stylesheet">
@endsection

@section('js_files')
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            // Get the height of the right-side content
            var rightContent = document.getElementById('car_info_content');
            var rightContentHeight = rightContent.offsetHeight;

            // Set the height of the gallery content dynamically
            var galleryContent = document.querySelector('.gallery-content');
            galleryContent.style.height = rightContentHeight + 'px';
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="page-container">
                <div class="col-md-6">
                    <div class="gallery">
                        <div class="gallery-content">
                            @foreach($imagePaths as $path)
                                <img src="{{ asset('images/' . $path) }}" alt="{{ $exhibit->title }}" class="gallery-image">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body right-content" id="car_info_content">
                            <title>Exhibit car - {{ $exhibit->unique_name }}</title>
                            <h1>{{ $exhibit->title }}</h1>
                            <p class="text-block">{!! nl2br(e($exhibit->description)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
