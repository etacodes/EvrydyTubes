<nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="" alt="" width="30" height="30" class="d-inline-block align-text-merge">
            EverydayShoes
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/"><i class="bi bi-house-door"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Review") ? 'active' : '' }}" href="/reviews"><i class="bi bi-view-list"></i> Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Brand") ? 'active' : '' }}" href="/brand"><i class="bi bi-border-all"></i> Brand</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about"><i class="bi bi-info-circle"></i> About</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
              @else
              <li class="nav-item">
                <button type="button" class="btn btn-success btn-sm"><a href="/login" class="nav-link text-white {{ ($title === "Login") ? 'active' : '' }}">
                  <i class="bi bi-door-open"></i> Login</a></button>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>