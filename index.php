<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<title>PORTFOLIO</title>
</head>
<body>

<!-- navbar -->

<header>
		<div class="sidebar">
			<div class="container">
		            <ul>
		                <li class="boxe" data-page="#home-page" id="home">Home</li>
		                <li class="boxe" data-page="#competences-page" id="competences">Competences</li>
		                <li class="boxe" data-page="#projets-page" id="projets">Projets</li>
		                <li class="boxe" data-page="#contact-page" id="contact">Contact</li>	
		            </ul>
			</div>
       </div>
</header>
<!-- CORPS DE LA PAGE --> 

<div class="filter" id="home-page"><?php include 'index2.php'; ?></div>
<div class="filter" id="competences-page"><?php include 'index3.php'; ?></div>
<div class="filter" id="projets-page"><?php include 'index4.php'; ?></div>
<div class="filter" id="contact-page"><?php include 'index5.php'; ?></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
<script src="../js/jquery.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>