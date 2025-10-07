<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SIMAPEN - Sistem Informasi' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          xintegrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDrSpNlyT2bRJXh0JMjY6hW+ALEWHI" 
          crossorigin="anonymous">
    <style>
        /* CSS Kustom untuk tampilan bersih dan modern */
        body {
            background-color: #f8f9fa; /* Background abu-abu muda */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex-grow: 1;
        }
        /* Style untuk Footer di bawah */
        .footer-custom { background-color: #343a40; color: white; }
    </style>
</head>

<body>
    <main>
        {{-- Navbar - Menggunakan INCLUDE --}}
        @include('components.navbar')

        {{-- Konten utama --}}
        <div class="container my-5">
            @yield('content')
        </div>
    </main>

    {{-- Footer - Menggunakan INCLUDE --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            xintegrity="sha384-VpycrYf0tY31HB60NNkmXcS5qfDVZLESAAAS5NDz0xhyG9kcIds1kNe7N6jIeHz" 
            crossorigin="anonymous"></script>
</body>

</html>
