<nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="img/logo.png" alt="" width="60" height="60" class="d-inline-block align-text-merge">
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
                <a class="nav-link {{ ($title === "Review") ? 'active' : '' }}" href="/review"><i class="bi bi-view-list"></i> Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Brand") ? 'active' : '' }}" href="/brand"><i class="bi bi-border-all"></i> Brand</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about"><i class="bi bi-info-circle"></i> About</a>
              </li>
            </ul>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <button type="button" class="btn btn-success btn-sm"><a href="/login" class="nav-link text-white {{ ($title === "Login") ? 'active' : '' }}">
                    <i class="bi bi-door-open"></i> Login</a></button>
                </li>
              </ul>
          </div>
        </div>
      </nav>