<?php
    require __DIR__ . '/../app/src/app.php';
?>

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
	<title>Bekerina Design</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="../app/styles/main-styles.css" rel="stylesheet" type="text/css">
	<link href="../app/styles/menu.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/0db246d252.js">
	</script>
</head>
<body>
	<!--START smooth page transition-->
	<script>
	   document.body.className = 'fade';
	</script> 
    <!--END smooth page transition-->
    <div class="loader">
		<div class="block-elements">
			<img alt="Loding..." src="../app/images/ball-triangle.svg">
			<p>wait for it...</p>
		</div>
	</div>
    
    <?php 
    include('../app/views/header.php');
    include('../app/views/content.php');
    include('../app/views/footer.php');
    ?>
    
    <!--START smooth page transition-->
	<script>
	document.addEventListener("DOMContentLoaded", function(e) {
	   document.body.classList.remove('fade');
	});
	</script>
    <!--END smooth page transition-->
	 
	<script src="../app/js/main.js"></script>
</body>
</html>