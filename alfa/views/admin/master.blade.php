<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AlfaBank</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>

    <!-- Bootstrap core CSS     -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

    <!-- Animation library for notifications   -->
    <!-- <link href="{{url('/')}}css/admin/animate.min.css" rel="stylesheet"/> -->

    <!--  Paper Dashboard core CSS    -->
    <!-- <link href="{{url('/')}}/css/admin/paper-dashboard.css" rel="stylesheet"/> -->

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{url('/')}}/css/admin/fonts.css" rel="stylesheet" />
    <link href="{{url('/')}}/css/admin/icons/themify-icons.css" rel="stylesheet" />
    <link href="{{url('/')}}/css/admin/demo.css" rel="stylesheet" />
    <link href="{{url('/')}}/css/admin/media.css" rel="stylesheet" />

    <!--  Fonts and icons     -->

    <!-- <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'> -->
    <!-- <link href="assets/css/themify-icons.css" rel="stylesheet"> -->

</head>

<body>

    <div class="wrapper">
        <div class="row no-gutters">
        <div class="sidebar col-lg-3 col-12" data-background-color="white" data-active-color="danger">

       

            <div class="sidebar-wrapper admin-sidebar">
                <div class="container-fluid">
                    <div class="col">
                        <div class="logo">
                            <a href="{{url('/')}}" class="simple-text">
                                AlfaBank
                            </a>
                        </div>

                        <ul class="nav flex-column">
                            <li class="{{ Request::path() ==  'admin' ? 'active' : ''  }} nav-item">
                                <a href="{{url('/')}}/admin/">
                                    <i class="ti-arrow-circle-down"></i>
                                    <p>Акции</p>
                                </a>
                            </li>
                            <li class="{{ Request::path() ==  'admin/add' ? 'active' : ''  }} nav-item">
                                <a href="{{url('/')}}/admin/add">
                                    <i class="ti-angle-right"></i>
                                    <p>Добавить акцию</p>
                                </a>
                            </li>
                            <li class="{{ Request::path() ==  'admin/user' ? 'active' : ''  }} nav-item">
                                <a href="{{url('/')}}/admin/users">
                                    <i class="ti-user"></i>
                                    <p>Пользователь</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ti-back-right"></i>
                                    <p>Выйти</p>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>


                        </ul>
                    </div>



                </div>

            </div>

        </div>

        <div class="main-panel col pl-5 admin-panel__content">
            <nav class="navbar navbar-default">
                <div class="container-fluid pl-3">
                    <div class="navbar-header pt-2">
                        <button type="button" class="navbar-toggle d-none d-lg-none">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">@yield('title')</a>
                    </div>
                    <div class="collapse navbar-collapse">


                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col  ">
                                                    @if (session('success'))
                            <div class="alert ml-3 alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  {{ session('success') }}
</div>
        @endif                       
                              @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  {{ session('error') }}
</div>

                            @endif
                               @yield('content')
                        </div>

                    </div>
                </div>
            </div>


            

        </div>
        </div>
        <!-- wrapper end -->
    </div>
    <footer class="footer">
               <div class="container">
                   <div class="row">
                       <div class="col p-5 text-right">
                        made by  <a href="https://cheport.com.ua/" class='badge badge-secondary'>Cheport</a>
                       </div>
                   </div>
               </div>
            </footer>

</body>




</html>
