<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper white container-fluid">
                {{-- Logo --}}
                <a href="#" class="brand-logo green-text text-darken-2">Logo</a>
                {{-- Sidebar --}}
                <a href="" data-target="mobile-navbar" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="navbar-items" class=" right hide-on-med-and-down">
                    <li><a class="green-text text-darken-2" href="#">Catalog</a></li>
                    <li><a class="green-text text-darken-2" href="#">Home</a></li>
                    <li>
                        <a class="dropdown-trigger green-text text-darken-2" data-target="dropdown-menu" href="#">
                            Login <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
                {{-- Dropdown --}}
                <ul id="dropdown-menu" class="dropdown-content">
                    <li>
                        <a class="green-text text-darken-2" href="#">
                        <i class="material-icons">account_circle</i>    Pengaturan Akun
                        </a>
                    </li>
                    <li><a class="green-text text-darken-2" href="#">Bookmark Saya</a></li>
                    <li class="divider"></li>
                    <li><a class="green-text text-darken-2" href="#">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
    {{-- Menu Mobile  --}}
    <ul id="mobile-navbar" class="sidenav">
        <li><a href="#">Pengaturan AKun</a></li>
        <li><a href="#">Bookmark Saya</a></li>
        <li><a href="#">Logout</a></li>
    </ul>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
