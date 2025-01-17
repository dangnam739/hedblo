<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HEDBLO Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('/admin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/admin/css/sb-admin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href={{ URL::to('/home-page') }}>Home Page</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ URL::to('/home-page') }}">Home page</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ URL::to('users/' . auth()->user()->user_id) }}">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ URL::to('users/' . auth()->user()->user_id . '/edit') }}">Edit
                        profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ URL::to('logout') }}">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/admin/home-page">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin Page</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Manage</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Admin Profile:</h6>
                    <a class="dropdown-item" href={{ URL::to('/users/' . auth()->user()->user_id) }}>View Profile</a>
                    <a class="dropdown-item" href={{ URL::to('/users/' . auth()->user()->user_id) . '/edit' }}>Edit
                        Profile</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Actions:</h6>
                    <a class="dropdown-item" href={{URL::to('/tags/new')}}>Add tags</a>
                    {{-- <a class="dropdown-item" href="blank.html">Blank Page</a> --}}
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}
        </ul>

        <div id="content-wrapper">
            @yield('content')

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/admin/js/sb-admin.min.js"') }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('/admin/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('/admin/js/demo/chart-area-demo.js') }}"></script>

</body>

</html>
