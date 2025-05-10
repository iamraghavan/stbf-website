@php
    use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Project Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            transition: all 0.3s ease-in-out;
        }
        .sidebar a, .sidebar button {
            transition: background-color 0.2s ease, padding-left 0.2s ease;
        }
        .sidebar a:hover, .sidebar button:hover {
            background-color: rgba(255, 255, 255, 0.1);
            padding-left: 1.5rem;
        }
        .navbar {
            transition: all 0.3s ease;
        }
        .alert {
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="sidebar w-64 bg-gradient-to-b from-indigo-800 to-indigo-900 text-white p-6 flex flex-col">
            <div class="flex items-center space-x-2 mb-6">
                <i class="fa-solid fa-tasks text-xl"></i>
                <h4 class="text-lg font-semibold">Project Management</h4>
            </div>
            <hr class="border-indigo-700 mb-4">
            <ul class="space-y-2 flex-grow">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 p-2 rounded-lg">
                        <i class="fa-solid fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('projects.index') }}" class="flex items-center space-x-2 p-2 rounded-lg">
                        <i class="fa-solid fa-folder-open"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.edit') }}" class="flex items-center space-x-2 p-2 rounded-lg">
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li> --}}
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center space-x-2 p-2 rounded-lg w-full text-left">
                            <i class="fa-solid fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="flex-grow flex flex-col">
            <!-- Navbar -->
            <nav class="navbar bg-white shadow-sm p-4 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <span class="text-gray-700 font-medium">Welcome, {{ Auth::user()->name }}</span>
                </div>
                <div class="flex items-center space-x-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-indigo-600 hover:text-indigo-800 font-medium">Logout</button>
                    </form>
                </div>
            </nav>
            <!-- Content -->
            <div class="container mx-auto p-6 flex-grow">
                @if (session('success'))
                    <div class="alert bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
