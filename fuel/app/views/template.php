<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,minimum-scale=1">

    <?php echo Asset::css('bootstrap.min.css');?>

<title><?php echo $title; ?></title>
</head>
<body>
<header>
    <?php echo $header; ?>
</header>
<div id="content">
    <?php echo $content; ?>
</div>
<footer>
    <?php echo $footer; ?>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php echo Asset::js('bootstrap.min.js');?>
</body>
</html>