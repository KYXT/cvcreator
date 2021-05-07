<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="node_modules/dropify/dist/js/dropify.js"></script>
    <link rel="stylesheet" href="node_modules/dropify/dist/css/dropify.css">
    <link rel="stylesheet" href="node_modules/dropify/dist/fonts/">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">

    <title>CV Creator</title>
</head>

<body>

<header>
    <h3><a href="{{ route('index') }}">creator cv</a></h3>
</header>

    <div class="content">

        <svg viewBox="0 0 500 200" preserveAspectRatio="xMinYMin meet">
            <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill:#2dc46a;"></path>
        </svg>

@if (session()->has('success'))
    <div class="container">
        <div class="alert alert-info" role="alert">
            {{ session()->get('success') }}
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="container">
        @foreach($errors->all() as $error)
            <div class="alert alert-warning" role="alert">
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif


@yield('content')

    </div>

@yield('js')
</body>
</html>