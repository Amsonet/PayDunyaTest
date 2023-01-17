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

  <script type="text/javascript" language="javascript" src="{{ asset('template/Dashio/lib/advanced-datatable/js/jquery.js') }}"></script>
  <script type="text/javascript" language="javascript" src="  {{ asset('template/Dashio/lib/advanced-datatable/js/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" src="{{ asset('template/Dashio/lib/advanced-datatable/js/DT_bootstrap.js') }}"></script>

  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
  
  <!--common script for all pages-->
</body>

</html>
