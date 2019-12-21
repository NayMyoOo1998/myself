<div class="cover">
  <div id="demo" class="carousel slide" data-ride="carousel" style="opacity: .7">

      <!-- Indicators -->
      <!-- <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul> -->

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{URL::asset('images/f.jpg')}}" alt="Los Angeles" width="100%" height="350">
        </div>
        <div class="carousel-item">
          <img src="{{URL::asset('images/a.jpg')}}" alt="Chicago" alt="Los Angeles" width="100%" height="350">
        </div>
        <div class="carousel-item">
          <img src="{{URL::asset('images/e.jpg')}}" alt="New York" alt="Los Angeles" width="100%" height="350">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <!-- <span class="carousel-control-prev-icon"></span> -->
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <!-- <span class="carousel-control-next-icon"></span> -->
      </a>

  </div>
  <div class="profile">
    <img src="{{URL::asset('images/c.jpg')}}" width="130" height="130" style="border-radius: 50%;">
  </div>


<!-- for navbar -->

     <nav class="navbar navbar-expand-md navbar-light">
        <!-- Brand -->
        <a class="navbar-brand pull-left shake" href="{{asset('/')}}" style="margin-left: 30px;" id="logo"><img src="{{asset('images/logo1.png')}}" width="100" height="70"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="navbar-brand" href="{{asset('/')}}" id="a_profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="#" id = "a_blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="{{asset('about')}}" id="a_about">About</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="{{asset('contact')}}" id = "a_contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav> 
<!-- end navbar -->

</div>