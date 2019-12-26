<!doctype html>
<html lang="en">

<head>
    <title>AbachTV</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
    <link href="{{ URL::asset('css/material-dashboard.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
  <div class="sidebar" data-color="azure" data-background-color="white" data-image="{{URL::asset('img/sidebar-4.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        AbachTV
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('upload')}}">
            <i class="material-icons">cloud_upload</i>
            <p>Upload</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('database')}}">
            <i class="material-icons">storage</i>
            <p>Database</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('live')}}">
            <i class="material-icons">live_tv</i>
            <p>Live Events</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('movies')}}">
            <i class="material-icons">local_movies</i>
            <p>Movie</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('tv')}}">
            <i class="material-icons">recent_actors</i>
            <p>TV Show</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">notifications</i> Notifications
                                </a>
                            </li>
                            <!-- your navbar here -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <!-- your content here -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-right">
                                <div class="card-header card-header-icon card-header-primary">
                                    <div class="card-icon">
                                        <i class="material-icons">tv</i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><b>Channels</b></h4>
                                    15
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-right">
                                <div class="card-header card-header-icon card-header-rose">
                                    <div class="card-icon">
                                        <i class="material-icons">live_tv</i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><b>Live Events</b></h4>
                                    12
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-right">
                                <div class="card-header card-header-icon card-header-info">
                                    <div class="card-icon">
                                        <i class="material-icons">movie</i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><b>Movie Links</b></h4>
                                    13
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-right">
                                <div class="card-header card-header-icon card-header-warning">
                                    <div class="card-icon">
                                        <i class="material-icons">local_movies</i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><b>TV Links</b></h4>
                                    12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="/logout">
                                    {{$username}}
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">

                    </div>
                    <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>
    <script src="{{URL::asset('js/core/jquery.min.js')}}"></script>
     <script src="{{URL::asset('js/core/popper.min.js')}}"></script>
     <script src="{{URL::asset('js/core/bootstrap-material-design.min.js')}}"></script>
     <script src="{{URL::asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
     <script src="{{URL::asset('js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
</body>
</html>
