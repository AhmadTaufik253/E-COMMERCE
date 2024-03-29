<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | webadmin - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- gridjs css -->
        <link rel="stylesheet" href="/assets/libs/gridjs/theme/mermaid.min.css">


    </head>

    
    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            
            <header id="page-topbar" class="isvertical-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="/dashboard-admin" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-dark-sm.png" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/images/logo-dark-sm.png" alt="" height="26">
                                </span>
                            </a>

                            <a href="/dashboard-admin" class="logo logo-light">
                                <span class="logo-lg">
                                    <img src="/assets/images/logo-light.png" alt="" height="30">
                                </span>
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-light-sm.png" alt="" height="26">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="bx bx-menu align-middle"></i>
                        </button>

                        <!-- start page title -->
                        <div class="page-title-box align-self-center d-none d-md-block">
                            <h4 class="page-title mb-0">Hi, Welcome Back!</h4>
                        </div>
                        <!-- end page title -->

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search icon-sm align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                            <i class="bx bx-search search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown-v"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell icon-sm align-middle"></i>
                                <span class="noti-dot bg-danger rounded-pill">4</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown-v">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-15"> Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="/assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div>
                                                    <p class="mb-0">It will seem like simplified English.</p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-18">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">3 min ago</p>
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div>
                                                    <p class="mb-0">If several languages coalesce the grammar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-18">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">8 min ago</p>
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div>
                                                    <p class="mb-0">If several languages coalesce the grammar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="/assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div>
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>
            
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Martin Gurley</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="mb-0">Martin Gurley</h6>
                                    <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
                                </div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Messages</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="/dashboard-admin" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="/assets/images/logo-dark-sm.png" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="/assets/images/logo-dark.png" alt="" height="28">
                        </span>
                    </a>

                    <a href="/dashboard-admin" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="/assets/images/logo-light.png" alt="" height="30">
                        </span>
                        <span class="logo-sm">
                            <img src="/assets/images/logo-light-sm.png" alt="" height="26">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                    <i class="bx bx-menu align-middle"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                           <li>
                                <a href="/dashboard-admin">
                                    <i class="bx bx-home-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin">
                                    <i class="bx bx-chat icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-admin">Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="/customer">
                                    <i class="bx bx-chat icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-customer">Customer</span>
                                </a>
                            </li>
                            <li>
                                <a href="/transaksi">
                                    <i class="bx bx-chat icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-transaksi">Transaksi</span>
                                </a>
                            </li>
                            <li>
                                <a href="/chat">
                                    <i class="bx bx-chat icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-chat">Chat</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <header class="ishorizontal-topbar">

                <div class="topnav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-home-alt icon nav-icon"></i>
                                            <span data-key="t-dashboards">Dashboards</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                            <a href="/dashboard-admin"  class="dropdown-item" data-key="t-ecommerce">Ecommerce</a>
                                            <a href="#"  class="dropdown-item" data-key="t-sales">Sales</a>
                                        </div>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cube icon nav-icon"></i>
                                           <span data-key="t-elements">Elements</span> <div class="arrow-down"></div>
                                        </a>

                                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                            <div class="ps-2 p-lg-0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <div class="menu-title">Elements</div>
                                                            <div class="row g-0">
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="#" class="dropdown-item" data-key="t-alerts">Alerts</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-buttons">Buttons</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-cards">Cards</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-carousel">Carousel</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-dropdowns">Dropdowns</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-grid">Grid</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-images">Images</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="#" class="dropdown-item" data-key="t-lightbox">Lightbox</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-modals">Modals</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-offcanvas">Offcanvas</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-range-slider">Range Slider</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-progress-bars">Progress Bars</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-sweet-alert">Sweet-Alert</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-tabs-accordions">Tabs & Accordions</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="#" class="dropdown-item" data-key="t-typography">Typography</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-video">Video</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-general">General</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-colors">Colors</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-rating">Rating</a>
                                                                        <a href="#" class="dropdown-item" data-key="t-notifications">Notifications</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                            <i class="bx bx-store icon nav-icon"></i>
                                            <span data-key="t-apps">Apps</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                            <a href="#" class="dropdown-item" data-key="t-calendar">Calendar</a>

                                            <a href="#" class="dropdown-item" data-key="t-todo">Todo</a>

                                            <a href="#" class="dropdown-item" data-key="t-filemanager">File Manager</a>

                                            <a href="#" class="dropdown-item" data-key="t-chat">Chat</a>


                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                    role="button">
                                                    <span data-key="t-ecommerce">Ecommerce</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                    <a href="#" class="dropdown-item" data-key="t-products">Products</a>
                                                    <a href="#" class="dropdown-item" data-key="t-product-detail">Product Detail</a>
                                                    <a href="#" class="dropdown-item" data-key="t-orders">Orders</a>
                                                    <a href="#" class="dropdown-item" data-key="t-customers">Customers</a>
                                                    <a href="#" class="dropdown-item" data-key="t-cart">Cart</a>
                                                    <a href="#" class="dropdown-item" data-key="t-checkout">Checkout</a>
                                                    <a href="#" class="dropdown-item" data-key="t-shops">Shops</a>
                                                    <a href="#" class="dropdown-item" data-key="t-add-product">Add Product</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                                    role="button">
                                                    <span data-key="t-email">Email</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                    <a href="#" class="dropdown-item" data-key="t-inbox">Inbox</a>
                                                    <a href="#" class="dropdown-item" data-key="t-read-email">Read Email</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoices"
                                                    role="button">
                                                   <span data-key="t-invoices">Invoices</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                                    <a href="#" class="dropdown-item" data-key="t-invoice-list">Invoice List</a>
                                                    <a href="#" class="dropdown-item" data-key="t-invoice-detail">Invoice Detail</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                                    role="button">
                                                   <span data-key="t-contacts">Contacts</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                                    <a href="#" class="dropdown-item" data-key="t-user-grid">User Grid</a>
                                                    <a href="#" class="dropdown-item" data-key="t-user-list">User List</a>
                                                    <a href="#" class="dropdown-item" data-key="t-user-profile">Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                                            <i class="bx bx-layer icon nav-icon"></i>
                                            <span data-key="t-components">Components</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                                    role="button">
                                                    <span data-key="t-forms">Forms</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                    <a href="#" class="dropdown-item" data-key="t-form-elements">Form Elements</a>
                                                    <a href="#" class="dropdown-item" data-key="t-form-layouts">Form Layouts</a>
                                                    <a href="#" class="dropdown-item" data-key="t-form-validation">Form Validation</a>
                                                    <a href="#" class="dropdown-item" data-key="t-form-advanced">Form Advanced</a>
                                                    <a href="#" class="dropdown-item" data-key="t-form-editors">Form Editors</a>
                                                    <a href="#" class="dropdown-item" data-key="t-form-upload">Form File Upload</a>
                                                    <a href="#" class="dropdown-item" data-key="t-form-wizard">Form Wizard</a>
                                                    <a href="#" class="dropdown-item" data-key="t-form-mask">Form Mask</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                    role="button">
                                                    <span data-key="t-tables">Tables</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                    <a href="#" class="dropdown-item" data-key="t-basic-tables">Basic Tables</a>
                                                    <a href="#" class="dropdown-item" data-key="t-advanced-tables">Advance Tables</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                                    role="button">
                                                    <span data-key="t-charts">Charts</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                    <a href="#" class="dropdown-item" data-key="t-apex-charts">Apex Charts</a>
                                                    <a href="#" class="dropdown-item" data-key="t-chartjs-charts">Chartjs Charts</a>
                                                    <a href="#" class="dropdown-item" data-key="t-ui-charts">Toast UI Charts</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                                    role="button">
                                                    <span data-key="t-icons">Icons</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                    <a href="#" class="dropdown-item" data-key="t-evaicons">Eva Icons</a>
                                                    <a href="#" class="dropdown-item" data-key="t-boxicons">Boxicons</a>
                                                    <a href="#" class="dropdown-item" data-key="t-material-design">Material Design</a>
                                                    <a href="#" class="dropdown-item" data-key="t-font-awesome">Font Awesome 5</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                                    role="button">
                                                    <span data-key="t-maps">Maps</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                                    <a href="#" class="dropdown-item" data-key="t-google">Google</a>
                                                    <a href="#" class="dropdown-item" data-key="t-vector">Vector</a>
                                                    <a href="#" class="dropdown-item" data-key="t-leaflet">Leaflet</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                            <i class="bx bx-file icon nav-icon"></i>
                                            <span data-key="t-pages">Pages</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-authentication"
                                                    role="button">
                                                    <span data-key="t-authentication">Authentication</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-authentication">
                                                    <a href="#" class="dropdown-item" data-key="t-login">Login</a>
                                                    <a href="#" class="dropdown-item" data-key="t-register">Register</a>
                                                    <a href="#" class="dropdown-item" data-key="t-recover-password">Recover Password</a>
                                                    <a href="#" class="dropdown-item" data-key="t-lock-screen">Lock Screen</a>
                                                    <a href="#" class="dropdown-item" data-key="t-logout">Logout</a>
                                                    <a href="#" class="dropdown-item" data-key="t-confirm-mail">Confirm Mail</a>
                                                    <a href="#" class="dropdown-item" data-key="t-email-verification">Email Verification</a>
                                                    <a href="#" class="dropdown-item" data-key="t-two-step-verification">Two Step Verification</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                                    role="button">
                                                    <span data-key="t-utility">Utility</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                    <a href="#" class="dropdown-item" data-key="t-starter-page">Starter Page</a>
                                                    <a href="#" class="dropdown-item" data-key="t-maintenance">Maintenance</a>
                                                    <a href="#" class="dropdown-item" data-key="t-coming-soon">Coming Soon</a>
                                                    <a href="#" class="dropdown-item" data-key="t-timeline">Timeline</a>
                                                    <a href="#" class="dropdown-item" data-key="t-faqs">FAQs</a>
                                                    <a href="#" class="dropdown-item" data-key="t-pricing">Pricing</a>
                                                    <a href="#" class="dropdown-item" data-key="t-error-404">Error 404</a>
                                                    <a href="#" class="dropdown-item" data-key="t-error-500">Error 500</a>
                                                </div>
                                            </div>

                                            <a href="#" class="dropdown-item" data-key="t-horizontal">Horizontal</a>
                                        </div>
                                    </li>
    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>


            @yield('content')

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © webadmin.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Themesdesign.com/" target="_blank" class="text-reset">Themesdesign</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->

        <!-- jQuery CDN (required for DataTables) -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/assets/libs/eva-icons/eva.min.js"></script>

        <!-- apexcharts -->
        <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="/assets/libs/jsvectormap/maps/world-merc.js"></script>
        
        <script src="/assets/js/pages/dashboard.init.js"></script>

        <!-- gridjs js -->
        <script src="assets/libs/gridjs/gridjs.umd.js"></script>
        <script src="assets/js/pages/gridjs.init.js"></script>

        <script src="/assets/js/app.js"></script>
          

    </body>

</html>