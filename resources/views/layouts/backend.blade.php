<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Backend</title>
  @toastr_css
  <!-- Bootstrap CSS -->
  <link href="/backend/NiceAdmin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="/backend/NiceAdmin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="/backend/NiceAdmin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="/backend/NiceAdmin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="/backend/NiceAdmin/css/owl.carousel.css" type="text/css">
  <link href="/backend/NiceAdmin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="/backend/NiceAdmin/css/fullcalendar.css">
  <link href="/backend/NiceAdmin/css/widgets.css" rel="stylesheet">
  <link href="/backend/NiceAdmin/css/style.css" rel="stylesheet">
  <link href="/backend/NiceAdmin/css/style-responsive.css" rel="stylesheet" />
  <link href="/backend/NiceAdmin/css/xcharts.min.css" rel=" stylesheet">
  <link href="/backend/NiceAdmin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link href="/assets/datatables/datatables.min.css" rel="stylesheet"> 
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Titik <span class="lite">Temu</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">{{ Auth::user()->name}}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
               <li>
                <a href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i> Log Out</a>
                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </li>
                
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="dashboard">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
           <li>
            <a class="" href="berita">
                          <i class="icon_table"></i>
                          <span>Berita</span>
                      </a>
          </li>
            <li>
            <a class="" href="produk">
                          <i class="icon_table"></i>
                          <span>Produk</span>
                      </a>
          </li>
            <li>
            <a class="" href="beans">
                          <i class="icon_table"></i>
                          <span>Beans</span>
                      </a>
          </li>
            <li>
            <a class="" href="kategoriproduk">
                          <i class="icon_table"></i>
                          <span>Kategori Produk</span>
                      </a>
          </li>
            <li>
            <a class="" href="minuman">
                          <i class="icon_table"></i>
                          <span>Kategori Beans</span>
                      </a>
          </li>
            <li>
            <a class="" href="booking">
                          <i class="icon_table"></i>
                          <span>Booking</span>
                      </a>
          </li>
           <li>
            <a class="" href="members">
                          <i class="icon_table"></i>
                          <span>Members</span>
                      </a>
          </li>
           <li>
            <a class="" href="review">
                          <i class="icon_table"></i>
                          <span>Review</span>
                      </a>
          </li>
          {{-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="bookling">Berita</a></li>
              <li><a class="" href="kategoribeans">Kategori Beans</a></li>
              <li><a class="" href="kategoriproduk">Kategori Produk</a></li>
              <li><a class="" href="kategoribeans">Kategori Beans</a></li>
              <li><a class="" href="produk">Produk</a></li>
               <li><a class="" href="beans">Beans</a></li>
                <li><a class="" href="booking">Booking</a></li>
                 <li><a class="" href="members">Members</a></li>
            </ul>
           
          </li> --}}

       

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      @yield('content2')
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard">Home</a></li>
 
            </ol>
          </div>
        </div>

      


        
@yield('content')
        




     

  <!-- javascripts -->
  @yield('js')

  <script src="/backend/NiceAdmin/js/jquery.js"></script>
  <script src="/backend/NiceAdmin/js/jquery-ui-1.10.4.min.js"></script>
  <script src="/backend/NiceAdmin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="/backend/NiceAdmin/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="/backend/NiceAdmin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="/backend/NiceAdmin/js/jquery.scrollTo.min.js"></script>
  <script src="/backend/NiceAdmin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="/backend/NiceAdmin/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="/backend/NiceAdmin/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="/backend/NiceAdmin/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="/backend/NiceAdmin/js/calendar-custom.js"></script>
    <script src="/backend/NiceAdmin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="/backend/NiceAdmin/js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="/backend/NiceAdmin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="/backend/NiceAdmin/js/sparkline-chart.js"></script>
    <script src="/backend/NiceAdmin/js/easy-pie-chart.js"></script>
    <script src="/backend/NiceAdmin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/backend/NiceAdmin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/backend/NiceAdmin/js/xcharts.min.js"></script>
    <script src="/backend/NiceAdmin/js/jquery.autosize.min.js"></script>
    <script src="/backend/NiceAdmin/js/jquery.placeholder.min.js"></script>
    <script src="/backend/NiceAdmin/js/gdp-data.js"></script>
    <script src="/backend/NiceAdmin/js/morris.min.js"></script>
    <script src="/backend/NiceAdmin/js/sparklines.js"></script>
    <script src="/backend/NiceAdmin/js/charts.js"></script> 
    <script src="/backend/NiceAdmin/js/jquery.slimscroll.min.js"></script>
    <script src="/assets/datatables/datatables.min.js"></script>

    <script>
    $(document).ready( function () {
    $('#table_id').DataTable();
    });
    </script>
<script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>
@toastr_js
@toastr_render
</html>
