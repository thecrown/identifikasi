<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>Sistem Identifikasi Kendaraan Angkut</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- chosen -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/chosen/chosen.css">
	<!-- select2 -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/themes.css">
   <!-- dataTables -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/plugins/datatable/TableTools.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/default1.css"/>

	<!-- jQuery -->
	<script src="<?php echo base_url();?>js/jquery.min.js"></script>
	
	
	<!-- Nice Scroll -->
	<script src="<?php echo base_url();?>js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url();?>js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="<?php echo base_url();?>js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<script src="<?php echo base_url();?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="<?php echo base_url();?>js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Flot -->
	<script src="<?php echo base_url();?>js/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- imagesLoaded -->
	<script src="<?php echo base_url();?>js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- PageGuide -->
	<script src="<?php echo base_url();?>js/plugins/pageguide/jquery.pageguide.js"></script>
	<!-- FullCalendar -->
	<script src="<?php echo base_url();?>js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<!-- Chosen -->
	<script src="<?php echo base_url();?>js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- select2 -->
	<script src="<?php echo base_url();?>js/plugins/select2/select2.min.js"></script>
	<!-- icheck -->
	<script src="<?php echo base_url();?>js/plugins/icheck/jquery.icheck.min.js"></script>
    <!-- dataTables -->
	<script src="<?php echo base_url();?>js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/datatable/TableTools.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/datatable/ColReorder.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/datatable/ColVis.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/datatable/FixedColumns.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/datatable/dataTables.scroller.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
	<script src="<?php echo base_url();?>js/plugins/datatable/jquery.dataTables.grouping.js"></script>
	<!-- Theme framework -->
	<script src="<?php echo base_url();?>js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="<?php echo base_url();?>js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="<?php echo base_url();?>js/demonstration.min.js"></script>
	<!-- Validation -->
	<script src="<?php echo base_url();?>js/plugins/validation/jquery.validate.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/validation/additional-methods.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>js/script1.js"></script> 
	
	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>img/apple-touch-icon-precomposed.png" />
<script>
function Editdata() {
     job=confirm("Apakah Anda Ingin Memperbaharui Data ?");
    if(job!=true)
    	{
        return false;
    	}
}

function Tambahdata() {
     job=confirm("Apakah Anda Ingin Menambah Data ?");
    if(job!=true)
    	{
        return false;
    	}
}

function Hapusdata() {
     job=confirm("Apakah Anda Ingin Menghapus Data ?");
    if(job!=true)
    	{
        return false;
    	}
}

function Hitungmuatan() {
     job=confirm("Apakah Anda Ingin Menghitung Muatan ?");
    if(job!=true)
    	{
        return false;
    	}
}
function Detaildata() {
     job=confirm("Apakah Anda Ingin Melihat Detail Data ?");
    if(job!=true)
    	{
        return false;
    	}
}
$(document).ready( function () {
    $('#example').dataTable( {
        "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
        }
    } );
} );
</script>

</head>
