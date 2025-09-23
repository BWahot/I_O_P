<?php
class forms {
    public function signup($conf, $ObjFxns) {
        $error= $ObjFxns->getmessage("errors");
        print $ObjFxns->getmessage("message");
?>
<h1>Sign Up</h1>
<form action="" method="post" autocomplete="off">
  <div class="mb-3">
    <label for="fullname" class="form-label">Fullname</label>
    <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="nameHelp" value="<?php echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : ''; ?>" placeholder="Enter your fullname" required>
    <?php print (isset($error['name_error']) ? "<div class='alert alert-danger' id='nameHelp'>".$error['name_error']."</div>" : ""); ?>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" placeholder="Enter your email" required>
<?php print (isset($error['mail_error']) ? "<div class='alert alert-danger' id='emailHelp'>".$error['mail_error']."</div>" : ""); ?>
<?php print (isset($error['domain_error']) ? "<div class='alert alert-danger' id='emailHelp'>".$error['domain_error']."</div>" : ""); ?>    
</div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''; ?>" placeholder="Enter your password" required>
    <?php print (isset($error['password_error']) ? "<div class='alert alert-danger' id='passwordHelp'>".$error['password_error']."</div>" : ""); ?>
  </div>
  <?php $this->submit_button("Sign Up", "signup") ?> <a href="signin.php">Already have an account? Sign In</a>
</form>

<?php
    }

    private function submit_button($value, $name){
        ?>
        <button type="submit" class="btn btn-primary" name="<?php echo $name; ?>"><?php echo $value; ?></button>
        <?php
    }
    public function sign_in() {
        ?>
        <h1>Sign In</h1>
       <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">

  </div>
  <?php $this->submit_button("Sign In", "signin") ?> <a href="signup.php">Don't have an account? Sign Up</a>
</form>
        <?php
    }
}