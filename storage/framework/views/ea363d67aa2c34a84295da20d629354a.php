<?php

use Illuminate\Support\Facades\Route;

$currentRoute = Route::currentRouteName();
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
    <title><?php echo e($title); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Basic Funde Clear" name="description" />
    <meta content="CMS" name="author" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- App favicon -->
    <link rel="icon" href="<?php echo e(asset('website_assets/img/logo/logo-dark.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/datepicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nouislider.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/tagsinput.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugin/bootstrap-colorpicker/css/bootstrap-colorpicker.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.4/sweetalert2.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dropify.min.css')); ?>">
    <!-- <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>"> -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/css1.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/toastr.min.css')); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('website_assets/img/logo/logo-dark.png')); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- DataTables -->
    <link href="<?php echo e(asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo e(asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- jquery.vectormap css -->
    <link href="<?php echo e(asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?php echo e(asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo e(asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(asset('assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />

    <!----Custom CSS---->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>">
<!-- Summernote CSS for Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
   <style>
        .dt-buttons {
            position: absolute !important;
        }
    </style>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?php echo e(asset('website_assets/img/logo/logo-dark.png')); ?>" alt="logo-sm-dark" height="20">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo e(asset('website_assets/img/logo/logo-dark.png')); ?>" alt="logo-dark" height="50">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?php echo e(asset('website_assets/img/logo/logo-dark.png')); ?>" alt="logo-sm-light" height="20">
                            </span>
                            <span class="logo-lg">
                                <img src="<?php echo e(asset('website_assets/img/logo/logo-dark.png')); ?>" alt="logo-light" height="50">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="ri-search-line"></span>
                        </div>
                    </form>

                    <!-- <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                            aria-haspopup="false" aria-expanded="false">
                            Mega Menu
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="font-size-14">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Lightbox</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Slider</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Rating</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Charts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="font-size-14">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Ecommerce</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Email</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Projects</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tasks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Contacts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="font-size-14">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Light Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Compact Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Horizontal layout</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Maintenance</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Coming Soon</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">FAQs</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="font-size-14">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Lightbox</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Slider</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Rating</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Charts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-5">
                                            <div>
                                                <img src="<?php echo e(asset('assets/images//megamenu-img.png')); ?>" alt="megamenu-img"
                                                    class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> -->
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>




                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line"></i>
                        </button>
                    </div>



                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?php echo e(empty(Auth::user()->icon)?asset('assets/images//users/avatar-2.jpg'):asset('storage/'.Auth::user()->icon)); ?>"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1"><?php echo e(Auth::user()->name); ?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="<?php echo e(route('admin.adminprofile')); ?>"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="<?php echo e(route('admin.changePassword')); ?>"><i class="ri-lock-unlock-line align-middle me-1"></i> Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="<?php echo e(route('admin.logout')); ?>"><i
                                    class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>


                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li class="<?php echo e($currentRoute == 'admin.dashboard' ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('admin.dashboard')); ?>" class="waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <!-- <span class="badge rounded-pill bg-success float-end">3</span> -->
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_roles')): ?>
                        <li class="<?php echo e(in_array($currentRoute, ['admin.role.index', 'admin.role.create', 'admin.role.edit']) ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('admin.role.index')); ?>"> <i class="ri-user-2-line"></i><span>Roles Management</span></a>
                        </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_user_dashboard')): ?>
                        <li class="<?php echo e(in_array($currentRoute, ['admin.loan']) ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('admin.loan')); ?>"><i class="ri-user-2-line"></i><span>Loan</span></a>
                        </li>
                        <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['view_users', 'add_users', 'edit_users'])): ?>
                        <li class="<?php echo e(in_array($currentRoute, ['admin.users.index','admin.users.create','admin.users.edit']) ? 'active mm-active' : ''); ?>">
                            <a href="#Staffs" class="has-arrow"><i class="ri-user-2-line"></i><span>User Managment</span></a>
                            <ul class="list-unstyled <?php echo e(in_array($currentRoute, ['admin.users.index','admin.users.create','admin.users.edit']) ? 'mm-show' : ''); ?> ">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_users')): ?>
                                <li class="<?php echo e($currentRoute == 'admin.users.' ? 'active' : ''); ?>"><a href="<?php echo e(route('admin.users.index')); ?>">&emsp;&emsp;All Users</a></li>
                                <?php endif; ?>

                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['view_loans', 'add_loans', 'edit_loans'])): ?>
                        <li class="<?php echo e(in_array($currentRoute, ['admin.loans.index','admin.loans.create','admin.loans.edit']) ? 'active mm-active' : ''); ?>">
                            <a href="#Staffs" class="has-arrow"><i class="ri-wallet-2-line"></i><span>Blog Managment</span></a>
                            <ul class="list-unstyled <?php echo e(in_array($currentRoute, ['admin.loans.index','admin.loans.create','admin.loans.edit']) ? 'mm-show' : ''); ?> ">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_loans')): ?>
                                <li class="<?php echo e($currentRoute == 'admin.loans.' ? 'active' : ''); ?>">
                                    <a href="<?php echo e(route('admin.blogs.index')); ?>">&emsp;&emsp;All Blogs</a>
                                </li>
                                <?php endif; ?>

                            </ul>
                        </li>
                        <?php endif; ?>


                        <li class="<?php echo e(in_array($currentRoute, ['admin.users.index','admin.users.create','admin.users.edit']) ? 'active mm-active' : ''); ?>">
                            <a href="#Staffs" class="has-arrow"><i class="fa fa-file"></i><span>Report</span></a>
                            <ul class="list-unstyled <?php echo e(in_array($currentRoute, ['admin.users.index','admin.users.create','admin.users.edit']) ? 'mm-show' : ''); ?> ">

                                <li class="<?php echo e(in_array($currentRoute, ['admin.role.index', 'admin.role.create', 'admin.role.edit']) ? 'active' : ''); ?>">
                                    <a href="<?php echo e(route('admin.loan.report')); ?>"> <span>&emsp;&emsp;Loan Report</span></a>
                                </li>
                                <li class="<?php echo e(in_array($currentRoute, ['admin.role.index', 'admin.role.create', 'admin.role.edit']) ? 'active' : ''); ?>">
                                    <a href="<?php echo e(route('admin.loan.report.install')); ?>"> <span>&emsp;&emsp;Installment Report</span></a>
                                </li>


                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <div class="main-content">

            <?php echo e($slot); ?>

            <!-- End Page-content -->
            <footer class=" footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Canvas Chrome Designs
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>






    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.31.3/tagify.css"
    integrity="sha512-fg4mbaXioGkhZsVQlBUD7MmEA5zQY4I3aiawILa2nHXUk0e5gBZjlwGoJCeRIAVHqYOdaddDQA7HUXwqx3vVAA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://unpkg.com/@yaireo/tagify"></script>   
    <!-- JAVASCRIPT -->
    <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>


    <!-- apexcharts -->
    <script src="<?php echo e(asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- jquery.vectormap map -->
    <script src="<?php echo e(asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')); ?>"></script>

    <!-- Table Editable plugin -->
    <script src="<?php echo e(asset('assets/libs/table-edits/build/table-edits.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/pages/table-editable.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/dashboard.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/pages/sparklines.init.js')); ?>"></script>

    <!-- App js -->
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- core js file -->
    <!-- <script src="<?php echo e(asset('assets/bundles/libscripts.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bundles/datepicker.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bundles/nouislider.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bundles/tagsinput.bundle.js')); ?>"></script> -->
    <script src="<?php echo e(asset('assets/bundles/select2.bundle.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.4/sweetalert2.min.js"></script>
    <!-- Required datatable js -->
    <script src="<?php echo e(asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <!-- Buttons examples -->
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/pdfmake/build/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/pdfmake/build/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')); ?>"></script>

    <!-- Responsive examples -->
    <script src="<?php echo e(asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js') }}"></script>
    <!-- page js file -->
    <script src="<?php echo e(asset('assets/js/pages/forms/form-wizard.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bundles/toastr.bundle.js')); ?>"></script>
    <!-- Dropify Js -->
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
  <!-- jQuery (if not already included) -->


