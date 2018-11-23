

<div class="border border-light p-5">
<?php echo validation_errors(); ?>
<?php echo form_open('users/update'); ?>


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
			  <i class="fa fa-folder prefix"></i>
			  <input type="file" name="avatar" id="avatar" class="custom-file-input">
			  <label for="avatar">Naloži profilko</label>
			</div>
			
			<div class="md-form">
				<i class="fa fa-graduation-cap"></i>
				<select class="browser-default custom-select">
					<option value="1">Učenec</option>
					<option value="2">Dijak</option>
					<option value="3">Študent</option>
				</select>
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
			<button class="btn btn-info btn-block my-4" type="submit">Posodobi račun</button>


<?php echo form_close(); ?>
</div>