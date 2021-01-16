<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ONE TOUCH TRACKER</title>
        <link rel="stylesheet"href="styles.css" >
        <link rel="stylesheet" href="w.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand">PARENT</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" ><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                   
                    <div class="input-group-append">
                       
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="home.php">Homepage</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pLogout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Student Details</div>
                            <a class="nav-link text-decoration-none" href="stuinfo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Profile
                            </a>
                            <div class="sb-sidenav-menu-heading">School Details</div>
                            <a class="nav-link collapsed text-decoration-none" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                               View Option
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="pviewevent.php">Event</a>
                                    <a class="nav-link" href="pviewnews.php">News</a>
                                    <a class="nav-link" href="test.php">Timetable</a>
                                    <a class="nav-link" href="pviewexam.php">Exam Schedule</a>
                                    <a class="nav-link" href="pviewexamresult.php">Exam Result</a>
                                    
                                </nav>
                            </div>
      
                            <div class="sb-sidenav-menu-heading">Track Student</div>
                            <a class="nav-link text-decoration-none" href="stuarrival.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-school"></i></i></div>
                                Student Arrival
                            </a>
                            <a class="nav-link text-decoration-none" href="leave.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></i></div>
                                Leave Application
                            </a>
                            </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Parent
                    </div>
                </nav>
            </div>
         
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <br>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Parent Dashboard</li>
                        </ol>
                        
                        </div>

                    </div>
                </div>
            </main>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>
</html>