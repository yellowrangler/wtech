<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>jQuery Date picker Demo</title>

<link rel="stylesheet" href="../js/jquery-ui-1.10.2.custom/css/overcast/jquery-ui-1.10.2.custom.css" type="text/css">
<link rel="stylesheet" href="../css/ui.multiselect.css"  type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|PT+Sans" type="text/css">
<link rel="stylesheet" href="../css/ui.jqgrid.css" type="text/css" />

<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="../js/jquery.jqGrid.min.js"></script>
<script type="text/javascript" src="../js/i18n/grid.locale-en.js"></script>

</head>
<body>
<script type="text/javascript" >
$(document).ready(function() {
	
	$( "#datepicker" ).datepicker({
	      showOn: "button",
	      buttonImage: "../images/calendar.gif",
	      buttonImageOnly: true
	    });
});

</script>

<div class="container">
<div style="display:block;position:absolute;top:50px;padding-left:50px;color:maroon;">
<span style="padding:70px;color:black;">Click on calendar icon</span>
<br /><br />
Choose a Date:&nbsp;<input style="font-size:12px;" type="text" id="datepicker" />
</div>

</div> <!-- end of container -->
</body>
</html>
