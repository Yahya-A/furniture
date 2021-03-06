<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>AdminKit Demo - Bootstrap 5 Admin Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">

    <link href="/assets/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- <style>
    .ui-autocomplete {
z-index: 100;
}
    </style> -->
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Furniture</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin
                    </li>
                    <li class="sidebar-item <?= $active_menu['dashboard']?>">
                        <a class="sidebar-link" href="/furniture-admin">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>


                    <li class="sidebar-header">
                        Master
                    </li>
                    <!-- <li class="sidebar-item">
                        <a class="sidebar-link" href="index.html">
                            <i class="align-middle" data-feather="users"></i> <span
                                class="align-middle">Customer</span>
                        </a>
                    </li> -->
                    <li
                        class="sidebar-item <?= ($active_menu['customer']['list'] || $active_menu['customer']['new'] || $active_menu['customer']['role'] != "" ? 'active' : '')?>">
                        <a data-bs-target="#customer" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Customer</span>
                        </a>
                        <ul id="customer"
                            class="sidebar-dropdown list-unstyled  <?= ($active_menu['customer']['list'] || $active_menu['customer']['new'] || $active_menu['customer']['role'] != "" ? 'collapsed' : 'collapse')?>"
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item <?= $active_menu['customer']['new']?>"><a class="sidebar-link"
                                    href="/furniture-admin/customer/new">New Customer</a></li>
                            <li class="sidebar-item <?= $active_menu['customer']['list']?>"><a class="sidebar-link"
                                    href="/furniture-admin/customer/list">List Customer</a></li>
                            <li class="sidebar-item <?= $active_menu['customer']['role']?>"><a class="sidebar-link"
                                    href="/furniture-admin/customer/role">Role Customer</a></li>
                    </li>
                </ul>
                </li>
                <li
                    class="sidebar-item <?= ($active_menu['product']['list'] || $active_menu['product']['new'] || $active_menu['product']['categories'] != "" ? 'active' : '')?>">
                    <a data-bs-target="#product" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Product</span>
                    </a>
                    <ul id="product"
                        class="sidebar-dropdown list-unstyled  <?= ($active_menu['product']['list'] || $active_menu['product']['new'] || $active_menu['product']['categories'] != "" ? 'collapsed' : 'collapse')?>"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item <?= $active_menu['product']['new']?>"><a class="sidebar-link"
                                href="/furniture-admin/product/new">New Product</a></li>
                        <li class="sidebar-item <?= $active_menu['product']['list']?>"><a class="sidebar-link"
                                href="/furniture-admin/product/list">List Product</a></li>
                        <li class="sidebar-item <?= $active_menu['product']['categories']?>"><a class="sidebar-link"
                                href="/furniture-admin/product/category">Category Product</a></li>
                </li>
                </ul>
                </li>
             
                <li class="sidebar-item">
                    <a class="sidebar-link" href="index.html">
                        <i class="align-middle" data-feather="truck"></i> <span class="align-middle">Shipping</span>
                    </a>
                </li>

                <li class="sidebar-header">
                    Transactions
                </li>

                <li
                    class="sidebar-item <?= ($active_menu['order']['item_order'] || $active_menu['order']['showroom_order'] || $active_menu['order']['return_order'] != "" ? 'active' : '')?>">
                    <a data-bs-target="#order" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Order</span>
                    </a>
                    <ul id="order"
                        class="sidebar-dropdown list-unstyled  <?= ($active_menu['order']['item_order'] || $active_menu['order']['showroom_order'] || $active_menu['order']['return_order'] != "" ? 'collapsed' : 'collapse')?>"
                        data-bs-parent="#sidebar">
                        <li class="sidebar-item <?= $active_menu['order']['item_order']?>"><a class="sidebar-link"
                                href="/order/list_item_order">Item Order</a></li>
                        <li class="sidebar-item <?= $active_menu['order']['showroom_order']?>"><a class="sidebar-link"
                                href="/customer/list_customer">Showroom Order</a></li>
                        <li class="sidebar-item <?= $active_menu['order']['return_order']?>"><a class="sidebar-link"
                                href="/furniture-admin/order/return">Return Order</a></li>
                </li>
                </ul>
                <!-- <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="shopping-bag"></i> <span
                                class="align-middle">Order</span>
                        </a>
                    </li> -->
                <!-- <li class="sidebar-item">
                    <a class="sidebar-link" href="/order/return">
                        <i class="align-middle" data-feather="rotate-ccw"></i> <span class="align-middle">Return
                            Order</span>
                    </a>
                </li> -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="charts-chartjs.html">
                        <i class="align-middle" data-feather="file"></i> <span class="align-middle">Report</span>
                    </a>
                </li>
                <li class="sidebar-header">
                    More
                </li>

                <!-- <li class="sidebar-item">
                    <a class="sidebar-link" href="charts-chartjs.html">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span
                            class="align-middle">Setting</span>
                    </a>
                </li> -->
                <li class="sidebar-header">
                    Analytics
                </li>
                <li class="sidebar-item <?= $active_menu['logs']?>">
                    <a class="sidebar-link" href="/furniture-admin/logs">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Log Login</span>
                    </a>
                </li>
                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <strong class="d-inline-block mb-2 text-center">Furniture Admin</strong>
                        <!-- <div class="mb-3 text-sm">
                                Are you looking for more components? Check out our premium version.
                            </div>
                            <div class="d-grid">
                                <a href="https://adminkit.io/pricing" target="_blank" class="btn btn-primary">Upgrade to
                                    Pro</a>
                            </div> -->
                    </div>
                </div>
                </ul>
            </div>

        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search???" aria-label="Search">
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-5.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
                                                    tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="William Harris">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-4.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-3.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <!-- <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"
                                    alt="Charles Hall" />  -->
                                    <span class="text-dark"><?= session()->get('name')?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <?= $this->renderSection('content'); ?>

            <?= $this->renderSection('modal'); ?>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="index.html" class="text-muted"><strong>Admin Furniture</strong></a> &copy;
                            </p>
                        </div>
                        <!-- <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?= $this->renderSection('config'); ?>
    <script src="/assets/js/custom.js"></script>
</body>

</html>