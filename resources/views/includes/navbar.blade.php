<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('frontend/images/logo_scire.png') }}" alt="Logo Travel" srcset="">

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item mr-3">
          <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
      <!-- Mobile button -->
      <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0">
          Log In
        </button>
      </form>
      <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-register my-2 my-sm-0">
          Sign Up
        </button>
      </form>

      <!-- Dekstop button -->
      <form class="form-inline my-2 my-lg-0 search">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      </form>

      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <a href="login.html" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
          Log In
        </a>
        
      </form>
      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <a href="" class="btn btn-register btn-navbar-right my-2 my-sm-0 px-4">
          Sign Up
        </a>
        
      </form>

    </div>
  </nav>
</div>

