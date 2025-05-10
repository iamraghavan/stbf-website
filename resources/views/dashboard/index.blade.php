@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Welcome to Project Management</h5>
            <p class="card-text">
                Manage your projects efficiently. Use the sidebar to navigate to the Projects section to view, create, edit, or delete projects.
            </p>
            {{-- <a href="{{ route('projects.index') }}" class="btn btn-primary">Go to Projects</a> --}}
        </div>
    </div>
@endsection
