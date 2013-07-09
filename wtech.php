<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("../includes/head.php"); ?>
</head>
<body>
<script type="text/javascript" >
//
// strings for pannel
//
var backboneStr = "<p>This is a completed demo from Adrian Mejia on backbone.js. It ultimately creates a todo list leveraging backbone.js with underscore";
backboneStr = backboneStr + " templates. It covers the following components of building a backbone application. <ul style='list-style-position:inside;'><li>Views</li><li>Events</li><li>Models</li><li>Collections</li><li>Routers</li></ul>";
backboneStr = backboneStr + "The data model uses HTML 5 local storage. I will add an example later which uses mysql tables. <br /><br />You can run the application by clicking on the backbone.js list item.</p>";

var jqgridStr = "<p>This is an example of the jqGrid plugin I put together. It gets its data from MySQL table using php from a jquery ajax call.</p>";  

var jqDragDropStr = "<p>This is an example of the jQuery drag and drop plugin.</p>";

var datepickerStr = "<p>This is an example of the jQuery date picker plugin.</p>";

var spinnerStr = "<p>This is an example of the jQuery spinner plugin.</p>";

var tabsStr = "<p>This is an example of the jQuery tabs plugin.</p>";

var angularjsStr = "<p>This is an example of the angularjs. This application manages a contacts list. That list is stored on a mysql table through an angular defined factory.</p>";

