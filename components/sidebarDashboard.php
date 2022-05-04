<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="<?= APP_URL . 'dashboard' ?>">
            <img src="<?= APP_URL . 'img/logo.png' ?>" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-center">
                <?= APP_NAME ?>
            </span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>



            <a class="nav-link" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                aria-expanded="false" aria-controls="multiCollapseExample1" style="padding-bottom: 10px;">Recepcion
                Taller Mecanico</a>


            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                            <li>
                                <a class="nav-link " href="dashboardAgregarCliente.php">
                                    <div class="icon icon-shape icon-sm border-radius-md text-center align-items-center justify-content-center "
                                        style="padding-bottom: 0px;">
                                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Agregar Cliente</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="dashboardAgregarVehiculo.php">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Agregar Vehiculo</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="dashboardAgregarMecanico.php">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Agregar Mecanico</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="dashboardAgregarRecepcion.php">
                                    <div
                                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Recepcion de Vehiculo</span>
                                </a>
                            </li>

                        </div>
                    </div>
                </div>
            </div>

                <a class="nav-link" data-bs-toggle="collapse" href="multiCollapseExample2" role="button"
                    aria-expanded="false" aria-controls="multiCollapseExample2" style="padding-bottom: 10px;">Listado</a>


                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                <li>
                                    <a class="nav-link " href="listarCliente.php">
                                        <div class="icon icon-shape icon-sm border-radius-md text-center align-items-center justify-content-center "
                                            style="padding-bottom: 0px;">
                                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Listado Cliente</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="listarVehiculo.php">
                                        <div
                                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Listado Vehiculo</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="listarMecanico.php">
                                        <div
                                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Listado Mecanico</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="listarRecepcion.php">
                                        <div
                                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Listado de Vehiculo</span>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="nav-link" data-bs-toggle="collapse" href="multiCollapseExample3" role="button"
                    aria-expanded="false" aria-controls="multiCollapseExample3" style="padding-bottom: 10px;">Productos y repuestos</a>


                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample3">
                            <div class="card card-body">
                                <li>
                                    <a class="nav-link " href="listarCliente.php">
                                        <div class="icon icon-shape icon-sm border-radius-md text-center align-items-center justify-content-center "
                                            style="padding-bottom: 0px;">
                                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Ag</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="listarVehiculo.php">
                                        <div
                                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Listado Vehiculo</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="listarMecanico.php">
                                        <div
                                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Listado Mecanico</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="listarRecepcion.php">
                                        <div
                                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Listado de Vehiculo</span>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administrador</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./pages/profile.html">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Perfil</span>
                    </a>
                </li>
        </ul>
    </div>
</aside>