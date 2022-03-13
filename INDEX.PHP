<!DOCTYPE html>
<html>
	<head>
		<script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-4529508631166774",
			enable_page_level_ads: true
		  });
		</script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Webslesson Demo | PHP Registration with Email Verification using OTP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="asset/js/jquery.js"></script>
    	<script src="asset/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
		<style>
		    /* Remove the navbar's default margin-bottom and rounded borders */ 
		    .navbar {
		      margin-bottom: 0;
		      border-radius: 0;
		    }
		    
		    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		    .row.content {height: 450px}
		    
		    /* Set gray background color and 100% height */
		    .sidenav {
		      padding-top: 20px;
		      background-color: #f1f1f1;
		      height: 100%;
		    }
		    
		    /* Set black background color, white text and some padding */
		    footer {
		      background-color: #555;
		      color: white;
		      padding: 15px;
		    }
		    
		    /* On small screens, set height to 'auto' for sidenav and grid */
		    @media screen and (max-width: 767px) {
		      .sidenav {
		        height: auto;
		        padding: 15px;
		      }
		      .row.content {height:auto;} 
		    }
	  	</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
		      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>                        
		      		</button>
		      		<a class="navbar-brand" href="http://demo.webslesson.info/">Webslesson Demo</a>
		    	</div>
		    	<div class="collapse navbar-collapse" id="myNavbar">
			      	<ul class="nav navbar-nav">
				        <li class="active"><a href="http://demo.webslesson.info/">Home</a></li>
				        <li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorial
					        <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					          	<li><a href='https://www.webslesson.info/search/label/php'>PHP</a></li>
								<li><a href='https://www.webslesson.info/search/label/mysql'>MySql</a></li>
								<li><a href='https://www.webslesson.info/search/label/JQuery'>JQuery</a></li>
								<li><a href='https://www.webslesson.info/search/label/Ajax'>Ajax</a></li>
								<li><a href='https://www.webslesson.info/search/label/Codeigniter'>Codeigniter</a></li>
								<li><a href='https://www.webslesson.info/search/label/AngularJS'>AngularJS</a></li>
								<li><a href='https://www.webslesson.info/search/label/laravel'>Laravel</a></li>
					        </ul>
				        </li>
				        <li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools
					        <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					          	<li><a href='https://www.webslesson.info/p/online-slug-generator-tool.html' title='Online Slug Generator'>Online Slug Generator</a></li>
								<li><a href='https://www.webslesson.info/p/online-code-formatter.html' title='Online Source Code Formatter'>Online Source Code Formatter</a></li>
								<li><a href='https://www.webslesson.info/p/online-html-entities-encoder-and-decoder.html' title='HTML Encoder / Decoder'>HTML Encoder / Decoder</a></li>
								<li><a href='https://www.webslesson.info/2018/03/count-character-count-words-online-convert-case.html' title='Convert Case & Count Character'>Convert Case & Count Character</a></li>
					        </ul>
				        </li>
				        <li><a href='https://www.webslesson.info/p/about-us.html'>About Us</a></li>
						<li><a href='https://www.webslesson.info/p/write-for-us-publish-guest-post.html'>Write for Us</a></li>
						<li><a href='https://www.webslesson.info/p/privacy-policy.html'>Privacy Policy</a></li>
						<li><a href='https://www.webslesson.info/p/terms-conditions.html'>Terms and Condition</a></li>
						<li><a href='https://www.webslesson.info/p/contact-us.html'>Contact Me</a></li>
			      	</ul>
		    	</div>
		  	</div>
		</nav>
		<div class="container-fluid text-center">    
  			<div class="row content">
  				<div class="col-sm-2">
  					<div class="well" style="margin-top:30px;">
  						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- webslesson_sidebarrightsec_AdSense1_1x1_as -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-4529508631166774"
						     data-ad-host="ca-host-pub-1556223355139109"
						     data-ad-host-channel="L0001"
						     data-ad-slot="7056856732"
						     data-ad-format="auto"
						     data-full-width-responsive="true"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
  					</div>
  				</div>
  				<div class="col-sm-8 text-left">
  					<br />
  					<h3 align="center">Back to Tutorial - <a href="https://www.webslesson.info/2020/06/php-registration-with-email-verification-using-otp.html">PHP Registration with Email Verification using OTP</a></h3>
					<br />
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Registration</h3>
						</div>
						<div class="panel-body">
														<form method="post">
								<div class="form-group">
									<label>Enter Your Name</label>
									<input type="text" name="user_name" class="form-control" />
																	</div>
								<div class="form-group">
									<label>Enter Your Email</label>
									<input type="text" name="user_email" class="form-control" />
																	</div>
								<div class="form-group">
									<label>Enter Your Password</label>
									<input type="password" name="user_password" class="form-control" />
																	</div>
								<div class="form-group">
									<input type="submit" name="register" class="btn btn-success" value="Click to Register" />&nbsp;&nbsp;&nbsp;<a href="resend_email_otp.php" class="btn btn-default">Resend OTP</a>&nbsp;&nbsp;&nbsp;
									<a href="login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<br />
					<br />
					<a href="https://www.webslesson.info/p/source-code-for-php-login-registration.html">Download Source Code</a>
								<br />
								<br />
  				</div>
  				<div class="col-sm-2">
  					
  				</div>
  			</div>
  		</div>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-87739877-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<br />
		<br />
	</body>
</html>
