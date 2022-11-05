<!DOCTYPE html>
<html lang="en">
@include('layouts.akadpro.inc.head')

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
  
        @include('layouts.akadpro.inc.header')

	
   
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
   
        @include('layouts.akadpro.inc.sidebar')   
	
	
	
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
   
   <!--main content start-->
    <section id="main-content">
    @yield('content')     
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
	
	
	
    <!--main content end-->
    @include('layouts.akadpro.inc.footer') 
	
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('template/Dashio/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template/Dashio/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/Dashio/lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script src="{{ asset('template/Dashio/lib/jquery.ui.touch-punch.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('template/Dashio/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('template/Dashio/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('template/Dashio/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{ asset('template/Dashio/lib/common-scripts.js') }}"></script>
  <!--script for this page-->

</body>

</html>
