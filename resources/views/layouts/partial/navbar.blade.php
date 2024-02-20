<nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>TKY</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/student/all">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ekstraculicullar">Ekstraculicullar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/kelas/all">Kelas</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">

      @auth
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
              Welcome Back, {{ auth()->user()->name ?? "Anonymus" }}
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="/dashboard/" class="dropdown-item">Dashboard</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="post" action="/logout">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <a class="nav-link" href="/login">Login</a>
          <a class="nav-link" href="/register">Register</a>
        @endauth
            </ul>
          </li>
      </ul>
      
    </div>
  </div>
</nav>