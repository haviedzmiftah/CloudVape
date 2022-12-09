<div class="col-lg-3 bg-light.bg-gradient">
    <nav class="navbar navbar-expand-lg bg-light mt-3">
        <div class="container-fluid">
            <button class="navbar-toggler btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" style="width: 250px;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CloudVape</h5>
                <button type="button" class="btn-close btn-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav nav-pills justify-content-end flex-grow-1 flex-column ">
                    <li class="nav-item">
                    <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x']=='home') || !isset($_GET['x'])) ? 'active link-light bg-dark' : 'link-dark' ; ?>" href="home"><i class="bi bi-house-door-fill"></i>  Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='menu') ? 'active link-light bg-dark' : 'link-dark' ; ?>" href="menu"><i class="bi bi-clipboard2-data-fill"></i> Daftar Manu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='order') ? 'active link-light bg-dark' : 'link-dark' ; ?>" href="order"><i class="bi bi-cart-fill"></i> Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='customer') ? 'active link-light bg-dark' : 'link-dark' ; ?>" href="customer"><i class="bi bi-person-fill"></i> Customer</a>
                    </li>
                    <?php if($hasil['level']==1) {?>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='user') ? 'active link-light bg-dark' : 'link-dark' ; ?>" href="user"><i class="bi bi-clipboard2-data-fill"></i> User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='report') ? 'active link-light bg-dark' : 'link-dark' ; ?>" href="report"><i class="bi bi-flag-fill"></i> Report</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>

