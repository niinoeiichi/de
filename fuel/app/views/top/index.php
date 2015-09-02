<html>
<head>
    <meta charset="utf-8">
    <title>Topページ</title>
</head>
<body>
<h1>世界最強出会い系トップページ</h1>
ようこそ

<h3>ログアウト</h3>

<?php echo Form::open(array('action' => '/logout','class' => 'form-horizontal'));?>

    <?php if (isset($error)): ?>
        <p class="alert alert-warning"><?php echo $error ?></p>
    <?php endif ?>
        <?php echo Form::hidden('username');?>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <?php echo Form::submit('submit', 'ログアウト', array('class' => 'btn btn-success'));?>
        </div>
    </div>
<?php echo Form::close();?>

<h3>ユーザ一覧</h3>
<?php foreach ($entities as $entity) {?>
<ul>
    <li>id:<?php echo $entity['id']?></li>
    <li>name:<?php echo $entity['username']?></li>
    <li>age:<?php echo $entity['age']?></li>
</ul>
<?php }?>


</body>
</html>
