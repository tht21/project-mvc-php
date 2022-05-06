<?php 
 $nameErr=$emailErr=$passwordErr=$phoneErr=null;
 $userName=$email=$password=$phone=null;
	if ($_SERVER['REQUEST_METHOD']=="POST") {
      $userName=$_REQUEST["userName"];
      $email=$_REQUEST["email"];
      $password=$_REQUEST["password"];
      $phone=$_REQUEST["phone"];
      if (empty($userName)) {
        $nameErr = " * Tên đăng ky không được để trống !";
      } if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $emailErr = " * Nhập email sai (xxx@gmail.com) !";
      } if (empty($password)) {
        $passwordErr = " * Mật khẩu không được để trống !";
      } if (empty($phone)) {
        $phoneErr = " * Số điện thoại  không được để trống !";
      }
}
	?>
<div class="signup-form">
    <!--sign up form-->
    <h2>New User Signup!</h2>
    <form action="#" method="post" >
        <input name="userName" type="text" placeholder="Name" value="<?php echo $userName ?>" />
        <span class="error"> <?php echo $nameErr; ?></span>
        <input name =" email"type="email" placeholder="Email Address" value="<?php echo $email?>" />
        <span class="error"> <?php echo $emailErr; ?></span>
        <input  name ="password" type="password" placeholder="Password"/>
        <span class="error"> <?php echo $passwordErr; ?></span>
        <input name="phone" type="number" placeholder="Phone" value="<?php echo $phone ?>"/>
        <span class="error"> <?php echo $phoneErr."<br>"; ?></span>
        <button  type="submit" class="btn btn-default">Signup</button>
    </form>
</div>
<!--/sign up form-->