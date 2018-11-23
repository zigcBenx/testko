


<div class="border border-light p-5">

<?php if(validation_errors()): //Check if there are any errors ?>
	<div class="alert alert-warning"><?php echo validation_errors(); ?></div>
<?php endif; ?>

<?php echo form_open('users/login'); ?>

	<div class="row">

		<div class="col-md-5">
			<p class="h4 mb-4 text-center"><?= $title; ?></p>
			<!-- Material input -->
			<div class="md-form">
			  <i class="fa fa-user prefix"></i>
			  <input type="text" name="username" id="username" class="form-control">
			  <label for="username">Uporabniško ime</label>
			</div>

			<div class="md-form">
			  <i class="fa fa-lock prefix"></i>
			  <input type="password" name="password" id="password" class="form-control validate">
			  <label for="password">Geslo</label>
			</div>
			<!-- Sign in button -->
			<button class="btn btn-info btn-block my-4" type="submit">Prijava</button>
			
			<!-- Register -->
			<p>Še nisi naš?
			    <a href="<?php base_url(); ?>cregister">Postani član</a>
			</p>
		</div>

		<div class="col-md-2" style="margin-top: 12%;"><h3>ALI</h3></div>

		<div class="col-md-5">
			Prijava s socialnim omrežjem
		</div>

	</div>
	<?php echo form_close(); ?>
</div>