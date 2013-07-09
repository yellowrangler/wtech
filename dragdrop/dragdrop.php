<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|PT+Sans" type="text/css">
<link rel="stylesheet" href="/ha/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ha/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<body>
    
<style type="text/css">
#silo {
    position: relative;       
    width:100%;
    height:95%; 
    display:block;
    background:white; 
    border: 0px solid black;
    }  

.gridAreaBox {
    float:left;
    height:100px;
    width:160px;
    padding:2px;
    margin:5px;
    overflow-y: auto;
    overflow-x: hidden; 		    
    background:white;
    border: 1px solid teal;    
    }
    
.selectBox {
    position:fixed;
    height:50px;
    width:100px;
    padding:2px;
    margin:2px;
    overflow-y: hidden;
    overflow-x: hidden;		    
    font:700 12px Verdana, Helvetica, sans-serif;    
    background:#eeeee0;
    border: 1px solid red;    
    }

.hoodBoxDetails {
    position: relative;
    top:0px;
    left:0px;
    height:100%;   
    overflow-y: auto;
    overflow-x: hidden;		
    display:block;
    background:white; 
    }
    
</style>

<script type="text/javascript">

$(document).ready(function() {
    
    var boxes=48;
        
    buildGrid(boxes); 
 
    // mark select box as draggable
    $( "#selectBox" ).draggable({ revert: 'invalid'});
    
    // mark grid boxes as droppable 
    $( ".gridAreaBox" ).droppable({
            drop: function( event, ui) {
                var displayVal = this.id; 
                $("#displaySelBox").text(displayVal);   
            }
    });

    $( "#selectBox" ).css('top', '10px' );
    $( "#selectBox" ).css('left', '10px' );    
 
} );  

function buildGrid(boxes)
{
    for (var i = 0; i < boxes; i++)
    {
        var thisId = "Box# "+i;
        
        $("#silo").append("<div class='gridAreaBox' id='"+thisId+"' ><center><span style='padding-top:15px;font-size:400%;color:Maroon;'>"+i+"</span></center></div>");
    } // end of boxes
} // buildGrid

</script>

<div class="divContainer" id="divContainer" >
<div class="hoodBoxDetails" id="hoodBoxDetails" >
<div id='silo' >
</div>
</div> <!-- end of hoodBoxDetails -->
<div class="selectBox" id="selectBox" ><center><span id="displaySelBox" style='padding-top:15px;color:Maroon;'>Drag Me!</span></center></div>
</div>
