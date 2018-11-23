<div class="border border-light p-5">
<?php if(validation_errors()): //Check if there are any errors ?>
	<div class="alert alert-warning"><?php echo validation_errors(); ?></div>
<?php endif; ?>
<?php echo form_open('users/register'); ?>
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
			  <i class="fa fa-envelope prefix"></i>
			  <input type="text" name="email" id="email" class="form-control">
			  <label for="email">E-pošta</label>
			</div>


			<div class="md-form">
			  <i class="fa fa-lock prefix"></i>
			  <input type="password" name="password" id="password" class="form-control">
			  <label for="password">Geslo</label>
			</div>

			<div class="md-form">
			  <i class="fa fa-unlock prefix"></i>
			  <input type="password" name="password2" id="password2" class="form-control">
			  <label for="password2">Ponovi geslo</label>
			</div>
			<!-- Sign in button -->
			<button class="btn btn-info btn-block my-4" type="submit">Registracija</button>

		</div>

		<div class="col-md-2" style="margin-top: 12%;"><h3>ALI</h3></div>

		<div class="col-md-5">
			Registracija s socialnim omrežjem
		</div>

	</div>
<?php echo form_close(); ?>
</div>