<!-- Popper (required for dropdowns in Summernote) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS (if not already included) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 300, // set editor height
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>

<script>
    function slugify(text) {
        return text
            .toString()
            .toLowerCase()
            .trim()
            .replace(/[\s\W-]+/g, '-') // Replace spaces and non-word chars with dashes
            .replace(/^-+|-+$/g, '');  // Remove leading/trailing dashes
    }

    $(document).ready(function () {
        // Prevent first space
        $(document).on('keypress', 'input, textarea', function (e) {
            if (this.value.length === 0 && e.which === 32) {
                e.preventDefault();
            }
        });

        // Title to slug logic
        $('input[name="title"]').on('input', function () {
            let title = $(this).val();
            let slug = slugify(title);
            $('#url').val(slug);
        });
    });
</script>


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const input = document.querySelector(".multiple-roles");
        new Tagify(input, {
            whitelist: [], // Optional: add allowed tags
            dropdown: {
                maxItems: 10,
                classname: "tags-look",
                enabled: 0,
                closeOnSelect: false
            }
        });
    });
</script>
    <script>


        $(document).ready(function() {

            initializeTagify('.multiple-roles');

            $('.dropify').dropify({
                showErrors: true,
                errorTimeout: 3000,
                errorsPosition: 'overlay',
                imgFileExtensions: ['png', 'jpg', 'jpeg', 'gif', 'bmp', 'webp', 'mp4'],
                maxFileSizePreview: "5M",
                allowedFormats: ['portrait', 'square', 'landscape'],
                allowedFileExtensions: ['*'],
            });
            var drEvent = $("#dropify-event").dropify();
            drEvent.on("dropify.beforeClear", function(event, element) {
                return confirm(
                    'Do you really want to delete "' + element.file.name + '" ?'
                );
            });

            drEvent.on("dropify.afterClear", function(event, element) {
                alert("File deleted");
            });

            $(".dropify-fr").dropify({
                messages: {
                    default: "Glissez-dÃ©posez un fichier ici ou cliquez",
                    replace: "Glissez-dÃ©posez un fichier ou cliquez pour remplacer",
                    remove: "Supprimer",
                    error: "DÃ©solÃ©, le fichier trop volumineux",
                },
            });
        });
    </script>

    <script>
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
    </script>
    

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!---Make the table rows sortable -->

    <?php if(isset($tablename)): ?>
    <script>
        $(document).ready(function() {
            // Make the table rows sortable
            $("#yajradb tbody").sortable({
                axis: "y", // Allow dragging only vertically
                cursor: "move", // Set cursor style to indicate draggable elements
                update: function(event, ui) {
                    // Get the new order of the rows
                    var newOrder = $(this).sortable('toArray', {
                        attribute: 'data-id'
                    });

                    // Perform AJAX call to update the database
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    var tablename = "<?php echo e($tablename); ?>";
                    $.ajax({
                        url: "<?php echo e(route('admin.updatePositions')); ?>",
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        data: {
                            newOrder: newOrder,
                            tablename: tablename
                        },
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            }).disableSelection(); // Prevent text selection while dragging
        });
    </script>
    <?php endif; ?>
    <!-- - Validation CDN --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <!-- whitespace validation--->

    <script>
        $('input').keypress(function(e) {
            if (this.value.length === 0 && e.which === 32) e.preventDefault();
        });
        $('textarea').keypress(function(e) {
            if (this.value.length === 0 && e.which === 32) e.preventDefault();
        });
        $('input[name="mobile"]').on('input', function() {
            $(this).val($(this).val().replace(/\D/g, '')); // Remove non-digits
            if ($(this).val().length > 10) {
                $(this).val($(this).val().substr(0, 10)); // Limit to 10 digits
            }
        });
    </script>

    <!-- toastr init -->
    <script>
        <?php if(Session::has('message')): ?>
        var messageType = '<?php echo e(Session::get("status")); ?>';
        var message = '<?php echo e(Session::get("message")); ?>';

        toastr[messageType](message, '', {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
        <?php endif; ?>


        <?php if(Session::has('success')): ?>
        toastr.success('<?php echo e(Session::get("success")); ?>', '', {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
        <?php endif; ?>


        <?php if(Session::has('error')): ?>
        toastr.error('<?php echo e(Session::get("error")); ?>', '', {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
        <?php endif; ?>
    </script>
    <!--- Change status -->
    <script>
        function changeStatus(where_id, where_id_value, where_column, where_column_value, where_table) {

            // $('.table').html('<i class="fa fa-spinner fa-spin"></i>');

            $.ajax({
                url: "<?php echo e(route('admin.changeStatus')); ?>", // Replace with your Laravel route
                type: 'POST',
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    "where_id": where_id,
                    "where_id_value": where_id_value,
                    "where_column": where_column,
                    "where_column_value": where_column_value,
                    "where_table": where_table,
                },
                success: function(data) {
                    if (data.status === 'success') {
                        // Display success message using Toastr
                        toastr.success('Update successful');

                        // Reload the page after a delay
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        // Display error message using Toastr
                        toastr.error('Error: ' + data.message);
                    }
                },
                error: function(error) {
                    // Display generic error message using Toastr
                    toastr.error('An error occurred');
                }
            });
        }
    </script>
    <!--- Delete model--->
    <script>
        function deleteData(where_column, where_id, where_table) {
            $('#delete_modal').modal('show');
            $('#delColumn').val(where_column);
            $('#delId').val(where_id);
            $('#delTable').val(where_table);
        }
    </script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html><?php /**PATH /Users/ubaidkhan/Downloads/canvas 2/resources/views/admin/layout/app-layout.blade.php ENDPATH**/ ?>