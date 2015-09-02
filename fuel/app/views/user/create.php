<div class="container">
    <div class="row">

        <h3>会員登録</h3>

        <?php echo Form::open(array('method' => 'post','class' => 'form-horizontal'));?>

        <?php if (isset($error)): ?>
            <p class="alert alert-warning"><?php echo $error ?></p>
        <?php endif ?>

        <div class="form-group">
            <label for="form_username" class="col-sm-4 control-label">ユーザ名</label>
            <div class="col-sm-offset-4 col-sm-8">
                <?php echo Form::input('username', null, array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="form_password" class="col-sm-4 control-label">パスワード</label>
            <div class="col-sm-offset-4 col-sm-8">
                <?php echo Form::password('password', null, array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="form_mail" class="col-sm-4 control-label">メールアドレス</label>
            <div class="col-sm-offset-4 col-sm-8">
                <?php echo Form::input('mail', null, array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="form_gender" class="col-sm-4 control-label">性別</label>
            <div class="radio-inline">
                <?php echo Form::radio('gender', '0', true);?>
                <?php echo Form::label('男性', 'gender');?>
            </div>
            <div class="radio-inline">
                <?php echo Form::radio('gender', '1');?>
                <?php echo Form::label('女性', 'gender');?>
            </div>
        </div>

        <div class="form-group">
            <label for="form_age" class="col-sm-4 control-label">年齢</label>
            <div class="col-sm-offset-4 col-sm-8">
                <?php echo Form::input('age', null, array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <?php echo Form::submit('submit', '登録', array('class' => 'btn btn-lg btn-primary btn-block')); ?>
            </div>
        </div>
        <?php echo Form::close(); ?>

        <?php echo Form::open(array('action' => '/', 'method' => 'get', 'class' => 'form-horizontal')); ?>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <?php echo Form::submit('submit', 'やめる', array('class' => 'btn btn-lg btn-block btn-success')); ?>
            </div>
        </div>
        <?php echo Form::close(); ?>
    </div>
</div>