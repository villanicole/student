<!DOCTYPE html>
<?php
	require_once 'session.php';
?>
<html lang = "eng">
	<head>
		<title>GC-OMS</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
	</head>
<body>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->
<!-------------------SIDEBAR------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR------------------>

		<div id = "sidecontent" class = "well pull-right">
		
			<div class = "alert alert-success"><center><h3>OUR VISION</h3></center></div>
			<h4 style = "text-indent:50px;">The College of Computer Studies shall produce Information Technology and Computer Science professionals equipped with knowledge, skills, strong moral values, well-developed personality, and exceptional abilities, thus becoming the preferred and prestigious source of services and manpower..</h4>
			<br />
			<div class = "alert alert-success"><center><h3>OUR MISSION</h3></center></div>
			<h4 style = "text-indent:50px;">The College of Computer Studies shall be the Center of Excellence in Information Technology and Computer Science for providing professional and technological training, scientific and innovative, and relevant community service.</h4>
			<br />
			<div class = "alert alert-success"><center><h3>OUR GOAL</h3></center></div>
			<ol>
		<li><h4>Provide competent/quality instruction relevant to time and technology by developing, updating, and evaluating offered programs and curriculum continuously.</h4></li>
		<li><h4>Open, maintain and extend on new roads of research and discovery in the field of expertise, in emerging disciplines and in related interdisciplinary areas.</h4></li>
		<li><h4>Provide the faculty members and students with updated educational resources, training and study grants they need to keep pace, sustain, and update with developments in their field.</h4></li>
		<li><h4>Prepare our students in aspects that provide them a strong foundation for sustaining personal and professional development, enable them to build-up strong leadership and become responsible individuals and contributors towards the good of the community.</h4></li>
		<li><h4>Pursue beneficial industry linkages, maintain good relation, extend help and manpower to the country.</h4></li>
	</ol>
		<br /><br /><br />
		</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<nav class = "navbar-default" id = "footer">
		<label class = "navbar-brand pull-right">&copy; GC-OMS  <?php echo date('Y', strtotime('+8 HOURS'))?></label>
		<label class = "navbar-brand ">TeamCodePotato</label>
	</nav>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
</html>