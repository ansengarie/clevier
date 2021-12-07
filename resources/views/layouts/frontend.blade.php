<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    {{--  Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/product.css">

    {{-- Icon Website --}}
    <link rel="icon" href="\img\logo\innerior-icon.png">

    <title>Innerior | {{ $title }}</title>
  </head>
  <body>
    @include('components.frontend.navbar')

    <div class="container mt-2">
      @yield('container')
    </div>

    @include('components.frontend.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 

    <!--Dropdown-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Password toggle -->
    <script>
      function togglePassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#2ec49c");
        } else {
          x.type = "password";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#CACBCE");
        }
      }
    </script>
  </body>
</html>