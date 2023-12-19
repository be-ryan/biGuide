<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>

    {{-- bootstrap css--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    {{-- font awesome library --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    {{-- font google --}}
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,500;9..40,700&display=swap" rel="stylesheet">  
    {{-- layout.main css --}}
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>

    @include('layouts.navbar')

    <div class="content">
        @yield('content')
    </div>
    
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>