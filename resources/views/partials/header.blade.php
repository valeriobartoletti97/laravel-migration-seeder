<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
      <div class="container-fluid justify-content-center">
        <a class="navbar-brand text-uppercase" href="{{ route('home') }}"><h1>My Trains</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('trains.index') }}">Trains</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
