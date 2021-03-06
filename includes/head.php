<title>North Science Solutions</title>

<link rel="icon" href="img/favicon.png">

<!-- META -->
<meta charset="UTF-8">
<meta name="description" content="North Science Solutions">
<meta name="keywords" content="nss,northsciencesolutions,north,science">
<meta name="author" content="Ben Lorantfy, Thomas Tran, Ahmed Hussain">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<!-- Fonts -->
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

<!-- CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">

<!-- JS -->
<script src = "js/frameworks/jquery-1.11.2.min.js"></script>
<script src = "js/frameworks/jqease.js"></script> 	<!-- Easing for jquery's animate function -->
<script src = "js/frameworks/msgbox.js"></script> 	<!-- Used to show quick messages to the user (i.e. saved succesfully ) -->
<script src = "js/frameworks/postcall.js"></script> <!-- Used to call php functions from js more easily -->
<script src = "js/frameworks/maupload.js"></script> <!-- Used to upload images async -->
<script src = "js/frameworks/bootstrap.min.js"></script>
<script src = "js/frameworks/jquery.validate.min.js"></script>
<script src = "js/app.js"></script>

<!-- JS config -->
<script>
	App.isLogged = <?=$users->isLogged() ? "true" : "false"?>
</script>

<!-- JS entry point -->
<script src = "js/main.js"></script>

<!--
	HTML5 SHIV
	If IE and less than v9, include html5shiv to allow styling on html5 elements
-->
<!--[if lt IE 9]>
<script src="js/frameworks/html5shiv.min.js"></script>
<![endif]-->