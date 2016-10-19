
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<link rel="stylesheet" href="./css/app.css" />
<link rel="stylesheet" href="../fonts/fontello.css" />
<body background="../images/login-background.png" style="background-size:100%;background-color:#383838;background-repeat:no-repeat;margin:0px;">
  <div style="width:400px;height:400px;position:absolute;top:10%;left:35%;background-color:#e0e0e0;border:1px solid black;box-shadow:6px 6px 0px 0px #303030;">
    <div style="position:relative;width:100%;float:left;text-align:center;margin-bottom:25px;">
      <center>
        <img src="../images/pai-logo.png" style="position:relative;width:210px;margin-top:25px;margin-bottom:-5px;"></img><br />
        <a style="font-size:15px;font-family:verdana;">Request and Review System</a>
      </center>
    </div>
    <div style="position:relative;width:100%;float:left;text-align:center;">
      <center>
        <form method="POST" action="{{ url('/dashboard') }}">
          <div style="width:330px;background-color:white;padding:2px;height:40px;border:1px solid black;margin-bottom:20px;">
            <div style="height:100%;width:40px;float:left;background-color:white;font-size:25px;line-height:35px;"><i class="icon-mail"></i></div>
            <input style="width:280px;height:100%;font-size:23px;line-height:23px;margin-left:0px;border:none;float:left;outline:none;" type="text" name="email" value="" placeholder="E-mail.."></input>
          </div>
          <div style="width:330px;background-color:white;padding:2px;height:40px;border:1px solid black;margin-bottom:20px;">
            <div style="height:100%;width:40px;float:left;background-color:white;font-size:25px;line-height:35px;"><i class="icon-key"></i></div>
            <input style="width:280px;height:100%;font-size:23px;line-height:23px;margin-left:0px;border:none;float:left;outline:none;" type="text" name="password" value="" placeholder="Password.."></input>
          </div>
          <input type="submit" name="submitLogin" value="Login" style="width:140px;height:40px;background-color:#779c4c;color:white;font-family:verdana;font-size:23px;border:1px solid black;"></input>
          <div style="width:100%;">
            <a href="forgot.php" style="float:left;margin:15px;">Forgot Password?</a><a href="new-user-request.php" style="float:right;margin:15px;">Request Access</a>
          </div>
        </form>
      </center>
    </div>

  </div>
</body>
</html>
