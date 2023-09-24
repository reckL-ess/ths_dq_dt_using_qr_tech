<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TNHS | Dashboard</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/dashboard.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Include FullCalendar CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet">

  <!-- Include FullCalendar JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Add this in the <head> section of your HTML document -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/ths.png" alt="THSLogo" height="50" width="50">
  </div>

  <!-- Navbar -->
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Mission and Vision</a>
                        <a class="dropdown-item" href="#">History</a>
                        <a class="dropdown-item" href="#">Organization</a>
                    </div>
                </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Contact
                      </a>
                      <div class="dropdown-menu" aria-labelledby="contactDropdown">
                          <a class="dropdown-item" href="#">Feedback</a>
                          <a class="dropdown-item" href="#">Directory</a>
                      </div>
                  </li>
                  
                </ul>
            </div>
        </div>
    </nav>
</header>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/ths.png" alt="THS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tandaay High School</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      
       

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
     
      <!-- Sidebar Menu -->

  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <span class="brand-text font-weight-light"></span>
  </a>

  <a href="{{ url('Compose/') }}" class="btn btn-success btn-lg">
    <i class="fas fa-pencil-alt"></i> Compose
</a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Home -->
        <li class="nav-item">
          <a href="{{ url('home/') }}" class="nav-link">
            <link rel="stylesheet" type="text/css" href="your-styles.css">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>

        <!-- Incoming -->
        <li class="nav-item">
          <a href="{{ url('Incoming/') }}" class="nav-link">
            <i class="nav-icon fas fa-inbox"></i>
            <p>
              Incoming
            </p>
          </a>
        </li>

        <!-- Pending -->
        <li class="nav-item">
          <a href="{{ url('Pending/') }}" class="nav-link">
            <i class="nav-icon fas fa-clock"></i>
            <p>
              Pending
            </p>
          </a>
        </li>

        <!-- Outgoing -->
        <li class="nav-item">
          <a href="{{ url('Outgoing/') }}" class="nav-link">
            <i class="nav-icon fas fa-paper-plane"></i>
            <p>
              Outgoing
            </p>
          </a>
        </li>

        <!-- Tracking -->
        <li class="nav-item">
          <a href="{{ url('Tracking/') }}" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>
              Tracking
            </p>
          </a>
        </li>

        <!-- Transaction History -->
        <li class="nav-item">
          <a href="{{ url('TrackingHistory/') }}" class="nav-link">
            <i class="nav-icon fas fa-history"></i>
            <p>
              Transaction History
            </p>
          </a>
        </li>

        <!-- Maintenance -->
        <li class="nav-item">
          <a href="{{ url('Maintenance/') }}" class="nav-link">
            <i class="nav-icon fas fa-wrench"></i>
            <p>
              Maintenance
            </p>
          </a>
        </li>

        <!-- Reports -->
        <li class="nav-item">
          <a href="{{ url('Reports/') }}" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Reports
            </p>
          </a>
        </li>

        <!-- User Management -->
        <li class="nav-item">
          <a href="{{ url('UserManagement/') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User Management
            </p>
          </a>
        </li>

        <!-- My Account -->
        <li class="nav-item">
          <a href="{{ url('MyAccount/') }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              My Account
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

                            <!-- /.sidebar-menu -->
                          </div>
                          
                        <!-- /.sidebar-menu -->
                      </div>
                      <!-- /.sidebar -->
                    
                    
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
     
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
  </aside>

  
 <!-- Content Wrapper. Contains page content -->
  
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"></a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
                  
          <!--button for logout is here-->
          <button <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>
        </button>
          
            <li class="breadcrumb-item active"></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

    <!-- /.content-header -->

  <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- Incoming Docs -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>1</h3>
            <p>Incoming Docs</p>
          </div>
          <div class="icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Pending -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>0<sup style="font-size: 20px"></sup></h3>
            <p>Pending</p>
          </div>
          <div class="icon">
            <i class="fas fa-clock"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Receive -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>0</h3>
            <p>Receive</p>
          </div>
          <div class="icon">
            <i class="fas fa-download"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <!-- Ended -->
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>0</h3>
            <p>Ended</p>
          </div>
          <div class="icon">
            <i class="fas fa-check-circle"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  @section('content')
    <!-- ... other content ... -->

    <div class="gmail-search">
        <input type="text" id="gmail-search-input" class="gmail-search-input" placeholder="Search Anything">
        <button class="gmail-search-button" id="gmail-search-button">
            <i class="fas fa-search"></i>
    </div>

    <!-- ... more content ... -->

<style>
    .gmail-search {
        display: flex;
        align-items: center;
        background-color: #06a6f7;
        border-radius: 5px;
        padding: 5px;
        transition: all 0.2s ease;
    
    }

    .gmail-search-input {
        flex-grow: 1;
        border: none;
        outline: none;
        padding: 10px;
        font-size: 14px;
    }

    .gmail-search-button,
    .gmail-clear-button {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 18px;
        color: #777;
        transition: color 0.2s ease;
    }

    .gmail-clear-button {
        margin-right: 10px;
    }

    .gmail-search.expanded .gmail-search-button,
    .gmail-search.expanded .gmail-clear-button {
        color: #333;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#gmail-search-input').focus(function() {
            $('.gmail-search').addClass('expanded');
        });

        $('#gmail-search-input').blur(function() {
            if ($(this).val() === '') {
                $('.gmail-search').removeClass('expanded');
            }
        });

        $('#gmail-clear-button').click(function() {
            $('#gmail-search-input').val('');
            $('.gmail-search').removeClass('expanded');
        });
    });
</script>




<!-- ... more content ... -->
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Doc Code</th>
          <th>Sender</th>
          <th>Details</th>
          <th>Required Action</th>
          <th>Date</th>
          <th>Status</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>001</td>
          <td>Secretary 1</td>
          <td>Document Details</td>
          <td>Review</td>
          <td>2023-09-01</td>
          <td><span class="badge badge-success">Completed</span></td>
          <td>
              <button class="btn btn-primary">Edit</button>
              <button class="btn btn-danger">Delete</button>
          </td>
      </tr>
      <!-- Add more rows with data here -->
  </tbody>
</table>

<div id="calendar"></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        
        var calendar = new FullCalendar.Calendar(calendarEl, {
            // Add your calendar configuration options here
            initialView: 'dayGridMonth', // You can choose different views like dayGridWeek, timeGridWeek, etc.
            events: [
                // Define your events data source here
                // Example:
                {
                    title: 'Event 1',
                    start: '2023-09-01',
                    end: '2023-09-02',
                },
                {
                    title: 'Event 2',
                    start: '2023-09-05',
                    end: '2023-09-07',
                },
                // Add more events as needed
            ]
        });

        calendar.render();
    });
</script>


<!-- Calendar Container -->
<div id="calendar"></div>

<!-- Initialize FullCalendar -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid'],
            defaultView: 'dayGridMonth', // Initial view
            events: [
                // Your calendar events go here
                {
                    title: 'Event 1',
                    start: '2023-09-05'
                },
                {
                    title: 'Event 2',
                    start: '2023-09-10'
                },
                // Add more events as needed
            ]
        });

        calendar.render();
    });
</script>



<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<!-- Add this before the closing </body> tag -->
<script>
  $(document).ready(function () {
      $('.dropdown-toggle').dropdown();
  });
</script>

</body>
</html>