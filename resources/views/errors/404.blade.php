@extends('layouts.app')

@section('title', 'MissingPage')

@section('content')
    <div class="d-flex container flex-column text-center align-items-center">
        <div class="d-flex flex-column align-items-center justify-content-center center-box">
            <h1>Error - The page is missing!</h1>
            <p class="lead">
                The page that you are trying to access is not present on the web, or it is misspelled!
            </p>
        </div>
    </div>
@endsection
