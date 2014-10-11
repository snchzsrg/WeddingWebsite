<?php 

require("common.php"); 
      
if(empty($_SESSION['user'])) {  
	header("Location: login.php");        
	exit("Redirecting to login.php"); 
}

include 'head.php'; ?>

<body>

<div id="container">

<?php include 'general.php'; ?>

<div id = "content">

<div id="hashtag">

	<h2>#WEDDINGHASHTAG</h2>

	<p> <b>YOU</b> can help us document the events leading up to and at our wedding! Just use the <b><i>#WEDDINGHASHTAG</i></b> hashtag! </p>

	<!-- twitter widget : tracks #WEDDINGHASHTAG : data-widget-id should be replaced -->
	<h3 class="ht_name">Twitter</h3>	
	<div id="hashtag_widget">
		<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23WEDDINGHASHTAG" data-widget-id="INSERT_DATA_WIDGET_ID_HERE">
		Tweets about "#WEDDINGHASHTAG"</a>
		<script>
		!function(d,s,id){
			var js, fjs = d.getElementsByTagName(s)[0], p=/^http:/.test(d.location)?'http':'https';
			if(!d.getElementById(id)){
				js=d.createElement(s);
				js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);
			}
		}(document,"script","twitter-wjs");
		</script>
	</div>

	<!-- www.intagme.com : tracks #WEDDINGHASHTAG -->
	<h3 class="ht_name">Instagram</h3>
	<iframe src="http://www.intagme.com/in/?h=INSERT_THE_SEEMINGLY_RANDOM_SET_OF_CHARACTERS_FOR_INSTAGRAM_HERE=" allowTransparency="true" 
			frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:495px; height: 495px" ></iframe>

</div> <!-- end div:hashtag -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>
