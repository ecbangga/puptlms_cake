
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="< base_url() ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="< base_url() ?>/public/font-awesome/css/all.css">
    <link rel="stylesheet" href="< base_url() ?>/public/css/style.css">
    <link rel="stylesheet" href="< base_url() ?>/public/css/login.css"> -->
    <?=$this->Html->css(['bootstrap.min','style','login','all'],['block' => true]); ?>
	<div class="form-container sign-up-container">
		<form action="" method="post">
            <h1>Create Account</h1>
			<div class="social-container">
                    <a href="#" class="social"><?= $part->active ? $this->Icon->faIcon('fa-facebook-f">') : "" ?></a>
                    <a href="#" class="social"><?= $part->active ? $this->Icon->faIcon('fa-google-plus-g') : "" ?></a>
                    <a href="#" class="social"><?= $part->active ? $this->Icon->faIcon('fa-linkedin-in') : "" ?></a>
			</div>
			<span>or use your email for registration</span>

			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post" action="">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fa-linkedin-in"></i></a>
			</div>
			<span><h3 class="text-center"><i class="fa-unlock-alt"></i> User Login</h3></span>
      <br>
      <!-- ?php if(isset($_SESSION['error_login'])): ?> -->
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <!-- <= $_SESSION['error_login']; ?> -->
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <!-- <php endif; ?> -->

      <form class="form-container sign-in-container">
        <div class="form-group">
          <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username">
        </div>

        <div class="form-group">
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
        </div>

        <div class="custom-control custom-checkbox mb-3">
          <input type="checkbox" class="custom-control-input" id="customCheck1">
          <label class="custom-control-label" for="customCheck1">Remember password</label>
        </div>
        
        <button class="btn btn-lg btn-dark btn-block text-uppercase" type="submit">
        <a href=<?=$this->Url->build(['controller'=>'home','action'=>'index']);?>>Sign in</a></button>
      </form>

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Library Management System</h1>
        <br>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Dont Have an Account?!</h1>
				<p>Click Sign Up Now</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<br>
<?=$this->Html->script(['jquery-3.3.1.slim.min','jquery-3.2.1.min','popper.min'],['block' => true]); ?>
<?=$this->Html->script(['bootstrap.min', 'myAlerts','sweetalert2@9','login'],['block' => true]); ?>