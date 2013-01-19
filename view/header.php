
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <!-- the head section -->
    <head>
        <title>La Clef Guitar Shop</title>
        <link rel="stylesheet" href="css/nav.css" /> 
       	<link rel="stylesheet" type="text/css" 
			    href="<?php echo $app_path ?>main.css" />
		<link rel="stylesheet" type="text/css" href="main.css" />
			     <style type="text/css">
			     .slider{
			     width:500px;
			     height:300px;
			     overflow:hidden;
			     margin:30px auto;
	/*		     background-image:url(images/preloader.gif);
			     background-repeat:no-repeat;
			     background-position:center;
	*/		     }
			     .slider img{
			     width:100%;
			     height:300px;
			     display:none;
			     }
			     </style>
			    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>	
	<script type="text/javascript">
		function Slider(){
			$(".slider #1").show("slide",{direction: 'left'}, 500);
			$(".slider #1").delay(2500).hide("slide",{direction:"right"}, 500);
			var sc=$(".slider img").size();
			   var count=2;

			   setInterval(function(){
			        $(".slider #"+count).show("slide",{direction: 'left'}, 500);
			        $(".slider #"+count).delay(2500).hide("slide", {direction: 'right'}, 500);
			        if(count ==sc){
			            count=1;

			        }else{
			        count= count + 1;
			        }
			    },3500);
			}

	</script>
			    </head>

    <!-- the body section -->
 <body onload="Slider();">
<!--	<body>		-->    
    <div id="page"> 
        <div id="header" align="left">
            <h1>La Clef</h1>
        </div>
        
        <div id="main">
		<div class="slider">
        	
			<img id="1" src="images/687611_53029890.jpg" alt="Clef" width="300"
			height="300" />
			<img id="2" src="images/705088_94409189.jpg" alt="Clef" width="300"
			height="300" />
			<img id="3" src="images/671492_61691585.jpg" alt="Clef" width="300"
			height="300" />
       		<img id="4" src="images/1_s.jpg" alt="Clef" width="300"
			height="300" />		
			
        </div>
		<nav>
			<ul id="main">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="product.php">Catalog</a></li>
				<li><a href="services.php">Services</a></li> 
				<li><a href="videos.php">Videos</a></li> 
				<li><a href="http://desaules.wordpress.com/publications/">Blog</a></li>
				<li><a href="contact.php">Contact</a></li> 
			</ul>
		</nav>