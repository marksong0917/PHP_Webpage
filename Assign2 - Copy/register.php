<?php 
$page_title = null;
$page_title = 'User Registration';
require_once('header.php'); ?>

<main class="login-form">
	<div class="cotainer">
        <div class="row justify-content-center">
        	<div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Sign-Up</div>
                    <div class="card-body">
						<form method="post" action="register-save.php">
							<fieldset class="form-group">
								<label for="username" class="col-md-4 col-form-label text-md-right">Email</label>
								<input name="username" required type="email" />
							</fieldset>
							<fieldset class="form-group">
								<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
								<input name="password" required type="password" />
							</fieldset>
							<fieldset class="form-group">
								<label for="confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
								<input name="confirm" required type="password" />
							</fieldset>
							<button type="submit" class="btn btn-primary">Sign-Up</button>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</main>



<?php require_once('footer.php'); ?>
