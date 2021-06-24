<!DOCTYPE html>
<html lang="en">
<!--Header Disini-->
<?php
include "../header.php";
include "session.php";
?>
  <body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                      <h4>Laporan Minggu Ini</h4>
                      <canvas id="myChart" width="400" height="400"></canvas>
                      <script>
                          var ctx = document.getElementById('myChart').getContext('2d');
                          var myChart = new Chart(ctx, {
                              type: 'bar',
                              data: {
                                  labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                  datasets: [{
                                      label: '# of Votes',
                                      data: [12, 19, 3, 5, 2, 3],
                                      backgroundColor: [
                                          'rgba(255, 99, 132, 0.2)',
                                          'rgba(54, 162, 235, 0.2)',
                                          'rgba(255, 206, 86, 0.2)',
                                          'rgba(75, 192, 192, 0.2)',
                                          'rgba(153, 102, 255, 0.2)',
                                          'rgba(255, 159, 64, 0.2)'
                                      ],
                                      borderColor: [
                                          'rgba(255, 99, 132, 1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)',
                                          'rgba(75, 192, 192, 1)',
                                          'rgba(153, 102, 255, 1)',
                                          'rgba(255, 159, 64, 1)'
                                      ],
                                      borderWidth: 1
                                  }]
                              },
                        
                          });
                      </script>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4>Kontribusi Admin</h4>
                      <canvas id="myChart1" width="400" height="400"></canvas>
                      <script>
                          var ctx = document.getElementById('myChart1').getContext('2d');
                          var myChart = new Chart(ctx, {
                              type: 'pie',
                              data: {
                                  labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                  datasets: [{
                                      label: '# of Votes',
                                      data: [12, 19, 3, 5, 2, 3],
                                      backgroundColor: [
                                          'rgba(255, 99, 132, 0.2)',
                                          'rgba(54, 162, 235, 0.2)',
                                          'rgba(255, 206, 86, 0.2)',
                                          'rgba(75, 192, 192, 0.2)',
                                          'rgba(153, 102, 255, 0.2)',
                                          'rgba(255, 159, 64, 0.2)'
                                      ],
                                      borderColor: [
                                          'rgba(255, 99, 132, 1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)',
                                          'rgba(75, 192, 192, 1)',
                                          'rgba(153, 102, 255, 1)',
                                          'rgba(255, 159, 64, 1)'
                                      ],
                                      borderWidth: 1
                                  }]
                              },
                              options: {
                                  scales: {
                                      y: {
                                          beginAtZero: true
                                      }
                                  }
                              }
                          });
                      </script>
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