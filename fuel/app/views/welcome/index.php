<div class="container">
	<div class="row">
		<?php echo Form::open(array('action' => '/login','method' => 'get','class' => 'form-horizontal'));?>

		<?php if (isset($error)): ?>
			<p class="alert alert-warning"><?php echo $error ?></p>
		<?php endif ?>
		<?php echo Form::hidden('username');?>
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<?php echo Form::submit('submit', 'ログイン', array('class' => 'btn btn-lg btn-block btn-success'));?>
			</div>
		</div>
		<?php echo Form::close();?>
		<br>
		<?php echo Form::open(array('action' => '/user/create','method' => 'get','class' => 'form-horizontal'));?>

		<?php if (isset($error)): ?>
			<p class="alert alert-warning"><?php echo $error ?></p>
		<?php endif ?>
		<?php echo Form::hidden('username');?>
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<?php echo Form::submit('submit', '新規登録', array('class' => 'btn btn-lg btn-block btn-success'));?>
			</div>
		</div>
		<?php echo Form::close();?>
	</div>
</div>
