<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo Asset::css('bootstrap.css');?>
    <?php echo Asset::css('bootstrap-theme.css');?>

    <title>会員情報</title>

</head>
<body>

    Id :<?php echo $id; ?><br>
    Name <?php echo $name; ?><br>
    Email :<?php echo $email; ?><br>
    password :<?php echo $password; ?><br>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<php echo Asset::js('bootstrap.js');?>

</body>
</html>