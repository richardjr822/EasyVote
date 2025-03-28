<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

@section('title', 'Admin Dashboard')

@section('content')
    <div class="d-flex">
        <!-- Sidebar (React will mount here) -->
        <div id="admin-sidebar"></div>

        <!-- Main Content -->
        <div class="container-fluid p-4">
            <h1 class="text-center">Admin Dashboard</h1>
            <p class="text-center">Welcome to the admin panel!</p>
        </div>
    </div>

    <!-- Debugging: Check if JavaScript is Loaded -->
    <script>
        console.log("Admin Dashboard Blade Loaded");
    </script>
@endsection
</body>

</html>