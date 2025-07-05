<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- --font-- --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- ANIMAZIONI --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    {{-- vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>Presto.it - {{$title ?? $title='Presto3.it'}}</title>
</head>
<body class="bg-header">
    <x-navbar/>
    
    <div class="min-vh-100 layout-div z-1">
        
        {{$slot}}
        
    </div>
    
    <x-footer/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>