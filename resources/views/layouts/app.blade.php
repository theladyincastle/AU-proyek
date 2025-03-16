<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'AU Universe' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #000000; /* Ivory */
            color: #800020; /* Red Burgundy */
        }
        .custom-navbar {
            background-color: #800020 !important;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <x-navbar />

    <!-- Main Container -->
    <div class="container mt-4">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                @yield('content')
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                @yield('sidebar')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-5" style="background-color: #800020; color: white;">
        &copy; {{ date('Y') }} AU Universe | All Rights Reserved
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
