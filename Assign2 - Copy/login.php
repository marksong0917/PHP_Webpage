<?php
$page_title = null;
$page_title = 'Login';
require_once('header.php'); ?>

<main class="login-form">
	<div class="cotainer">
        <div class="row justify-content-center">
        	<div class="col-md-8">
                <div class="card">
                    <div class="card-header">Log In</div>
                    <div class="card-body">
						<form method="post" action="validatePassword.php">
							<fieldset class="form-group">
								<label for="username" class="col-md-4 col-form-label text-md-right">E-Mail</label>
								<input name="username" required type="email" />
							</fieldset>
							<fieldset class="form-group">
								<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
								<input name="password" required type="password" />
							</fieldset>
							<button type="submit" class="btn btn-primary">Log In</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php require_once('footer.php'); ?>
