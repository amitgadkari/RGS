<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ambulance.run</title>



   <!-- Styles -->
   <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
     <!-- Styles -->
   <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
   <link href="{{ asset('css/app.css') }}" rel='stylesheet' type='text/css'>

<!--   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"> --> 
   <style>
                   .fa-btn {
                       margin-right: 6px;
                   }
            @charset "utf-8";
            /* CSS Document */
            body{
             margin:0px;
              padding:0px;}
            select{ 
                border:none;
                height: 200%;
             
                outline:none;
                color: #000000;
                background: #fff
                }
            select > option
            {
              background: #fff;
              color: #000;
            }
            .input{
              border:none;
              outline:none;
              height:200%; 
            width: 300px;
              padding:0 0 0 10px;
              }
              .form-group
              {
                margin-top: 2%;
              }
            .input-group{
              margin-top:0.75%;
              } 
   </style>

@yield('your_css')
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top" >
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                     <a class="navbar-brand" href="{{ url('/Dashboard/Dashboard-Stats') }}">
                   <b>Ambulance.run</b>
                </a>
            </div>
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @if (Auth::check())
                     <li>
                    <a style='color:#FFF' href="{{ url('/Dashboard/Live-Stats') }}"><span class="badge green"><span class="sphere success blink"></span> Live Stats</span></a>
                    </li>
                     <li>
                    <a style='color:#FFF' href="{{ url('/Dashboard/Region-Stats') }}">Region Stats </a>
                    </li>

                    <li>
                    <a style='color:#FFF' href="{{ url('/Generatelead/operators') }}">Generate lead </a>
                    </li>
                    
                 
                 
                <li class="dropdown">
                  <a style='color:#FFF;' class="dropdown-toggle" data-toggle="dropdown" href="#">Operators
                   <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                     <li><a href="{{ url('/operators') }}">Operator Management</a></li>
                     <li><a href="{{ url('/ambulances') }}">Ambulances</a></li>
                     <li><a href="{{ url('/operator/subscription_plan_calc') }}">Subscription Plan Calculator</a></li>
                  
                  </ul>
                 </li>
              
                      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#" style='color:#FFF' >Hospitals <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="{{ url('/hospitals') }}">Hospitals Management</a></li>
                         <li><a href="{{ url('/ambulances') }}">Ambulances</a></li>
                  
                     </ul>


                    </li>
                    <li><a style='color:#FFF' href="{{ url('/key_Partners') }}">Key Partners</a>
                    </li>               


                    @endif



                </ul>
               

                <ul class="nav navbar-nav navbar-right">

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a style='color:#FFF'href="{{ url('/login') }}">Login</a></li>
                        <li><a style='color:#FFF'href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a style='color:#FFF'href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              <i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a style='color:#333' href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


  <div class="container-fluid">
    <div class="col-md-2">
      <h3 align="center" class="text-danger">Admin Tools</h3>
      <ul class="list-group " >
    

  <li class="list-group-item">
        <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Location</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
           <ul class="list-group">
           
          <li class="list-group-item">
          <a href="{{url('Admin/Location/Region')}}">Region</a>
          </li>
          <li class="list-group-item">
          <a href="{{url('Admin/Location/Region')}}">City</a>
          </li>
          </ul>
        </div>
      </div>
    </div>
    
    
  </div>
  </li>
  <li class="list-group-item">Second item</li>
  <li class="list-group-item">Third item</li>
</ul>
    </div>
    <div class="col-md-10">
       @yield('content')
    </div>
  </div>
   

    

  <!-- JavaScripts -->
  <script src="{{ asset('js/vendor/jquery.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}



  @yield('your_script')
</body>
</html>