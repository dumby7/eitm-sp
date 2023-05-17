@extends('layouts.app')

{{--@section('title', 'Welcome') --}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('exhibits.index') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="text">Write here the "unique_name" for the exhibit.</label>
                                <input type="text" name="unique_name" placeholder="Enter the unique name" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
