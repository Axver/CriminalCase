<!DOCTYPE html>
<html lang="en">
<!--Header Disini-->
<?php
include "../header.php";
include "session.php";
include "../../php/connect.php";
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
                      <h4>Laporan Terbaru</h4>
                      <?php

                      $sql = "SELECT * FROM laporan LEFT JOIN users ON laporan.no_polisi=users.no_polisi LEFT JOIN jenis_laporan ON laporan.id_jenis=jenis_laporan.id_jenis ORDER BY tgl_bulan_thn ASC LIMIT 10 ";
                      $data=mysqli_query($conn,$sql);


                      while($d = mysqli_fetch_array($data)){
                          ?>

                          <div class="alert alert-success" role="alert">Laporan <?php echo $d['no_laporan'] ?> Oleh Admin <?php echo $d['nama'] ?>- <?php echo $d['tgl_bulan_thn'] ?> </div>


                          <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                     <h4>Selamat Datang di Sistem Informasi Pelaporan Tindak Kriminal</h4>

                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec sollicitudin tellus. Quisque dolor mi, finibus nec auctor vestibulum, elementum sed mi. Morbi venenatis rhoncus pulvinar. Etiam sit amet elit efficitur, porta lorem vitae, auctor metus. Donec eleifend ut velit malesuada vehicula. Donec est augue, sodales sit amet enim at, auctor consectetur nulla. Sed feugiat erat vitae ornare consequat. Aliquam erat volutpat. Donec consectetur justo rhoncus diam hendrerit, eget scelerisque arcu efficitur. In quis nisi mi. Vivamus iaculis, neque nec mollis fermentum, enim ex ultrices felis, vel ornare quam tortor at ligula. Ut gravida sapien ac cursus dapibus. Vestibulum at mi vitae sapien congue condimentum.

                          Pellentesque sit amet lorem neque. Morbi vel elit et massa sollicitudin accumsan lacinia a lectus. Aenean vitae tempor diam. Donec vel nisi scelerisque, feugiat ex at, ullamcorper tortor. Aenean fringilla ante nisl, et aliquam nulla ornare a. Duis id tempor nisi, vitae pretium tellus. Quisque quis consequat ligula. Suspendisse fringilla vestibulum ex, et rhoncus nulla sollicitudin sit amet. Sed maximus lectus eros, a varius eros vestibulum at. Ut dictum nibh in convallis commodo. Phasellus quis nunc felis. Proin posuere ultricies magna mollis vehicula. Nunc ut arcu at ligula volutpat dignissim in ut massa.

                          Ut tellus augue, semper et magna gravida, finibus iaculis augue. Nam nec lectus dolor. In hac habitasse platea dictumst. Integer cursus nunc a odio pretium vehicula. Vestibulum ultricies ipsum in risus ultricies mollis. Proin ullamcorper lacinia fringilla. Praesent condimentum massa eget erat vestibulum, vitae cursus urna facilisis. Vestibulum eget mi tristique lectus feugiat egestas quis eu turpis. Vestibulum vehicula, ligula in pretium lobortis, libero lacus consequat enim, ac commodo arcu risus nec libero. Integer turpis orci, efficitur at efficitur at, malesuada nec orci. Sed viverra nec elit et semper. Nam hendrerit ultrices justo a auctor.

                          In hac habitasse platea dictumst. Aenean tempor, augue non viverra posuere, nisl felis lobortis enim, eu venenatis risus nunc quis risus. Curabitur eget massa semper, lacinia eros eu, rhoncus elit. Pellentesque tempus hendrerit erat sit amet dapibus. Sed efficitur sem neque, nec vestibulum lectus elementum vehicula. Nunc venenatis dui et ipsum dapibus, ac condimentum justo fringilla. Phasellus ac sapien et justo luctus scelerisque. Nullam vitae lacus ut tortor fermentum dictum vel eget lectus. Ut lorem magna, semper eu aliquam ut, hendrerit sed ipsum. Praesent quis ex varius, malesuada lectus eget, placerat lacus.

                          Donec scelerisque dolor at magna dictum tincidunt. Pellentesque sit amet maximus diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam fermentum ipsum lacus, egestas bibendum ligula aliquam quis. Donec at dictum lacus, vitae posuere lorem. Quisque scelerisque tortor vitae malesuada laoreet. Curabitur accumsan, dui sed pellentesque commodo, urna velit pellentesque turpis, non blandit turpis lectus nec justo. Cras mattis ac nunc non pretium. Sed egestas rhoncus tincidunt. Mauris mollis ipsum luctus sagittis sodales. Nulla lacinia in orci a placerat. Quisque pellentesque auctor nunc, condimentum dignissim justo fermentum sit amet. Aenean faucibus massa sit amet ligula imperdiet, eu imperdiet purus tempor. Nullam ut dapibus lorem.
                      </p>
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