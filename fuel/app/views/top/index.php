<div class="container">
        <nav class="navbar navbar-default ">
            <div class="container-fluid">
                <!-- ヘッダー部分 ================ -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">メニュー</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_target">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="nav_target">
                    <ul class="nav navbar-nav">
                        <li><a href="#">出会う</a></li>
                        <li><a href="#">メッセージ</a></li>
                        <li><a href="#">お知らせ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- リンクのみ -->
                        <li><a href="#">登録情報</a></li>
                        <li><?php echo Html::anchor("logout", "ログアウト"); ?></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="row">

<h3>最新登録ユーザー</h3>
<?php foreach ($entities as $entity) {?>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="http://placehold.it/160x110" alt="">
            <div class="caption">
                <h3><?php echo $entity['username']?></h3>
                <p>id:<?php echo $entity['id']?></p>
                <p>age:<?php echo $entity['age']?></p>
            </div>
        </div>
    </div>
<?php }?>



</div>
