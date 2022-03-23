<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courseAdvisor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$roomNo = $_GET['roomNo'];
$courseCode = $_GET['courseCode'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Update Building</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Custom box css -->
    <link href="assets/libs/custombox/custombox.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">


            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="assets/images/ncdmb_logo_large.png_" alt="" height="50">
                        <!-- <span class="logo-lg-text-light">UBold</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">U</span> -->
                        <img src="assets/images/ncdmb_logo_small.png_" alt="" height="50">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->

         <!-- ========== Left Sidebar Start ========== -->
         <div class="left-side-menu">

<div class="slimscroll-menu">

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">ADMIN</li>

            <li>
                <a href="all_students.php">
                    <i class="fe-airplay"></i>
                    <span> List of All Students </span>
                </a>

            </li>
            <li>
        <a href="all_staff.php">
            <i class="fe-airplay"></i>
            <span> List of All Staff </span>
        </a>

    </li>
            <li>
                <a href="reg_students.php">
                    <i class="fe-airplay"></i>
                    <span> List of Registered Students </span>
                </a>

            </li>
            <li>
                <a href="courses.php">
                    <i class="fe-airplay"></i>
                    <span> List of Courses </span>
                </a>

            </li>
            <li>
                <a href="building.php">
                    <i class="fe-airplay"></i>
                    <span> List Building </span>
                </a>

            </li>
            <li>
                <a href="register_new_student.php">
                    <i class="fe-airplay"></i>
                    <span> Add New Student </span>
                </a>

            </li>
            <li>
                <a href="register_new_staff.php">
                    <i class="fe-airplay"></i>
                    <span> Add New Staff </span>
                </a>

            </li>
            <li>
                <a href="register_new_course.php">
                    <i class="fe-airplay"></i>
                    <span> Add New Course </span>
                </a>

            </li>
            
            

            <li class="menu-title">STUDENT</li>

            <li>
                <a href="index.php">
                    <i class="fe-airplay"></i>
                    <span> Home</span>
                </a>

            </li>



        </ul>

    </div>
    <!-- End Sidebar -->


                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title">UPDATE BUILDING DETAILS</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">

                                    <?php
                                    if(isset($_SESSION['status']))
                                    {
                                        echo "<h4>".$_SESSION['status']."</h4>";
                                        unset($_SESSION['status']);
                                    }


                                    ?>
                                    <div class="table-responsive">
                                        <div class="card-box">

                                            
                                            <form action="edit_building.php" method="POST" class="parsley-examples">
                                                
                                                <div class="form-group">
                                                    <label for="courseCode">Course Code<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="courseCode" parsley-trigger="change" required
                                                    value="<?php echo "$courseCode" ?>" class="form-control"
                                                        id="courseCode">
                                                
                                                <div class="form-group text-center m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                               UPDATE RECORD
                                            </button>
                                            </form>
                                        </div>
                                               
                                        </div>

                                       

                                       
                                    </div> <!-- end card-box -->
                                </div>



                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->


                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2021 &copy; Advanced Database Project<a href=""> (TOPN)</a>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Modal -->
    

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Modal-Effect -->
    <script src="assets/libs/custombox/custombox.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>