$(document).ready(function() {
	//
	// backbone
	//
	$('#backbone').mouseover(function() {
		$('#backboneBody').css("display", "block");
		$('#itemTitleBackbone').css("color", "Maroon");
		$('#itemTitleBackbone').css("font-size", "1.2em");
		$('#show-panel').html(backboneStr);
	});
	
	$('#backbone').mouseout(function() {
		$('#backboneBody').css("display", "none");
		$('#itemTitleBackbone').css("color", "black");
		$('#itemTitleBackbone').css("font-size", "1em");
	  $('#show-panel').html('');
	});	
	
	$('#backboneDemo').click(function() {
	  PopUP('backbone\\todo.html', 'backbone', 300, 450, 0);
	});
	
	$('#backboneCode').click(function() {
	  PopUP('includes\\tocode.php?codepage=../backbone/todo.html', 'backbone', 600, 950, 0);
	});
	
	//
	// jqgrid   
	//
	$('#jqgrid').mouseover(function() {
		$('#jqgridBody').css("display", "block");
		$('#itemTitlejqgridDemo').css("color", "Maroon");
		$('#itemTitlejqgridDemo').css("font-size", "1.2em");
	  $('#show-panel').html(jqgridStr);
	});
	
	$('#jqgrid').mouseout(function() {
		$('#jqgridBody').css("display", "none");
		$('#itemTitlejqgridDemo').css("color", "black");
		$('#itemTitlejqgridDemo').css("font-size", "1em");		
	  $('#show-panel').html('');
	});	
	
	$('#jqgridDemo').click(function() {
	  PopUP('jqgrid\\jqgrid.php', 'jqgrid', 375, 925, 0);
	});
	
	$('#jqgridCode').click(function() {
	  PopUP('includes\\tocode.php?codepage=../jqgrid/jqgrid.php', 'jqgrid', 600, 950, 0);
	});
	
	//
	// drag drop   
	//
	$('#jqDragDrop').mouseover(function() {
		$('#jqDragDropBody').css("display", "block");
		$('#itemTitlejqDragDropDemo').css("color", "Maroon");
		$('#itemTitlejqDragDropDemo').css("font-size", "1.2em");
	  $('#show-panel').html(jqDragDropStr);
	});
	
	$('#jqDragDrop').mouseout(function() {
		$('#jqDragDropBody').css("display", "none");
		$('#itemTitlejqDragDropDemo').css("color", "black");
		$('#itemTitlejqDragDropDemo').css("font-size", "1em");		
	  $('#show-panel').html('');
	});	
	
	$('#jqDragDropDemo').click(function() {
	  PopUP('dragdrop\\dragdrop.php', 'dragdrop', 600, 850, 0);
	});
	
	$('#jqDragDropCode').click(function() {
	  PopUP('includes\\tocode.php?codepage=../dragdrop/dragdrop.php', 'dragdrop', 600, 950, 0);
	});	

	//
	// date picker   
	//
	$('#datepicker').mouseover(function() {
		$('#datepickerBody').css("display", "block");
		$('#itemTitledatepickerDemo').css("color", "Maroon");
		$('#itemTitledatepickerDemo').css("font-size", "1.2em");
	  $('#show-panel').html(datepickerStr);
	});
	
	$('#datepicker').mouseout(function() {
		$('#datepickerBody').css("display", "none");
		$('#itemTitledatepickerDemo').css("color", "black");
		$('#itemTitledatepickerDemo').css("font-size", "1em");		
	  $('#show-panel').html('');
	});	
	
	$('#datepickerDemo').click(function() {
	  PopUP('datepicker\\datepicker.php', 'datepicker', 300, 450, 0);
	});
	
	$('#datepickerCode').click(function() {
	  PopUP('includes\\tocode.php?codepage=../datepicker/datepicker.php', 'datepicker', 600, 950, 0);
	});	

	//
	// spinner   
	//
	$('#spinner').mouseover(function() {
		$('#spinnerBody').css("display", "block");
		$('#itemTitlespinner').css("color", "Maroon");
		$('#itemTitlespinner').css("font-size", "1.2em");
	  $('#show-panel').html(spinnerStr);
	});
	
	$('#spinner').mouseout(function() {
		$('#spinnerBody').css("display", "none");
		$('#itemTitlespinner').css("color", "black");
		$('#itemTitlespinner').css("font-size", "1em");		
	  $('#show-panel').html('');
	});	
	
	$('#spinnerDemo').click(function() {
	  PopUP('spinner\\spinner.html', 'spinner', 300, 450, 0);
	});
	
	$('#spinnerCode').click(function() {
	  PopUP('includes\\tocode.php?codepage=../spinner/spinner.html', 'spinner', 600, 950, 0);
	});	

	//
	// tabs   
	//
	$('#tabs').mouseover(function() {
		$('#tabsBody').css("display", "block");
		$('#itemTitletabs').css("color", "Maroon");
		$('#itemTitletabs').css("font-size", "1.2em");
	  $('#show-panel').html(tabsStr);
	});
	
	$('#tabs').mouseout(function() {
		$('#tabsBody').css("display", "none");
		$('#itemTitletabs').css("color", "black");
		$('#itemTitledtabs').css("font-size", "1em");		
	  $('#show-panel').html('');
	});	
	
	$('#tabsDemo').click(function() {
	  PopUP('tabs\\tabs.html', 'tabs', 300, 450, 0);
	});
	
	$('#tabsCode').click(function() {
	  PopUP('includes\\tocode.php?codepage=../tabs/tabs.html', 'tabs', 600, 950, 0);
	});	


	//
	// angular   
	//
	$('#angularjs').mouseover(function() {
		$('#angularjsBody').css("display", "block");
		$('#itemTitleangularjs').css("color", "Maroon");
		$('#itemTitleangularjs').css("font-size", "1.2em");
	  $('#show-panel').html(angularjsStr);
	});
	
	$('#angularjs').mouseout(function() {
		$('#angularjsBody').css("display", "none");
		$('#itemTitleangularjs').css("color", "black");
		$('#itemTitledangularjs').css("font-size", "1em");		
	  $('#show-panel').html('');
	});	
	
	$('#angularjsDemo').click(function() {
	  PopUP('angularjs\\index.php', 'angularjs', 600, 950, 0);
	});
	
	$('#angularjsCode').click(function() {
	  PopUP('includes\\tocode.php?codepage=../angularjs/index.php', 'angularjs', 600, 950, 0);
	});	


});


function PopUP (urlParm, wname, ht, wt, restrict) 
{
	var winLeft, winTop;
	
	winLeft = (screen.width-wt)/2;
	winTop = (screen.height-(ht+110))/2; 

	if (restrict == 1)
	{
		popNew = window.open(urlParm,wname,"toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,width="+wt+",height="+ht+",left="+ winLeft+",top="+winTop+",resizable=0");	
	}
	else
	{
		popNew = window.open(urlParm,wname,"toolbar=yes,location=no,directories=no,status=no,menubar=yes,scrollbars=yes,width="+wt+",height="+ht+",left="+winLeft+",top="+winTop+",resizable=1"); 		
	}
	return false;
}
</script>

