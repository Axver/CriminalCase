<!DOCTYPE html>
<html lang="en">
<!--Header Disini-->
<?php
include "../../php/connect.php";
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
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email"></i>
                            <span class="count bg-success"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">4 new messages</p>
                        </div>
                    </li>
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="count bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Event today</p>
                                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings</p>
                                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-link-variant text-warning"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Launch Admin</p>
                                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">See all notifications</p>
                        </div>
                    </li>
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
                                <h4 class="card-title">Informasi Pangkat</h4>
                                <button onclick="tambahPangkat()" class="btn btn-info">Tambah</button>
                                <br/>
                                <br/>
                                <div class="table-responsive">


                                    <table id="TAcrimPangkat" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Pangkat</th>
                                            <th>Edit</th>
                                            <th>Delete</th>


                                        </tr>
                                        </thead>
                                        <tbody>



                                        <?php

                                        $sql = "SELECT * FROM pangkat";
                                        $data=mysqli_query($conn,$sql);


                                        while($d = mysqli_fetch_array($data)){
                                            ?>

                                            <tr>
                                                <td><?php echo $d['id_pangkat'];?></td>
                                                <td><?php echo $d['pangkat'];?></td>


                                                <td>
                                                    <a onclick="editPangkat('<?php echo $d['id_pangkat']; ?>')" class="nav-link" href="#">
                                                        <span class="iconify" data-icon="mdi:clipboard-edit-outline" data-inline="false"></span>
                                                        <span>Edit</span>

                                                    </a>
                                                </td>
                                                <td>


                                                    <a onclick="deletePangkat('<?php  echo $d['id_pangkat']; ?>')" class="nav-link" href="#">
                                                        <span class="iconify" data-icon="mdi:delete" data-inline="false"></span>
                                                        <span>Delete</span>

                                                    </a>
                                                </td>

                                            </tr>

                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Pangkat</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row ">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informasi Akun</h4>
                                <button onclick="tambahAkun()" class="btn btn-info">Tambah</button>
                                <br/>
                                <br/>



                                <div class="table-responsive">
                                    <table id="TAcrimAkun" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>No Polisi</th>
                                            <th>Pangkat</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Edit</th>
                                            <th>Delete</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        $sql = "SELECT * FROM users LEFT JOIN pangkat ON users.id_pangkat=pangkat.id_pangkat";
                                        $data=mysqli_query($conn,$sql);


                                        while($d = mysqli_fetch_array($data)){
                                            ?>

                                            <tr>
                                                <td><?php echo $d['no_polisi'] ?></td>
                                                <td><?php echo $d['pangkat'] ?></td>
                                                <td><?php echo $d['nama'] ?></td>
                                                <td><?php echo $d['username'] ?></td>
                                                <td><?php echo $d['password'] ?></td>

                                                <td>
                                                    <a onclick="editUser('<?php echo $d["no_polisi"] ?>')" class="nav-link" href="#">
                                                        <span class="iconify" data-icon="mdi:clipboard-edit-outline" data-inline="false"></span>
                                                        <span>Edit</span>

                                                    </a>
                                                </td>
                                                <td>


                                                    <a onclick="deleteUser('<?php echo $d["no_polisi"] ?>')" class="nav-link" href="#">
                                                        <span class="iconify" data-icon="mdi:delete" data-inline="false"></span>
                                                        <span>Delete</span>

                                                    </a>
                                                </td>

                                            </tr>

                                            <?php
                                        }
                                        ?>


                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>No Polisi</th>
                                            <th>Pangkat</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <!--      Footer Disini-->
            <?php
            include "../footer.php";
            include "manageAccountModal.php";

            ?>
</body>
</html>