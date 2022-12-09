<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-lg">
        <a class="navbar-brand" href="home"><i class="bi bi-fire"></i> CoudVape</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> <?php echo $hasil['username']; ?></a>
                    <ul class="dropdown-menu dropdown-menu-dark mt-2">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        <li><a class="dropdown-item" href="logout">logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>