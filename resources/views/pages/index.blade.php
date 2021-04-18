<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Metrica - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('/')}}/assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="{{URL::to('/')}}/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
        <link href="{{URL::to('/')}}/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('/')}}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('/')}}/assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="{{URL::to('/')}}/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="{{URL::to('/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('/')}}/assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="{{URL::to('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('/')}}/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('/')}}/assets/css/app.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <div class="main-icon-menu">
                <a href="{{URL::to('/')}}/analytics/analytics-index.html" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{URL::to('/')}}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <nav class="nav">
                    <a href="#MetricaDashboard" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Dashboard" data-trigger="hover">
                        <i data-feather="monitor" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaDashboard-->

                    <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Apps" data-trigger="hover">
                        <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaApps-->

                    <a href="#MetricaUikit" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="UI Kit" data-trigger="hover">
                        <i data-feather="package" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaUikit-->

                    <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Pages" data-trigger="hover">
                        <i data-feather="copy" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaPages-->

                    <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Authentication" data-trigger="hover">
                        <i data-feather="lock" class="align-self-center menu-icon icon-dual"></i>
                    </a> <!--end MetricaAuthentication-->

                </nav><!--end nav-->
                <div class="pro-metrica-end">
                    <a href="" class="help" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Chat">
                        <i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i>
                    </a>
                    <a href="" class="profile">
                        <img src="{{URL::to('/')}}/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle thumb-sm">
                    </a>
                </div>
            </div><!--end main-icon-menu-->

            <div class="main-menu-inner">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{URL::to('/')}}/analytics/analytics-index.html" class="logo">
                        <span>
                            <img src="{{URL::to('/')}}/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                            <img src="{{URL::to('/')}}/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        </span>
                    </a>
                </div>
                <!--end logo-->
                <div class="menu-body slimscroll">
                     <div id="MetricaDashboard" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Dashboard</h6>
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/analytics/analytics-index.html">Analytic</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/crypto/crypto-index.html">Crypto</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/crm/crm-index.html">CRM</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/projects/projects-index.html">Project</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/ecommerce/ecommerce-index.html">Ecommerce</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/helpdesk/helpdesk-index.html">Helpdesk</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/hospital/hospital-index.html">Hospital</a></li>
                        </ul>
                    </div><!-- end Dashboard -->

                    <div id="MetricaApps" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Apps</h6>
                        </div>
                        <ul class="nav metismenu">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void(0);"><span class="w-100">Email</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/apps/email-inbox.html">Inbox</a></li>
                                    <li><a href="{{URL::to('/')}}/apps/email-read.html">Read Email</a></li>
                                </ul>
                            </li><!--end nav-item-->
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/apps/chat.html">Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/apps/contact-list.html">Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/apps/calendar.html">Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/apps/invoice.html">Invoice</a></li>
                        </ul>
                    </div><!-- end Crypto -->

                    <div id="MetricaUikit" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">UI Kit</h6>
                        </div>
                        <ul class="nav metismenu">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/others/ui-bootstrap.html">Bootstrap</a></li>
                                    <li><a href="{{URL::to('/')}}/others/ui-animation.html">Animation</a></li>
                                    <li><a href="{{URL::to('/')}}/others/ui-avatar.html">Avatar</a></li>
                                    <li><a href="{{URL::to('/')}}/others/ui-clipboard.html">Clip Board</a></li>
                                    <li><a href="{{URL::to('/')}}/others/ui-files.html">File Manager</a></li>
                                    <li><a href="{{URL::to('/')}}/others/ui-ribbons.html">Ribbons</a></li>
                                    <li><a href="{{URL::to('/')}}/others/ui-dragula.html">Dragula</a></li>
                                    <li><a href="{{URL::to('/')}}/others/ui-check-radio.html">Check & Radio</a></li>
                                </ul>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Advanced UI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/others/advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="{{URL::to('/')}}/others/advanced-sweetalerts.html">Sweet Alerts</a></li>
                                    <li><a href="{{URL::to('/')}}/others/advanced-nestable.html">Nestable List</a></li>
                                    <li><a href="{{URL::to('/')}}/others/advanced-ratings.html">Ratings</a></li>
                                    <li><a href="{{URL::to('/')}}/others/advanced-highlight.html">Highlight</a></li>
                                    <li><a href="{{URL::to('/')}}/others/advanced-session.html">Session Timeout</a></li>
                                    <li><a href="{{URL::to('/')}}/others/advanced-idle-timer.html">Idle Timer</a></li>
                                </ul>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Forms</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/others/forms-elements.html">Basic Elements</a></li>
                                    <li><a href="{{URL::to('/')}}/others/forms-advanced.html">Advance Elements</a></li>
                                    <li><a href="{{URL::to('/')}}/others/forms-validation.html">Validation</a></li>
                                    <li><a href="{{URL::to('/')}}/others/forms-wizard.html">Wizard</a></li>
                                    <li><a href="{{URL::to('/')}}/others/forms-editors.html">Editors</a></li>
                                    <li><a href="{{URL::to('/')}}/others/forms-repeater.html">Repeater</a></li>
                                    <li><a href="{{URL::to('/')}}/others/forms-x-editable.html">X Editable</a></li>
                                    <li><a href="{{URL::to('/')}}/others/forms-uploads.html">File Upload</a></li>
                                    <li><a href="{{URL::to('/')}}/others/forms-img-crop.html">Image Crop</a></li>
                                </ul>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Charts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/others/charts-apex.html">Apex</a></li>
                                    <li><a href="{{URL::to('/')}}/others/charts-morris.html">Morris</a></li>
                                    <li><a href="{{URL::to('/')}}/others/charts-chartist.html">Chartist</a></li>
                                    <li><a href="{{URL::to('/')}}/others/charts-flot.html">Flot</a></li>
                                    <li><a href="{{URL::to('/')}}/others/charts-peity.html">Peity</a></li>
                                    <li><a href="{{URL::to('/')}}/others/charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="{{URL::to('/')}}/others/charts-sparkline.html">Sparkline</a></li>
                                    <li><a href="{{URL::to('/')}}/others/charts-knob.html">Jquery Knob</a></li>
                                    <li><a href="{{URL::to('/')}}/others/charts-justgage.html">JustGage</a></li>
                                </ul>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Tables</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/others/tables-basic.html">Basic</a></li>
                                    <li><a href="{{URL::to('/')}}/others/tables-datatable.html">Datatables</a></li>
                                    <li><a href="{{URL::to('/')}}/others/tables-responsive.html">Responsive</a></li>
                                    <li><a href="{{URL::to('/')}}/others/tables-footable.html">Footable</a></li>
                                    <li><a href="{{URL::to('/')}}/others/tables-jsgrid.html">Jsgrid</a></li>
                                    <li><a href="{{URL::to('/')}}/others/tables-dragger.html">Dragger</a></li>
                                    <li><a href="{{URL::to('/')}}/others/tables-editable.html">Editable</a></li>
                                </ul>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Icons</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/others/icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="{{URL::to('/')}}/others/icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="{{URL::to('/')}}/others/icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="{{URL::to('/')}}/others/icons-themify.html">Themify</a></li>
                                    <li><a href="{{URL::to('/')}}/others/icons-feather.html">Feather</a></li>
                                    <li><a href="{{URL::to('/')}}/others/icons-typicons.html">Typicons</a></li>
                                    <li><a href="{{URL::to('/')}}/others/icons-emoji.html">Emoji <i class="em em-ok_hand"></i></a></li>
                                </ul>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Maps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/others/maps-google.html">Google Maps</a></li>
                                    <li><a href="{{URL::to('/')}}/others/maps-leaflet.html">Leaflet Maps</a></li>
                                    <li><a href="{{URL::to('/')}}/others/maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="w-100">Email Templates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{URL::to('/')}}/others/email-templates-basic.html">Basic Action Email</a></li>
                                    <li><a href="{{URL::to('/')}}/others/email-templates-alert.html">Alert Email</a></li>
                                    <li><a href="{{URL::to('/')}}/others/email-templates-billing.html">Billing Email</a></li>
                                </ul>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Others -->

                    <div id="MetricaPages" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Pages</h6>
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-profile.html">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-tour.html">Tour</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-timeline.html">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-treeview.html">Treeview</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-starter.html">Starter Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-pricing.html">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-blogs.html">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-faq.html">FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/pages/pages-gallery.html">Gallery</a></li>
                        </ul>
                    </div><!-- end Pages -->
                    <div id="MetricaAuthentication" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Authentication</h6>
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-login.html">Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-login-alt.html">Log in alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-register.html">Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-register-alt.html">Register-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-recover-pw.html">Re-Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-recover-pw-alt.html">Re-Password-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-lock-screen.html">Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-lock-screen-alt.html">Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-404.html">Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-404-alt.html">Error 404-alt</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-500.html">Error 500</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/authentication/auth-500-alt.html">Error 500-alt</a></li>
                        </ul>
                    </div><!-- end Authentication-->
                </div><!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav float-right mb-0">
                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript: void(0);" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            English <img src="{{URL::to('/')}}/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="{{URL::to('/')}}/assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="{{URL::to('/')}}/assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="{{URL::to('/')}}/assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="{{URL::to('/')}}/assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="{{URL::to('/')}}/assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg py-0">

                            <h6 class="dropdown-item-text font-15 m-0 py-3 bg-light text-dark d-flex justify-content-between align-items-center">
                                Notifications <span class="badge badge-primary badge-pill">2</span>
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                           <i class="la la-cart-arrow-down"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-success">
                                            <i class="la la-group"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-pink">
                                            <i class="la la-list-alt"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-warning">
                                            <i class="la la-truck"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-info">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary bg-light">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="{{URL::to('/')}}/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                            <span class="ml-1 nav-user-name hidden-sm">Robert <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item bg-light" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                    <li class="mr-2">
                        <a href="#" class="nav-link" data-toggle="modal" data-animation="fade" data-target=".modal-rightbar">
                            <i data-feather="align-right" class="align-self-center"></i>
                        </a>
                    </li>
                </ul><!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                       <a href="{{URL::to('/')}}/analytics/analytics-index.html">
                            <span class="responsive-logo">
                                <img src="{{URL::to('/')}}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm align-self-center" height="34">
                            </span>
                        </a>
                    </li>
                    <li>
                        <button class="button-menu-mobile nav-link">
                            <i data-feather="menu" class="align-self-center"></i>
                        </button>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 p-2 bg-soft-classic nav-user-name hidden-sm rounded">System <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-xl dropdown-menu-left p-0">
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-6">
                                    <div class="text-center system-text">
                                        <h4 class="text-white">The Poworfull Dashboard</h4>
                                        <p class="text-white">See all the pages Metrica.</p>
                                        <a href="https://mannatthemes.com/metrica/" class="btn btn-sm btn-pink mt-2">See Dashboard</a>
                                    </div>
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{URL::to('/')}}/assets/images/dashboard/dash-1.png" class="d-block img-fluid" alt="{{URL::to('/')}}.">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{URL::to('/')}}/assets/images/dashboard/dash-4.png" class="d-block img-fluid" alt="{{URL::to('/')}}.">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{URL::to('/')}}/assets/images/dashboard/dash-2.png" class="d-block img-fluid" alt="{{URL::to('/')}}.">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{URL::to('/')}}/assets/images/dashboard/dash-3.png" class="d-block img-fluid" alt="{{URL::to('/')}}.">
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-12 col-lg-6">
                                    <div class="divider-custom mb-0">
                                        <div class="divider-text bg-light">All Dashboard</div>
                                    </divi>
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="dropdown-item mb-2" href="{{URL::to('/')}}/analytics/analytics-index.html"> Analytics</a>
                                                <a class="dropdown-item mb-2" href="{{URL::to('/')}}/crypto/crypto-index.html"> Crypto</a>
                                                <a class="dropdown-item mb-2" href="{{URL::to('/')}}/crm/crm-index.html"> CRM</a>
                                                <a class="dropdown-item" href="{{URL::to('/')}}/projects/projects-index.html"> Project</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="dropdown-item mb-2" href="{{URL::to('/')}}/ecommerce/ecommerce-index.html"> Ecommerce</a>
                                                <a class="dropdown-item mb-2" href="{{URL::to('/')}}/helpdesk/helpdesk-index.html"> Helpdesk</a>
                                                <a class="dropdown-item" href="{{URL::to('/')}}/hospital/hospital-index.html"> Hospital</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" id="AllCompo" placeholder="Search{{URL::to('/')}}." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Form Advanced</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Form Advanced</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body bootstrap-select-1">
                                    <h4 class="header-title mt-0">Select2 Components</h4>
                                    <p class="text-muted mb-3">Select2 is a jQuery based replacement for select boxes.
                                        It supports searching, remote data sets, and infinite scrolling of results.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">Single select</label>
                                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                <option>Select</option>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div><!-- end col -->
                                        <div class="col-md-6">
                                            <label class="mb-3">Multiple Select</label>
                                            <select class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body bootstrap-select-1">
                                    <h4 class="mt-0 header-title">Bootstrap Colorpicker</h4>
                                    <p class="text-muted mb-3">Most simple example, with any options or color information. </p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="mb-3">Simple mode</label>
                                            <div id="b_color-default" class="input-group" title="Using input value">
                                                <input type="text" class="form-control input-lg" value="#f5a416"/>
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>  <!-- end row -->
                                        <div class="col-md-4">
                                            <label class="mb-3">RGB mode</label>
                                            <div id="b_color_rgb" class="input-group" data-color="rgb(21, 178, 236)"
                                                    title="Using data-color attribute in the colorpicker element">
                                                <input type="text" class="form-control input-lg"/>
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div><!-- end row -->
                                        <div class="col-md-4">
                                            <label class="mb-3">HSL mode</label>
                                            <div id="b_color_hsl" class="input-group" title="Using data-color attribute in the input">
                                                <input type="text" class="form-control input-lg" data-color="hsl(150, 86%, 48%)"/>
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div><!-- end row -->
                                    </div><!-- end row -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Bootstrap Material Datetimepicker</h4>
                                    <p class="text-muted mb-3">An example of Bootstrap Material DatePicker.</p>
                                    <div class="form-material">
                                        <label class="mb-3">Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">

                                        <label class="my-3">Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">

                                        <label class="my-3">Time Picker</label>
                                        <input class="form-control" id="timepicker" placeholder="Check time">

                                        <label class="my-3">Min Date set</label>
                                        <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="my-3">Start Date</label>
                                                <input type="text" class="form-control" placeholder="Start date" id="date-start">
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <label class="my-3">End Date</label>
                                                <input type="text" class="form-control" placeholder="End date" id="date-end">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Date Range Picker</h4>
                                    <P class="mt-0 text-muted mb-3">A JavaScript component for choosing date ranges, dates and times.</P>
                                    <label class="mb-3">Basic Example</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="dates">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label class="my-3">Simple Date Range Picker With a Callback</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="daterange">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label class="my-3">Date Range Picker With Times</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="datetimes">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label class="my-3">Single Date Picker</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="birthday" value="10/24/1984">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label class="my-3">Predefined Date Ranges</label>
                                    <div class="input-group">
                                        <input type="text"  id="reportrange" class="form-control" value="10/24/1984">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Bootstrap MaxLength</h4>
                                    <p class="text-muted mb-3">This plugin integrates by default with
                                        Twitter bootstrap using badges to display the maximum lenght of the
                                        field where the user is inserting text.
                                    </p>
                                    <label class="mb-2">Default usage</label>
                                    <p class="text-muted mb-3 font-13">
                                        The badge will show up by default when the remaining chars are 10 or less:
                                    </p>

                                    <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />
                                    <div class="mt-3">
                                        <label class="mb-2">Threshold value</label>
                                        <p class="text-muted mb-3 font-13">
                                            Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                        </p>
                                        <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="mb-2">Position</label>
                                        <p class="text-muted  mb-3 font-13">
                                            All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                            is specified, the positioning will be defauted to 'bottom'.
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                                    </div>
                                    <div class="mt-3">
                                        <label class="mb-2">All the options</label>
                                        <p class="text-muted  mb-3 font-13">
                                            Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="mb-2">textareas</label>
                                        <p class="text-muted  mb-3 font-13">
                                            Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                        </p>
                                        <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                    </div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Bootstrap TouchSpin</h4>
                                    <p class="text-muted  mb-3">A mobile and touch friendly input spinner component for Bootstrap</p>
                                    <form>
                                        <div class="form-group">
                                            <label class="mb-3">Using data attributes</label>
                                            <input id="demo0" type="text" value="55" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Init with empty value:</label>
                                            <input id="demo3" type="text" value="" name="demo3">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Example with postfix (large)</label>
                                            <input id="demo1" type="text" value="55" name="demo1">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Value attribute is not set (applying settings.initval)</label>
                                            <input id="demo3_21" type="text" value="" name="demo3_21">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="mb-3">With prefix </label>
                                            <input id="demo2" type="text" value="0" name="demo2" class=" form-control">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label class="mb-3">Value is set explicitly to 33 (skipping settings.initval) </label>
                                            <input id="demo3_22" type="text" value="33" name="demo3_22">
                                        </div>
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->

                <!--  Modal content for the above example -->
                <div class="modal modal-rightbar fade" tabindex="-1" role="dialog" aria-labelledby="MetricaRightbar" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="MetricaRightbar">Appearance</h5>
                                <button type="button" class="btn btn-sm btn-soft-primary btn-circle-sm btn-square" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></button>
                            </div>
                            <div class="modal-body">
                               <!-- Nav tabs -->
                               <ul class="nav nav-pills nav-justified mt-2 mb-4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#ActivityTab" role="tab">Activity</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#TasksTab" role="tab">Tasks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#SettingsTab" role="tab">Settings</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active " id="ActivityTab" role="tabpanel">
                                        <div class="bg-light mx-n3">
                                            <img src="{{URL::to('/')}}/assets/images/small/img-1.gif" alt="" class="d-block mx-auto my-4" height="180">
                                        </div>
                                        <div class="slimscroll scroll-rightbar">
                                            <div class="activity">
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">10 Min ago</small>
                                                            <a href="#" class="m-0 w-75">Task finished</a>
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div>

                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-timer-off bg-soft-pink"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">50 Min ago</small>
                                                            <a href="#" class="m-0 w-75">Task Overdue</a>
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                        <span class="badge badge-soft-secondary">Design</span>
                                                        <span class="badge badge-soft-secondary">HTML</span>
                                                    </div>
                                                </div>
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-alert-decagram bg-soft-purple"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">10 hours ago</small>
                                                            <a href="#" class="m-0 w-75">New Task</a>
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div>

                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-clipboard-alert bg-soft-warning"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">yesterday</small>
                                                            <a href="#" class="m-0 w-75">New Comment</a>
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div>
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-clipboard-alert bg-soft-secondary"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">01 feb 2020</small>
                                                            <a href="#" class="m-0 w-75">New Lead Meting</a>
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div>
                                                <div class="activity-info">
                                                    <div class="icon-info-activity">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline bg-soft-success"></i>
                                                    </div>
                                                    <div class="activity-info-text mb-2">
                                                        <div class="mb-1">
                                                            <small class="text-muted d-block mb-1">26 jan 2020</small>
                                                            <a href="#" class="m-0 w-75">Task finished</a>
                                                        </div>
                                                        <p class="text-muted mb-2 text-truncate">There are many variations of passages.</p>
                                                    </div>
                                                </div>
                                            </div><!--end activity-->
                                        </div><!--end activity-scroll-->
                                    </div><!--end tab-pane-->
                                    <div class="tab-pane" id="TasksTab" role="tabpanel">
                                        <div class="m-0">
                                            <div id="rightbar_chart" class="apex-charts"></div>
                                        </div>
                                        <div class="text-center mt-n2 mb-2">
                                            <button type="button" class="btn btn-soft-primary">Create Project</button>
                                            <button type="button" class="btn btn-soft-primary">Create Task</button>
                                        </div>
                                        <div class="slimscroll scroll-rightbar">
                                            <div class="p-2">
                                                <div class="media mb-3">
                                                    <img src="{{URL::to('/')}}/assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">
                                                    <div class="media-body align-self-center text-truncate ml-3">
                                                        <p class="text-success font-weight-semibold mb-0 font-14">Project</p>
                                                        <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-18">Payment App</h4>
                                                    </div><!--end media-body-->
                                                </div>
                                                <span><b>Deadline:</b> 02 June 2020</span>
                                                <a href="javascript: void(0);" class="d-block mt-3">
                                                    <p class="text-muted mb-0">Complete Tasks<span class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <hr class="hr-dashed">
                                        </div>
                                    </div><!--end tab-pane-->
                                    <div class="tab-pane" id="SettingsTab" role="tabpanel">
                                        <div class="p-1 bg-light mx-n3">
                                            <h6 class="px-3">Account Settings</h6>
                                        </div>
                                        <div class="p-2 text-left mt-3">
                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch1" checked="">
                                                <label class="custom-control-label" for="settings-switch1">Auto updates</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch2">
                                                <label class="custom-control-label" for="settings-switch2">Location Permission</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch3" checked="">
                                                <label class="custom-control-label" for="settings-switch3">Show offline Contacts</label>
                                            </div>
                                        </div>
                                        <div class="p-1 bg-light mx-n3">
                                            <h6 class="px-3">General Settings</h6>
                                        </div>
                                        <div class="p-2 text-left mt-3">
                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch4" checked="">
                                                <label class="custom-control-label" for="settings-switch4">Show me Online</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch5">
                                                <label class="custom-control-label" for="settings-switch5">Status visible to all</label>
                                            </div>

                                            <div class="custom-control custom-switch switch-primary mb-3">
                                                <input type="checkbox" class="custom-control-input" id="settings-switch6" checked="">
                                                <label class="custom-control-label" for="settings-switch6">Notifications Popup</label>
                                            </div>
                                        </div>
                                    </div><!--end tab-pane-->
                                </div> <!--end tab-content-->
                            </div><!--end modal-body-->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->




        <!-- jQuery  -->
        <script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/jquery-ui.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/metismenu.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/waves.js"></script>
        <script src="{{URL::to('/')}}/assets/js/feather.min.js"></script>
        <script src="{{URL::to('/')}}/assets/js/jquery.slimscroll.min.js"></script>
        <script src="{{URL::to('/')}}/assets/plugins/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js -->
        <script src="{{URL::to('/')}}/assets/plugins/moment/moment.js"></script>
        <script src="{{URL::to('/')}}/assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="{{URL::to('/')}}/assets/plugins/select2/select2.min.js"></script>
        <script src="{{URL::to('/')}}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="{{URL::to('/')}}/assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="{{URL::to('/')}}/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="{{URL::to('/')}}/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="{{URL::to('/')}}/assets/pages/jquery.forms-advanced.js"></script>

        <!-- App js -->
        <script src="{{URL::to('/')}}/assets/js/app.js"></script>

    </body>

</html>
