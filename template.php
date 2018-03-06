<html>

<head>
    <title>M2L</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf8" />
</head>
<?php
    require "view/header.php";
    echo flash();
	echo $content;
    require "view/footer.php";
?>
</body>
