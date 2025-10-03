<nav class="navbar navbar-expand-lg sticky-top shadow-sm" style="background: linear-gradient(90deg, #4A90E2, #0056b3);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold text-white" href="/">
            <i class="bi bi-person-circle fs-2 me-2"></i>
            <span class="fs-4">MyApp</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" 
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold px-3" href="/users" 
                       style="transition: color 0.3s;" 
                       onmouseover="this.style.color='#ffd600';" onmouseout="this.style.color='white';">
                       Users
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a href="/create" class="btn btn-warning btn-sm text-dark fw-bold shadow-sm px-4"
                       style="transition: background-color 0.3s, color 0.3s;"
                       onmouseover="this.style.backgroundColor='#e6c200'; this.style.color='#000';"
                       onmouseout="this.style.backgroundColor='#ffc107'; this.style.color='#000';">
                       <i class="bi bi-person-plus-fill me-1"></i> Tambah User
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
