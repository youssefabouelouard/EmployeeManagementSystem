@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid p-4">

    <h1 class="mb-4">
        Dashboard
    </h1>


    <div class="row">

        <div class="col-md-4">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h5 class="card-title">
                        Total Employees
                    </h5>

                    <h2>
                        0
                    </h2>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h5 class="card-title">
                        Departments
                    </h5>

                    <h2>
                        0
                    </h2>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h5 class="card-title">
                        Active Employees
                    </h5>

                    <h2>
                        0
                    </h2>

                </div>

            </div>

        </div>

    </div>


</div>

@endsection