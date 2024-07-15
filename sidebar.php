<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo  ((isset($_GET['x']) && $_GET['x']=='home')|| !isset($_GET['x']) ) ?
                             'active link-light ' : 'link-dark' ; ?> " aria-current="page" href="home"><i
                                    class="bi bi-house-door"></i>Dashboard</a>
                        </li>
                        <?php  if ($hasil['level']==1){ ?>
                        <li class="nav-item">
                            <a class="nav-link  ps-2 <?php echo  (isset($_GET['x']) && $_GET['x']=='admin') ?
                             'active link-light ' : 'link-dark' ; ?>" href="admin"><i
                                    class="bi bi-search-heart-fill"></i>Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  ps-2 <?php echo  (isset($_GET['x']) && $_GET['x']=='mahasiswa') ?
                             'active link-light ' : 'link-dark' ; ?>" href="mahasiswa"><i
                                    class="bi bi-search-heart-fill"></i>Mahasiswa</a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo  (isset($_GET['x']) && $_GET['x']=='konselor') ?
                             'active link-light ' : 'link-dark' ; ?>" href="konselor"><i
                                    class="bi bi-backpack4-fill"></i>Konseling</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  ps-2 <?php echo  (isset($_GET['x']) && $_GET['x']=='pantaukesehatan') ?
                             'active link-light ' : 'link-dark' ; ?>" href="pantaukesehatan"><i
                                    class="bi bi-search-heart-fill"></i>Pemantauan Kesehatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  ps-2 <?php echo  (isset($_GET['x']) && $_GET['x']=='pantaumakanan') ?
                             'active link-light ' : 'link-dark' ; ?>" href="pantaumakanan"><i
                                    class="bi bi-search-heart-fill"></i>Pemantauan Makanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  ps-2 <?php echo  (isset($_GET['x']) && $_GET['x']=='pantaufisik') ?
                             'active link-light ' : 'link-dark' ; ?>" href="pantaufisik"><i
                                    class="bi bi-search-heart-fill"></i>Pemantauan Fisik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  ps-2 <?php echo  (isset($_GET['x']) && $_GET['x']=='edukasi') ?
                             'active link-light ' : 'link-dark' ; ?>" href="edukasi"><i
                                    class="bi bi-search-heart-fill"></i>Edukasi & Sumber Daya</a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>