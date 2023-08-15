<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WD17317</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Header -->
    @include('layouts.header')

    <div class="content-wrapper">
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html>
