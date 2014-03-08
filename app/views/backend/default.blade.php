<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auxano Stores | {{ $title }}</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->

{{HTML::Style('css/normalize.css') }}
{{HTML::Style('css/foundation.css') }}
{{HTML::Style('css/font-awesome.min.css') }}
{{HTML::Style('css/custom.css') }}
<!-- CSS End-->

<!-- JS Start-->
{{HTML::script('js/vendor/modernizr.js')}}

  <!-- If you are using the gem version, you need this only -->

  <script src=""></script>

</head>
<body>

  <!-- Navigation started -->
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
    <li class="name">
      <h1 class="active"><a href="#"><i class="fa fa-laptop fa-lg"></i> Auxano Store - {{ $title }}</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
    <ul class="left">
    <li class="divider"></li>
    <li class=""><a href="#"> <i class="fa fa-shopping-cart fa-lg"></i> Go to Store </a> </li>
      <li class="divider"></li>
      
    </ul>
  <ul class="right">
    <li class="divider"></li>
       <li class="has-dropdown"><a href="#"><i class="fa fa-bars fa-lg"></i> Welcome Oludare! </a>
              <ul class="dropdown">
                 <li class=""><a href="#"><i class="fa fa-user fa-lg"></i>  User Profile </a> </li>
               <li class=""><a href="#"> <i class="fa fa-unlock fa-lg"></i>  LogOut </a> </li>
                
              </ul>
        </li>
  </ul>

  </section>
  </nav>
<!-- </div> nav -->

<div class="row"> <!-- Start Master -->

<div class="medium-3 columns panel"><!-- sidebar -->
  
    <ul class="side-nav ">
  <li class="listructure">{{ HTML::link('admin/categories', ' Dashboard', array('class'=>'fa fa-laptop'))}} </li>
  <li class="listructure">{{ HTML::link('admin/categories', ' Category', array('class'=>'fa fa-tasks'))}} </li>
  <li class="listructure">{{ HTML::link('admin/products/', ' Products', array('class'=>'fa fa-cloud-download'))}} </li>
  <li class="listructure">{{ HTML::link('admin/categories/', ' Orders &amp; Supply', array('class'=>'fa fa-shopping-cart'))}} </li>
  
</ul>

</div><!-- Close Large-4 sidebar-->


<div class="large-9 columns">

<ul class="breadcrumbs">
  <li><a href="#">Home</a></li>
  <li><a href="#">Features</a></li>
  <li class="unavailable"><a href="#">Gene Splicing</a></li>
  <li class="current"><a href="#">Cloning</a></li>
</ul>

<div class="row">
@if(Session::has('message'))
          <div data-alert class="alert-box "> {{ Session::get('message')}} <a href="#" class="close">&times</a> </div>

        @endif
</div>
@yield('content')

</div><!-- Large-8 -->
  





</div> <!-- Ends Master Row -->

{{HTML::script('js/vendor/jquery.js')}}
{{HTML::script('js/foundation.min.js')}}
  <script>
    $(document).foundation();
  </script>
</body>
</html>