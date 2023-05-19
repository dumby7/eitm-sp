@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Test</h1>

        <form method="POST" action="/home">
            @csrf

            <div class="form-group mb-3">
                <label for="question1">Enzo Ferrari once said about a car: "This is the most beautiful car ever made". Which car was he referring to?</label>
                <select class="form-control" name="question1" id="question1">
                    <option value="A">Austin Mini</option>
                    <option value="B">Jaguar E-type</option>
                    <option value="C">Ferrari Enzo</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question2">In which year held a Bugatti Veyron SS top speed record and become fastest street-legal production cars in the world?</label>
                <select class="form-control" name="question2" id="question2">
                    <option value="A">2012</option>
                    <option value="B">2013</option>
                    <option value="C">2014</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question3">What was the the first four-wheel drive car used on a rally race?</label>
                <select class="form-control" name="question3" id="question3">
                    <option value="A">Lancia Delta Integrale</option>
                    <option value="B">Audi Quattro</option>
                    <option value="C">Toyota Celica Turbo 4WD</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question4">What car is considered a British popular culture car?</label>
                <select class="form-control" name="question4" id="question4">
                    <option value="A">VW Beetle</option>
                    <option value="B">Austin Mini</option>
                    <option value="C">Ford Falcon</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question5">Mustang shared is basic platform with another car, what is the car's name?</label>
                <select class="form-control" name="question5" id="question5">
                    <option value="A">Dodge Challenger</option>
                    <option value="B">Ford Falcon</option>
                    <option value="C">Chevrolet Camaro</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question6">Volkswagen Beetle was mainly designed by a well known engineer. What is his name?</label>
                <select class="form-control" name="question6" id="question6">
                    <option value="A">Wilhelm Maybach</option>
                    <option value="B">Ferdinand Porsche</option>
                    <option value="C">Rudolf Diesel</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question7">Which first Porsche 911 model won the Le Mans?</label>
                <select class="form-control" name="question7" id="question7">
                    <option value="A">Porsche 934</option>
                    <option value="B">Porsche 935</option>
                    <option value="C">Porsche 936</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question8">The Mercedes-Benz 300SL was at it's time the fastest car in the production. What was it's top speed?</label>
                <select class="form-control" name="question8" id="question8">
                    <option value="A">Around 250 Km/h</option>
                    <option value="B">Around 260 Km/h</option>
                    <option value="C">Around 270 Km/h</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question9">Which people do own an McLaren F1?</label>
                <select class="form-control" name="question9" id="question9">
                        <option value="A">Jay Leno, Simon Cowell, Lewis Hamilton</option>
                    <option value="B">Jay Leno, Rowan Atkinson, Lewis Hamilton</option>
                    <option value="C">Jay Leno, Rowan Atkinson, Lando Norris</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="question10">Jaguar had in it's first production years a V12 engine. For which type of engine was later swaped?</label>
                <select class="form-control" name="question10" id="question10">
                    <option value="A">V8</option>
                    <option value="B">Turbocharged V6</option>
                    <option value="C">V6</option>
                </select>
            </div>

            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>
@endsection
