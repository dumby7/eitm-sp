@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Test Results</h1>

        @if ($testResults->isEmpty())
            <p>No test results found.</p>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Correct Answers</th>
                        <th scope="col">Submitted</th>
                        <th scope="col">Success</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($testResults as $testResult)
                        @php
                            $successPercentage = ($testResult->correct_answers / 10) * 100;
                            $successClass = $successPercentage >= 80 ? 'success' : 'danger';
                        @endphp
                        <tr class="{{ $successClass }}">
                            <td>{{ $testResult->correct_answers }}</td>
                            <td>{{ $testResult->submitted }}</td>
                            <td>{{ $successPercentage }}%</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <style>
        .success {
            background-color: #d4edda !important;
            color: #155724;
        }

        .danger {
            background-color: #f8d7da !important;
            color: #721c24;
        }
    </style>
@endsection
