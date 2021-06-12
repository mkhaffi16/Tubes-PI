<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Kicik-PI | Login</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>/assets/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  text-align: center;
  padding: 20px;
  background: linear-gradient(to bottom, #057d2d 50%, #b2c20a 50% );
}

.login {
  border-radius: 25px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 450px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #8bc34a;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #057d2d;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.login input + i.fa {
  color: #ffffff;
  position: absolute;
  margin-top: -46px;
  margin-left: 7.5px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
  outline: none;
  color: #057d2d;
  border-color: #057d2d;
  border-left-width: 55px;
  border-top-width: 3px;
  border-bottom-width: 3px;
  border-right-width: 3px;
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}
.login button {
  width: 75%;
  height: 100%;
  padding: 10px 10px;
  background: #057d2d;
  color: #fff;
  display: block;
  border: none;
  margin: 10px 50px;
  position: relative;
  max-height: 120px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.5s ease-out;
  border-radius: 20px;
}
.login button:hover{
  background-color: #b2c20a;
  color: #000000;
}
.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
}
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="wrapper">
  <form action="<?php echo base_url('login/proses_login')?>" class="login" method="post">
    <h1 style=" margin: 30px 0px; color: #057d2d; font-family: sans-serif; text-align: center; font-size: 32px"><b>Selamat Datang</b></h1>
  
    <?php if($this->session->flashdata('msg')){ ?>
      <div class="alert alert-warning alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Warning!</strong><br> <?php echo $this->session->flashdata('msg');?>
     </div>
    <?php } ?>
    <input style="color: #057d2d; font-family: fantasy; font-size: 14px" type="text" name="username" placeholder="Username" autofocus required=""/>

    <i class="fa fa-user fa-2x" style="padding: 2px; "></i>
    <input style="color: #057d2d; font-family: fantasy; font-size: 14px" type="password" name="password" placeholder="Password" required=""/>

    <i class="fa fa-unlock-alt fa-2x" style="padding: 2px; "></i>
    <?php if(isset($token_generate)){ ?>
    <input type="hidden" name="token" value="<?php echo $token_generate ?>">
    <?php }else {
      redirect(base_url());
    }?>
    <!-- <a href="#">Forgot your password?</a> -->
    <button style="margin-top: 50px">
      <!-- <i class="spinner"></i> -->
      <span class="state" style="font-family: fantasy; font-size: 18px"> S I G N &nbsp; &nbsp;I N</span>
    </button>
    <p style="font-size: 13px; color: #000000; font-family: sans-serif; text-align: center; margin-top: 50px">Tidak Memiliki Akun?</p>
    <a style="font-size: 16px; color: #b2c20a; font-family: helvetica; text-align: center;" href="<?php echo site_url('login/register')?>"><B>Daftar</B></a>
  </form>
  <!-- <footer><a target="blank" href="http://unsadacoder.or.id">UnsadaCoder.or.id</a></footer> -->
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html>
