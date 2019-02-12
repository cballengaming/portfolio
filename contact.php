<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','chrisballen86@gmail.com');
	define('MESSAGE_SUBJECT','Thank You for Viewing My Portfolio');
	define('REPLY_TO', 'callen@cballendesigns.com');
	define('FROM_ADDRESS', '');
	define('REDIRECT_URL', 'http://cballendesigns.com/index.html');
	
	require_once('validate.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no,initial-scale=1">
<meta name="description" content="Online Portfolio of Chris Allen, a graphic designer and web developer in Allen, Texas focused on web design, web development, user experience, and user interface. I use the latest techniques to produce creative and effective websites utilizing  HTML5, CSS3, JavaScript, jQuery, PHP and MySQL.">
<meta name="keywords" content="HTML5, CSS3, JavaScript, jQuery, PHP, MySQL, web development, web developer, web design, PHP development, mobile web development, html5 mobile websites, responsive, responsive web design">
<meta name="author" content="Chris Allen, Web Developer">
<title>Chris Allen | Web Developer | Allen, TX</title>
<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.css">
<link rel="stylesheet" href="css/style.css"/>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<!-- google -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66858987-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
<header>
    	<img class="logo" src="images/newLogo.png" alt="Chris Allen's Logo" /><br>
         <p id="phoneContact">940.297.5346</p>
        <a id="emailContact" href="mailto:chrisballen86@gmail.com">chrisballen86@gmail.com</a>
        <nav>
			<ul>
  				<li><a href="index.html">Portfolio</a></li>
  				<li><a href="about.html">About</a></li>
  				<li><a class="current" href="contact.php">Contact</a></li>
			</ul>
		</nav>
        <div class="social">  
			<a class="soIcon"  href="mailto:chrisballen86@gmail.com" target="_top"> <img src=
            "images/social/48x48/message_48x48.png" alt="Email icon"></a>
			<a class="soIcon"  href="https://www.linkedin.com/pub/christopher-allen/4a/452/289" target="_blank"> <img src=
            "images/social/48x48/linkedIn_48x48.png" alt="Linkedin icon"></a> 
		</div> <!-- end div social -->
    </header>

<div class="container">
    <form id="feedback" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal" role="form">
    <div class="form-group">
    <label class="control-label col-sm-2" for="name">Your Name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" value="<?php echo @$name ?>" placeholder="Enter name here">
    </div>
     <?php echo @$name_error; ?>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" value="<?php echo @$email ?>" placeholder="Enter email">
    </div>
    <?php echo @$email_error; ?>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="message">Message:</label>
    <div class="col-sm-10"> 
      <textarea class="form-control" rows="5" id="message" placeholder="Enter message here"></textarea>
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

</div><!-- end contianer -->
 <div id="empty" class="empty">
    </div><!-- end div empty -->
<footer id="contactFooter" class="phone tablet desktop">
	<div class="socialSm">  
			<a class="soIcon"  href="mailto:chrisballen86@gmail.com" target="_top"> <img src=
            "images/social/48x48/message_48x48.png" alt="Email icon"></a>
			<a class="soIcon"  href="https://www.linkedin.com/pub/christopher-allen/4a/452/289" target="_blank"> <img src=
            "images/social/48x48/linkedIn_48x48.png" alt="Linkedin icon"></a> 
		</div> <!-- end div social -->
        <p id="disclaimer"><span class="site">cballendesigns.com</span> Copyright 2015&copy;</p>
</footer><!-- end footer for cell phones -->

</div> <!-- end div id footContain -->
</body>
<script>
	$('#feedback').validate();
</script>

</html>