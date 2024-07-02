<!-- resources/views/admin/dashboard/dashboard.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Panel Total Carousels -->
            <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Total Carousels</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $carouselCount }}</h5>
                            <a href="{{ route('admin.carousels.index') }}">
                                <p class="card-text text-light">Manage all carousels from here.</p>
                            </a>
                        </div>
                    </div>
            </div>

            <!-- Panel Total Descriptions -->
            <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Total Descriptions</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $descriptionCount }}</h5>
                            <a href="{{ route('admin.descriptions.index') }}">
                                <p class="card-text text-light">Manage all descriptions from here.</p>
                            </a>
                        </div>
                    </div>
            </div>

            <!-- Panel Total Services -->
            <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Total Services</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $serviceCount }}</h5>
                            <a href="{{ route('admin.services.index') }}">
                                <p class="card-text">Manage all services from here.</p>
                            </a>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Latest Activity Section -->
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">Latest Activity</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Action</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example Rows - Replace with dynamic content if needed -->
                                @foreach($latestActivities as $activity)
                                    <tr>
                                        <td>{{ $activity['id'] }}</td>
                                        <td>{{ $activity['action'] }}</td>
                                        <td>{{ $activity['date'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
