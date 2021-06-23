<!DOCTYPE html>
<html lang="en">
<!--Header Disini-->
<?php
include "../header.php";
include "session.php";

?>
<body>
<div class="container-scroller">

    <!--Navigasi Disini-->
    <?php include "../navigation.php"; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">

                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-lg-block">

                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                            <h6 class="p-3 mb-0">Projects</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-file-outline text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Software Development</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-web text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">UI Development</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-layers text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">See all projects</p>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-view-grid"></i>
                        </a>
                    </li>
<!--                    <li class="nav-item dropdown border-left">-->
<!--                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">-->
<!--                            <i class="mdi mdi-email"></i>-->
<!--                            <span class="count bg-success"></span>-->
<!--                        </a>-->
<!--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">-->
<!--                            <h6 class="p-3 mb-0">Messages</h6>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a class="dropdown-item preview-item">-->
<!--                                <div class="preview-thumbnail">-->
<!--                                    <img src="../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">-->
<!--                                </div>-->
<!--                                <div class="preview-item-content">-->
<!--                                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>-->
<!--                                    <p class="text-muted mb-0"> 1 Minutes ago </p>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a class="dropdown-item preview-item">-->
<!--                                <div class="preview-thumbnail">-->
<!--                                    <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">-->
<!--                                </div>-->
<!--                                <div class="preview-item-content">-->
<!--                                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>-->
<!--                                    <p class="text-muted mb-0"> 15 Minutes ago </p>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a class="dropdown-item preview-item">-->
<!--                                <div class="preview-thumbnail">-->
<!--                                    <img src="../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">-->
<!--                                </div>-->
<!--                                <div class="preview-item-content">-->
<!--                                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>-->
<!--                                    <p class="text-muted mb-0"> 18 Minutes ago </p>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <p class="p-3 mb-0 text-center">4 new messages</p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="nav-item dropdown border-left">-->
<!--                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">-->
<!--                            <i class="mdi mdi-bell"></i>-->
<!--                            <span class="count bg-danger"></span>-->
<!--                        </a>-->
<!--                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">-->
<!--                            <h6 class="p-3 mb-0">Notifications</h6>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a class="dropdown-item preview-item">-->
<!--                                <div class="preview-thumbnail">-->
<!--                                    <div class="preview-icon bg-dark rounded-circle">-->
<!--                                        <i class="mdi mdi-calendar text-success"></i>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="preview-item-content">-->
<!--                                    <p class="preview-subject mb-1">Event today</p>-->
<!--                                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a class="dropdown-item preview-item">-->
<!--                                <div class="preview-thumbnail">-->
<!--                                    <div class="preview-icon bg-dark rounded-circle">-->
<!--                                        <i class="mdi mdi-settings text-danger"></i>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="preview-item-content">-->
<!--                                    <p class="preview-subject mb-1">Settings</p>-->
<!--                                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a class="dropdown-item preview-item">-->
<!--                                <div class="preview-thumbnail">-->
<!--                                    <div class="preview-icon bg-dark rounded-circle">-->
<!--                                        <i class="mdi mdi-link-variant text-warning"></i>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="preview-item-content">-->
<!--                                    <p class="preview-subject mb-1">Launch Admin</p>-->
<!--                                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <p class="p-3 mb-0 text-center">See all notifications</p>-->
<!--                        </div>-->
<!--                    </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                            <h6 class="p-3 mb-0">Profile</h6>
                            <div class="dropdown-divider"></div>

                            <div class="dropdown-divider"></div>
                            <a href="../../php/logout.php" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Log out</p>
                                </div>
                            </a>

                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">

                    </div>
                </div>


                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informasi Aplikasi</h4>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis leo in fringilla vehicula. Ut vulputate, lorem in ullamcorper tristique, arcu felis pulvinar nunc, at elementum quam neque ac ipsum. Etiam at risus rhoncus, blandit tellus vel, lacinia nulla. Morbi maximus eget augue et ullamcorper. Donec ipsum quam, mollis ac justo sed, pellentesque egestas tortor. Cras et aliquam metus. Cras porta pharetra nisl et lobortis. Suspendisse pharetra, nibh non eleifend egestas, quam urna auctor risus, scelerisque placerat nibh velit in libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. In hac habitasse platea dictumst. Proin in turpis a nulla finibus suscipit. Proin feugiat massa non lacus hendrerit viverra.

                                   Suspendisse potenti. Nullam ante dui, dictum vitae felis quis, lacinia porttitor sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt gravida justo, id scelerisque leo varius et. Donec sed lacus a est placerat fermentum eu nec massa. Mauris varius non odio quis sodales. Integer a gravida ligula, quis facilisis erat. Nulla eu lorem ante. In eget egestas urna, ut interdum orci. Donec id cursus ante. Pellentesque porttitor sit amet nunc nec cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam venenatis pulvinar est, eu malesuada augue suscipit sed.

                                   Fusce tincidunt mauris orci, eget porttitor justo posuere vel. Fusce eu arcu vel nulla luctus venenatis. Etiam gravida felis sit amet lorem dictum convallis. Donec rutrum diam placerat urna viverra, et sollicitudin nisi gravida. Sed imperdiet libero semper dignissim maximus. Vivamus condimentum faucibus varius. Ut semper quis mauris vitae varius.

                                   Praesent congue tempor orci, at molestie magna porta ut. Pellentesque hendrerit quam nunc, cursus consectetur ligula pharetra eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum aliquet mollis. Suspendisse maximus eros quis ipsum eleifend scelerisque. Quisque ut sapien aliquet tortor fringilla aliquam eu ultricies nunc. Nam leo dui, finibus vitae consectetur eu, malesuada quis quam. Aenean fermentum, dolor vel consequat aliquam, nisl nisl feugiat augue, at consequat enim sapien et quam. Aliquam erat volutpat.

                                   Donec vel est risus. Sed sodales scelerisque velit ut faucibus. Pellentesque finibus urna a sem posuere auctor. Donec vulputate rhoncus magna ac dignissim. Duis ante mauris, laoreet in diam vitae, imperdiet euismod nisi. Integer posuere porta efficitur. Nunc vitae lorem dui. Fusce fermentum magna sed lacus consectetur commodo. Donec facilisis egestas massa quis tempus. Curabitur varius ante sit amet velit aliquam sodales. Sed imperdiet erat enim. Mauris consectetur ultricies tempus. Etiam at diam eu justo porta congue iaculis vel risus. Nulla sit amet velit non libero tempus ultrices nec ut nibh. Integer quis aliquam magna, eget eleifend leo.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <!--      Footer Disini-->
            <?php include "../footer.php"; ?>
</body>
</html>