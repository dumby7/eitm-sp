@extends('layouts.app')

{{--@section('title', 'Welcome') --}}

@section('css_files')
    <link href="{{ asset('css/exhibits/index.css') }}" rel="stylesheet">
@endsection

@section('js_files')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the input element for filtering
            const filterInput = document.getElementById('filter');

            // Get the table and all rows
            const table = document.getElementById('exhibits-table');
            const rows = table.getElementsByTagName('tr');

            // Add event listener for input change
            filterInput.addEventListener('input', function () {
                const filterValue = filterInput.value.toLowerCase();

                // Iterate over rows and hide/show based on filter
                for (let i = 1; i < rows.length; i++) { // Start from 1 to exclude table header row
                    const uniqueName = rows[i].getElementsByTagName('td')[0].innerText.toLowerCase();

                    if (uniqueName.includes(filterValue)) {
                        rows[i].style.display = '';
                    } else {
                        rows[i].style.display = 'none';
                    }
                }
            });
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('exhibits.index') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="text" class="mb-1">Write here the "unique_name" for the exhibit, that you would like to see in detail:</label>
                                <input type="text" name="unique_name" placeholder="Enter the unique name" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h3>Table of museum exhibits</h3>
                        <div class="form-group">
                            <label for="filter">Filter by Unique Name:</label>
                            <input type="text" id="filter" class="form-control">
                        </div>
                        <table class="table" id="exhibits-table">
                            <thead>
                            <tr>
                                <th>Unique Name</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exhibits as $exhibit)
                                <tr class="table-hover-row" onclick="window.location='{{ route('exhibits.unique', $exhibit->unique_name) }}'">
                                    <td>{{ $exhibit->unique_name }}</td>
                                    <td>{{ $exhibit->title }}</td>
                                    <td style="text-align: justify">{{ strlen($exhibit->description) > 255 ? substr($exhibit->description, 0, 255) . '...' : $exhibit->description }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
