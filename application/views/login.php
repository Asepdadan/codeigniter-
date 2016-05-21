

<html>
<head>
<title>CodeIgniter : Login Facebook via Oauth 2.0</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<div id="login">
<h2>CodeIgniter : Login Facebook via Oauth 2.0</h2>
<?php echo "<a href='$login_url'><img class='fb' src=".base_url()."images/fb.png".">LOGIN</a>"; ?>
</div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.5&appId=774877882643146";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>
</body>
</html>

