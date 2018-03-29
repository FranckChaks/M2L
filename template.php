<html>

<head>
    <title>M2L</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- BOOTSTRAP STYLES-->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.css" rel="stylesheet" type='text/css' />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf8" />
</head>
<body>
<?php
    require "view/header.php";
    echo flash();
	echo $content;
    require "view/footer.php";
?>
</body>
</html>
