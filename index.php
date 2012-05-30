<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link rel="stylesheet" type="text/css" href="reset.css" >
<link rel="stylesheet" type="text/css" href="1styles.css">
<link rel="stylesheet" type="text/css" href="style.css" >
<link rel="stylesheet" type="text/css" href="fonts.css">
<script type="text/javascript" src="javascripts/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="banner.css" />
<script type="text/javascript" src="banner.js" ></script>
</head>

<body>
<div class="container">
	<div class="container-header container">
		<div class="tolltip">
			<div class="tolltip-desc w12 left"> This is iron art website</div>
			<div class="tolltip-call-now ml12 last">
				<p class="tolltip-call-now"> <span class="call-now">Call Now</span> <span class="phone">1-800-123-1234</span> </p>
			</div>
		</div>
		<div class="menu-style">
			<div class="menu right"> 
				
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contacts</a></li>
				</ul> 
				
			</div>
			<div class="logo w7 mr16 ml1"></div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="container-slideshow container">
		<div class="slideshow">
			<div class="page-slideshow">
				<div class="banner">
					<div class="scroll">
						<?php
						
							$dir = './images/banner1';
							$allowed_type = array('jpg','jpeg','png','gif');
							
							
							$d = dir($dir);
							$pics_len=0;
							while( $f = $d->read() ){
								$file_type = end(explode('.',$f));
								if( !in_array(strtolower($file_type),$allowed_type) ) continue;

								$file_name = substr($f,0,-strlen($file_type)-1);
								$desc_path = "$dir/$file_name.txt";

								//$desc_text = file_exists($desc_path) ? file_get_contents($desc_path) : ""; // remove for dummies
								if( file_exists($desc_path) ){
									$desc_text = file_get_contents($desc_path);
									$desc_html = "<div class='desc'>$desc_text</div>"; // div.desc have padding and visible even its free.
								}else{
									$desc_html = "";
								}

								echo "<div>$desc_html<img src='$dir/$f' /></div>";
								$pics_len ++;
							}
					
						?>
					</div>
				</div>
				<div class="li-btn">
					<ul class="btn">
						<?php
							for($i=0;$i<$pics_len;$i++) echo '<li></li>';
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-gallery-pic container">
		<div class="gallery-pic">
			<div class="gallery-pic-title"></div>
			<div class="gallery-pic-slider">
				<div class="left-botton w1 left "></div>
				<div class="slider-page w22 left "></div>
				<div class="right-botton ml23 last"></div>
				<div class="clear"></div>
			</div>
			<div class="gallery-pic-visit-gallery"></div>
		</div>
	</div>
	<div class="container-content container">
		<div class="content-left w18 left">
			<div class="welcome"></div>
			<div class="company-profile">
				<div class="company-profile-title"></div>
				<div class="company-profile-top">
					<div class="company-profile-top-1 w9 left"></div>
					<div class="company-profile-top-2 ml9 last"></div>
				</div>
				<div class="company-profile-bottom">
					<div class="company-profile-bottom-1 w9 left"></div>
					<div class="company-profile-bottom-2 ml9 last"></div>
				</div>
			</div>
		</div>
		<div class="content-right ml18 last">
			<div class="sections-list"></div>
			<div class="news-letter"></div>
		</div>
	</div>
	<div class="container-footer container">
		<div class="footer-top">
			<div class="footer-quick-links w8 left"></div>
			<div class="footer-about-us w9 left"></div>
			<div class="follow-us ml17 last"></div>
		</div>
		<div class="footer-bottom"></div>
	</div>
</div>
</body>
</html>
