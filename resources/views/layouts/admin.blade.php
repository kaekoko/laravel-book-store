<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <link rel="stylesheet" href="{{ asset('admin/dist/admin.style.min.css') }}"/>
</head>
<body>

<div class="container-scroller">

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg')}}" alt="logo" style="height: 40px;">
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.svg')}}" alt="logo" style="height: 20px;">
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <p class="page-name d-none d-lg-block">Hi, Dave Mattew</p>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <form class="mt-2 mt-md-0 d-none d-lg-block search-input">
                        <div class="input-group">
                            <span class="input-group-addon d-flex align-items-center"><i
                                        class="icon-magnifier icons"></i></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </li>
                <li class="nav-item dropdown mail-dropdown">
                    <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                        <i class="icon-envelope-letter icons"></i>
                        <span class="count bg-danger"></span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown mail-notification dropdownAnimation"
                         aria-labelledby="MailDropdown">
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="http://placehold.it/100x100" alt="">
                                <span class="badge badge-success">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">John Doe</p>
                                <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="http://placehold.it/100x100" alt="">
                                <span class="badge badge-success">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">Leanne Jones</p>
                                <p class="Sender-message">Can we schedule a call this afternoon?</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="http://placehold.it/100x100" alt="">
                                <span class="badge badge-primary">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">Stella</p>
                                <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="sender-img">
                                <img src="http://placehold.it/100x100" alt="">
                                <span class="badge badge-warning">&nbsp;</span>
                            </div>
                            <div class="sender">
                                <p class="Sende-name">James Brown</p>
                                <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item view-all">View all</a>
                    </div>
                </li>
                <li class="nav-item dropdown notification-dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="icon-speech icons"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown preview-list notification-drop-down dropdownAnimation"
                         aria-labelledby="notificationDropdown">
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon">
                                    <i class="icon-info mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject font-weight-medium">Application Error</p>
                                <p class="font-weight-light small-text">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon">
                                    <i class="icon-speech mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject">Settings</p>
                                <p class="font-weight-light small-text">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon">
                                    <i class="icon-envelope mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject">New user registration</p>
                                <p class="font-weight-light small-text">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item lang-dropdown d-none d-sm-block">
                    <a class="nav-link" href="#">
                        <p class="mb-0">English <i class="flag-icon flag-icon-gb"></i></p>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-block profile-img">
                    <a class="nav-link profile-image" href="#">
                        <img src="http://placehold.it/100x100" alt="profile-img">
                        <span class="online-status online bg-success"></span>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button"
                    data-toggle="offcanvas">
                <span class="icon-menu icons"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category">
                        <span class="nav-link">GENERAL</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <span class="menu-title">Dashboard</span>
                            <i class="icon-speedometer menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/widgets.html">
                            <span class="menu-title">Widgets</span>
                            <i class="icon-wrench menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">UI FEATURES</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                           aria-controls="ui-basic">
                            <span class="menu-title">Basic UI Elements</span>
                            <i class="icon-layers menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                                        href="pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                            <span class="menu-title">Tables</span>
                            <i class="icon-grid menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/icons/font-awesome.html">
                            <span class="menu-title">Icons</span>
                            <i class="icon-globe menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">FORMS</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                            <span class="menu-title">Form elements</span>
                            <i class="icon-flag menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">DATA REPRESENTAION</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/flot-chart.html">
                            <span class="menu-title">Charts</span>
                            <i class="icon-pie-chart menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">SAMPLE PAGES</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                           aria-controls="auth">
                            <span class="menu-title">General Pages</span>
                            <i class="icon-bubbles menu-icon"></i>
                        </a>
                        <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login.html"> Login </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">
                                        Register </a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/blank-page.html"> Blank
                                        Page </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="content-wrapper">
            </div>

            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a
                                href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                                class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
        </div>
    </div>
</div>

<script src="{{ asset('admin/dist/admin.script.min.js') }}"></script>
</body>
</html>
