<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDrSpNlyT2bRJXh0JMjY6hW+ALEWHI" 
          crossorigin="anonymous">
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-VpycrYf0tY31HB60NNkmXcS5qfDVZLESAAAS5NDz0xhyG9kcIds1kNe7N6jIeHz" 
            crossorigin="anonymous"></script>
</body>

</html>