<?php include("../includes/banner.php"); ?>

<div id="main-content">
<div class="yrbreadcrumbs">
</div> <!-- end of yrbreadcrumbs -->

<div id="section-panel">
<div class="section-article">
<h2>Web Technology</h2>

<div id="leftselect">
<h3>Examples</h3>

<div id="backbone" class="itemArticleBlocks">
<span id="itemTitleBackbone">backbone.js</span>
<div class="itemBody" id="backboneBody">
<a href="" id="backboneDemo" style="text-decoration:none;">Demo</a><span style="width:25px;">&nbsp;&nbsp;&nbsp;&nbsp;</span><a href="" id="backboneCode"  style="text-decoration:none;">Code</a>
</div><!-- end of itemBody -->
</div><!-- end of backbone -->

<div id="jqgrid" class="itemArticleBlocks">
<span id="itemTitlejqgridDemo">jQuery jqGrid plugin</span>
<div class="itemBody" id="jqgridBody">
<a href="" id="jqgridDemo" style="text-decoration:none;">Demo</a><span style="width:25px;">&nbsp;&nbsp;&nbsp;&nbsp;</span><a id="jqgridCode" href="" style="text-decoration:none;">Code</a>
</div><!-- end of itemBody -->
</div><!-- end of jqgrid -->

<div id="jqDragDrop" class="itemArticleBlocks">
<span id="itemTitlejqDragDropDemo">jQuery Drag and Drop Example</span>
<div class="itemBody" id="jqDragDropBody">
<a href="" id="jqDragDropDemo" style="text-decoration:none;">Demo</a><span style="width:25px;">&nbsp;&nbsp;&nbsp;&nbsp;</span><a id="jqDragDropCode" href="" style="text-decoration:none;">Code</a>
</div><!-- end of itemBody -->
</div><!-- end of datepicker -->

<div id="datepicker" class="itemArticleBlocks">
<span id="itemTitledatepickerDemo">jQuery Date Picker widget</span>
<div class="itemBody" id="datepickerBody">
<a href="" id="datepickerDemo" style="text-decoration:none;">Demo</a><span style="width:25px;">&nbsp;&nbsp;&nbsp;&nbsp;</span><a id="datepickerCode" href="" style="text-decoration:none;">Code</a>
</div><!-- end of itemBody -->
</div><!-- end of datepicker -->

<div id="spinner" class="itemArticleBlocks">
<span id="itemTitlespinner">jQuery spinner widget</span>
<div class="itemBody" id="spinnerBody">
<a href="" id="spinnerDemo" style="text-decoration:none;">Demo</a><span style="width:25px;">&nbsp;&nbsp;&nbsp;&nbsp;</span><a id="spinnerCode" href="" style="text-decoration:none;">Code</a>
</div><!-- end of itemBody -->
</div><!-- end of spinner -->

<div id="tabs" class="itemArticleBlocks">
<span id="itemTitletabs">jQuery Tabs widget</span>
<div class="itemBody" id="tabsBody">
<a href="" id="tabsDemo" style="text-decoration:none;">Demo</a><span style="width:25px;">&nbsp;&nbsp;&nbsp;&nbsp;</span><a id="tabsCode" href="" style="text-decoration:none;">Code</a>
</div><!-- end of itemBody -->
</div><!-- end of tabs -->

<div id="angularjs" class="itemArticleBlocks">
<span id="itemTitleangularjs"> Angularjs Example</span>
<div class="itemBody" id="angularjsBody">
<a href="" id="angularjsDemo" style="text-decoration:none;">Demo</a><span style="width:25px;">&nbsp;&nbsp;&nbsp;&nbsp;</span><a id="angularjsCode" href="" style="text-decoration:none;">Code</a>
</div><!-- end of itemBody -->
</div><!-- end of angularjs -->

</div> <!-- end of  leftselect -->
<div style="width:80%" id="show-panel">
</div>
</div> <!-- end of section-article -->
</div> <!-- end of section-panel -->

</div> <!--end of main-content -->
</div> <!-- end of container -->
</body>
</html>
