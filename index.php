<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Skins for Simple Calendar Widget</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles 
    <link href="/css/bootstrap.min.css" rel="stylesheet">
	 -->
    <link href="/css/bootstrap-cyborg.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>	
	<link href="/css/bootstrap-responsive.min.css" rel="stylesheet">	
    <link href="/css/scw.css" rel="stylesheet">
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- 
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	Le fav and touch icons -->
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Skins <span class="hidden-phone">for Simple Calendar Widget</span></a>
          <div class="nav-collapse">
            <ul class="nav pull-left">
              <li class="active"><a href="#">List</a></li>
              <li><a href="#use">Usage</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="#create">Create</a></li>
            </ul>			
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

		<div class="row">
			<ul class="thumbnails">
				<? foreach(array(1,2,3,4,5) AS $i) { ?>
				<li class="span3">
					<div class="thumbnail">
						<img src="/skins/holo/preview.png" alt="Holo Skin">
						<div class="caption">
						  <h5>Holo</h5>
						  <p>Android 4.0 Styled skin with multiple events</p>
						  <p><small>Alex Gavrishev</small></p>
						  <p>
							<a href="#" class="btn btn-success">
								<i class="icon-briefcase icon-white"></i>
								Play Store
							</a>
							<a href="#" class="btn btn-primary">
								<i class="icon-download-alt icon-white"></i>
								Download
							</a>
						   </p>
						   <p>
							<a href="#" class="btn">
								<i class="icon-share-alt"></i>
								Website
							</a> 
							<a href="#" class="btn">
								<i class="icon-gift"></i>
								Donate
							</a>
						   </p>
						</div>
					</div>
				</li>
				<? } ?>
			</ul>
		</div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
