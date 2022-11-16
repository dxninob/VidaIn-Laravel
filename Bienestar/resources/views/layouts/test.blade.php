<!doctype html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/test.css') }}" rel="stylesheet" />
  <title>@yield('title', 'BienEstar')</title>
</head>

<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-3">
    <div class="container">

    </div>
  </nav>

  <!-- header -->

  <div class="container my-4">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</body>

</html>