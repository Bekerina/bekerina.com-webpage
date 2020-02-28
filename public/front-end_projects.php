<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bekerina is portfolio of Karolina Bekerytė, a graphic designer, illustrator, web designer and front-end developer.">
    <meta name="keywords" content="web de, website, logo design, graphic design, website design, web development, graphic designer, web page, brochure design, webdesign, poster, illustrations, digital art, art direction, branding, professional, designer, packaging, UI/UX, advertising, computer animation, drawing, editional design, icon design, pattern, motion, programming, front-end, back-end, retouching, product design, portfolio, Vilnius, Lithuania">
    <meta name="author" content="Karolina Bekerytė">
    <link rel="apple-touch-icon" sizes="57x57" href="../app/images/favicon.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../app/images/favicon.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../app/images/favicon.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../app/images/favicon.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../app/images/favicon.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../app/images/favicon.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../app/images/favicon.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../app/images/favicon.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../app/images/favicon.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../app/images/favicon.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../app/images/favicon.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../app/images/favicon.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../app/images/favicon.ico/favicon-16x16.png">
    <link rel="manifest" href="../app/images/favicon.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<title>Front-end || Bekerina</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="../app/styles/front_end_projects_style.css" rel="stylesheet" type="text/css">
	<link href="../app/styles/menu.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!--START smooth page transition-->
	<script>
	   document.body.className = 'fade';
	</script> 
    <!--END smooth page transition-->
	<header>
		<div id="container-nav">
			<div class="bekerina-logo">
				<a href="../public/index.php#showcase"><img alt="Bekerina logotype" src="../app/images/Bekerina_design-logo.svg" title="Bekerina"></a>
			</div>
			<div class="menu-wrap-desktop">
				<ul>
					<li>
						<a href="../public/index.php#showcase">home</a>
					</li>
					<li>
						<a href="../public/index.php#social-media">about me</a>
					</li>
					<li class="current">
						<a href="../public/index.php#projects">projects</a>
					</li>
					<li>
						<a href="../public/index.php#contacts">let's talk</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="menu-wrap-mobile">
			<input class="toggler" type="checkbox">
			<div class="hamburger">
				<div></div>
			</div>
			<div class="menu">
				<div>
					<div>
						<ul>
							<li>
								<a href="../public/index.php#showcase">home</a>
							</li>
							<li>
								<a href="../public/index.php#social-media">about</a>
							</li>
							<li>
								<a href="../public/index.php#projects">projects</a>
							</li>
							<li>
								<a href="../public/index.php#contacts">let's talk</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="fe-project">
		<div class="container">
			<a>
			<div class="container-design" id="photo-of-design-1"></div></a>
			<div class="text-align">
				<p>This web page is my firsrt work. It is created with html, css and JavaScript. So, look around!</p>
			</div>
		</div>
		<div class="more-soon-text container">
			more coming soon...
		</div>
	</section>
    <button name="up to top" id="btnUp" onclick="topFunction();"><i class="fas fa-angle-double-up"></i></button>
    <?php 
    include('../app/views/footer.php');
    ?>
    <!--START smooth page transition-->
	<script>
	document.addEventListener("DOMContentLoaded", function(e) {
	   document.body.classList.remove('fade');
	});
	</script>
    <!--END smooth page transition-->
    
	<script src="../app/js/main.js">
	</script>
</body>