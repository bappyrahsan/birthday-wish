<!DOCTYPE html>
<html>
 <head>
     
 <meta property="og:url" content="<?php echo $url;?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Happy Birthday <?php echo" ".$r;?>"/>
<meta property="og:description" content="Many many happy returns of the day..."/>
<meta property="og:image" content="<?php echo $iurl; ?>" />
<meta property="og:image:type" content="image/png" />
 <meta property="og:image:width" content="1024" />
<meta property="og:image:height" content="574" />

 <meta name="description" content="Personal Birthday wishing system" />
 <meta name="author" content="Ohidur Rahman Bappy" />
<meta name="keywords" content="Wish your friend happy birthday" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../res/css/w3.css">

 <title>Happy Birthday</title>

</head>
 <body>
 <header class="w3-center w3-blue-grey">
<h2>Happy Birthday</h2>
<p class="w3-large"><i>@your favourite</i> <br />Bappy</p>
</header>


     <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<div>
	<a href="../">Go to Bappy's Blog</a>
</div>
<br /><hr />
<div class="w3-container w3-card">
<image src="<?php echo $iurl;?>" width="100%"/>
</div>
	
	
	<!-- Your share button code -->

<div class="w3-padding w3-center fb-share-button" data-href="<?php echo $url;?>" 
data-layout="button_count" data-size="small" 
data-mobile-iframe="true">
<a class="w3-btn w3-card-4 w3-indigo fb-xfbml-parse-ignore" target="_blank" 
href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $fburl;?>&amp;src=sdkpreparse">
Share</a>
</div>






<br />
<!--       -->
<div class="w3-padding w3-deep-purple">
Forget the past; look forward to the future, for the best things are yet to come.

</div>


 <footer class="w3-container w3-center w3-indigo">
<h5>Made for You</h5>by
<b>Ohidur Rahman Bappy</b>
<p>&copy;Birthday wishing  app 2016</p>
</footer>
     
     
     </body>
     </html>
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
 </body>
</html>