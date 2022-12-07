<nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="img/B.jpg" alt="" width="30" height="30" class="d-inline-block align-text-top">
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
          </div>
        </div>
      </nav>