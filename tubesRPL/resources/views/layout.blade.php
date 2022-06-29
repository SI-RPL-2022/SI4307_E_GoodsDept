<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Modul 5')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-#E7FBFF" style="background-color: #E7FBFF;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{asset('assets/logo.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            GoodsDept
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            @guest
            <li><a href="/login" class="nav-link px-2 link-secondary">LOGIN</a></li>
            @endguest

            <li><a href="/homeAdmin" class="nav-link px-2 link-secondary">HOME</a></li>
            

            @auth
              @if (auth()->user()->level == 1)
                <li><a href="/barang" class="nav-link px-2 link-secondary">BARANG</a></li>
                <li><a href="/kasir" class="nav-link px-2 link-secondary">KASIR</a></li>
              @endif
              <li><a href="" class="nav-link px-2 link-secondary">TRANSAKSI</a></li>
              <li><a href="/profile" class="nav-link px-2 link-secondary">PROFIL</a></li>
            @endauth
                        
            @auth
              <li><a href="/logout" class="nav-link px-2 link-secondary">LOGOUT</a></li>
            @endauth
            
          </ul>
        </div>
    </nav>
    
    <div class="container mt-3">
        @yield('content')
    </div>
    
    <footer class="bg-light text-center text-lg-start fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © Kelompok 5 : SI4307
        </div>
        <!-- Copyright -->
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>