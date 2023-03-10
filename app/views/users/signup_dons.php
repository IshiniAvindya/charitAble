<?php require APPROOT . '/views/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?> /css/donor/style.css">

<body>
<div class="container">
<div class="img-container">
  <div class="logo">
    <img src="../public/img/img_dons/logo.svg" alt="logo">
  </div>
  <div class="img1">
<img src="../public/img/img_dons/signup.svg">
</div>
</div>
<div class="form-container">
<form action="<?php echo URLROOT; ?>/users/signup_dons" autocomplete="off" method="POST">
<div class="heading">
<h2>SignUp</h2>
</div>

<div class="form">
<div class="input">
<input type="text" name="name"  minlength="4" class="input-field" value = "<?php echo $data['name']; ?>" autocomplete="off"/>
<label>Name</label>
<div class="warn"><?php echo $data['name_err']; ?></div>
</div>


<div class="input">
<input type="email" name="email" minlength="4" class="input-field" value = "<?php echo $data['email']; ?>" autocomplete="off"/>
<label>Email</label>
<div class="warn"><?php echo $data['email_err']; ?></div>
</div>

<div class="input">
<input type="text" name="tel_no" minlength="4" class="input-field" value = "<?php echo $data['tel_no']; ?>" autocomplete="off"/>
<label>Telephone Number</label>
<div class="warn"><?php echo $data['tel_no_err']; ?></div>
</div>

<div class="input">
<input type="text" name="address" minlength="4" class="input-field" value = "<?php echo $data['address']; ?>" autocomplete="off"/>
<label>Address</label>
<div class="warn"><?php echo $data['address_err']; ?></div>
</div>

<div class="input">
<input type="password" name="password" minlength="4" class="input-field <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value = "<?php echo $data['password']; ?>" autocomplete="off"/>
<label>Create Password</label>
<div class="warn"><?php echo $data['password_err']; ?></div>
</div>

<div class="input">
<input type="password" name="confirm_password" minlength="4" class="input-field <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value = "<?php echo $data['confirm_password']; ?>" autocomplete="off"/>
<label>Confirm Password</label>
<div class="warn"><?php echo $data['confirm_password_err']; ?></div>
</div>

<input type="submit" value="Create Account" class="btn">
<p class="text">Already have an account?
<a href="<?php echo URLROOT; ?>/users/login">Sign In</a>
</p>
</div>

</form>

</div>
</div>

<script src="<?php echo URLROOT; ?>/js/donor/main.js"></script>

<?php require APPROOT . '/views/inc/footer.php'; ?>