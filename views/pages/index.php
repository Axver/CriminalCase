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
<!--              <li class="nav-item dropdown border-left">-->
<!--                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">-->
<!--                  <i class="mdi mdi-email"></i>-->
<!--                  <span class="count bg-success"></span>-->
<!--                </a>-->
<!--                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">-->
<!--                  <h6 class="p-3 mb-0">Messages</h6>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                      <img src="../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>-->
<!--                      <p class="text-muted mb-0"> 1 Minutes ago </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                      <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>-->
<!--                      <p class="text-muted mb-0"> 15 Minutes ago </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                      <img src="../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>-->
<!--                      <p class="text-muted mb-0"> 18 Minutes ago </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <p class="p-3 mb-0 text-center">4 new messages</p>-->
<!--                </div>-->
<!--              </li>-->
<!--              <li class="nav-item dropdown border-left">-->
<!--                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">-->
<!--                  <i class="mdi mdi-bell"></i>-->
<!--                  <span class="count bg-danger"></span>-->
<!--                </a>-->
<!--                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">-->
<!--                  <h6 class="p-3 mb-0">Notifications</h6>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                      <div class="preview-icon bg-dark rounded-circle">-->
<!--                        <i class="mdi mdi-calendar text-success"></i>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                      <p class="preview-subject mb-1">Event today</p>-->
<!--                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                      <div class="preview-icon bg-dark rounded-circle">-->
<!--                        <i class="mdi mdi-settings text-danger"></i>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                      <p class="preview-subject mb-1">Settings</p>-->
<!--                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <a class="dropdown-item preview-item">-->
<!--                    <div class="preview-thumbnail">-->
<!--                      <div class="preview-icon bg-dark rounded-circle">-->
<!--                        <i class="mdi mdi-link-variant text-warning"></i>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="preview-item-content">-->
<!--                      <p class="preview-subject mb-1">Launch Admin</p>-->
<!--                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>-->
<!--                    </div>-->
<!--                  </a>-->
<!--                  <div class="dropdown-divider"></div>-->
<!--                  <p class="p-3 mb-0 text-center">See all notifications</p>-->
<!--                </div>-->
<!--              </li>-->
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

            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Transaction History</h4>
                    <canvas id="transaction-history" class="transaction-chart"></canvas>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Transfer to Paypal</h6>
                        <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">$236</h6>
                      </div>
                    </div>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Tranfer to Stripe</h6>
                        <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                      </div>
                      <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                        <h6 class="font-weight-bold mb-0">$593</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Open Projects</h4>
                      <p class="text-muted mb-1">Your data status</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Admin dashboard design</h6>
                                <p class="text-muted mb-0">Broadcast web app mockup</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">15 minutes ago</p>
                                <p class="text-muted mb-0">30 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-cloud-download"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Wordpress Development</h6>
                                <p class="text-muted mb-0">Upload new design</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">1 hour ago</p>
                                <p class="text-muted mb-0">23 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Project meeting</h6>
                                <p class="text-muted mb-0">New project discussion</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">35 minutes ago</p>
                                <p class="text-muted mb-0">15 tasks, 2 issues</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger">
                                <i class="mdi mdi-email-open"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Broadcast Mail</h6>
                                <p class="text-muted mb-0">Sent release details to team</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">55 minutes ago</p>
                                <p class="text-muted mb-0">35 tasks, 7 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-chart-pie"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">UI Design</h6>
                                <p class="text-muted mb-0">New application planning</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">50 minutes ago</p>
                                <p class="text-muted mb-0">27 tasks, 4 issues </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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