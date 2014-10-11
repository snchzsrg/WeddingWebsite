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

<div id="weddingparty">

	<!-- HERE IS WHERE YOU LIST THE WEDDING PARTY AND ALL OF THE NICE THINGS YOU CAN THINK TO SAY -->
	<!-- the text included below is nonsense gibberish...or song lyrics... or poems. it's random. -->
	<h2>The Wedding Party</h2>  

	<div id="wp_bm0" class="wp_female">
		<h3 class="wp_name">bm0 </h3>
		<img id="pic_bm0" class="wp_picture_female" src="img/bm0.jpg"></img>
		<p class="wp_description_female">
			Lorem ipsum dolor sit amet, eu ignota constituto mea, nisl nobis disputationi no pri. 
			Sit eu graece altera iuvaret, meis ubique veritus ex vix, mel id audiam pertinax. 
			Detracto recteque assueverit duo eu. Posse dolor propriae eam in, an eum facete 
			definiebas conclusionemque. At sea mutat oporteat expetenda, dicta delicata appellantur 
			te eum. At per equidem vituperatoribus.
		</p>
	</div>

	<div id="wp_gm0" class="wp_male">
		<h3 class="wp_name">gm0 </h3>
		<img id="pic_gm0" class="wp_picture_male" src="img/gm0.jpg"></img>
		<p class="wp_description_male">
			banans in pajamas are coming down the stairs<br>
			bananas in pajamas are coming down in pairs<br>
			bananas in pajamas are chasing teddy bears<br>
			cause on tuesdays they try to catch their man-o-wears
		</p>	
	</div>
	
	<div id="wp_bm1" class="wp_female">
		<h3 class="wp_name">bm1 </h3>
		<img id="pic_bm1" class="wp_picture_female" src="img/bm1.jpg"></img>
		<p class="wp_description_female">
			Stet nullam sensibus sit ne, sint habeo at nam, eu mel nusquam tibique. 
			Vim veniam nullam apeirian eu, sed at solum imperdiet vituperata.
		</p>	
	</div>

	<div id="wp_gm3" class="wp_male">
		<h3 class="wp_name">gm3 </h3>
		<img id="pic_gm3" class="wp_picture_male" src="img/gm3.jpg"></img>
		<p class="wp_description_male">
			Eum aliquam verterem ad, integre scaevola est ex, putant dictas ullamcorper 
			id vis. In assum tempor instructior est. Ex assum exerci nominati pro, graeci 
			convenire consequat id vis, ne choro nullam mea.
		</p>	
	</div>
	
	<div id="wp_bm4" class="wp_female">
		<h3 class="wp_name">bm4 </h3>
		<img id="pic_bm4" class="wp_picture_female" src="img/bm4.jpg"></img>
		<p class="wp_description_female">
			Salutandi aliquando mei an. Eu mel mollis maiestatis rationibus. At mentitum 
			moderatius delicatissimi sed, clita delicata pericula id duo. Mei ex aeque repudiare, 
			mazim oratio impetus at pri.
		</p>	
	</div>

	<div id="wp_gm2" class="wp_male">
		<h3 class="wp_name">gm2 </h3>
		<img id="pic_gm2" class="wp_picture_male" src="img/gm2.jpg"></img>
		<p class="wp_description_male">
			Fabulas vivendum voluptaria ex vix, aperiri prompta fabellas id vis, cu choro partem 
			eum. Nostrud aliquid te pri, at ius modus vocent constituto. Et pro dicit feugiat, usu 
			impedit mediocrem ea.
		</p>	
	</div>
	
	<div id="wp_bm5" class="wp_female">
		<h3 class="wp_name">bm5 </h3>
		<img id="pic_bm5" class="wp_picture_female" src="img/bm5.jpg"></img>
		<p class="wp_description_female">
			Per natum explicari an, per ne exerci suavitate maiestatis, augue cetero vis cu. Ei soleat 
			oportere concludaturque cum. Nec nullam graece pericula ex. Ex consulatu referrentur 
			repudiandae est. Facer laudem fierent mel te, ei inani magm3set instructior vim.
		</p>	
	</div>

	<div id="wp_gm6" class="wp_male">
		<h3 class="wp_name">gm6 </h3>
		<img id="pic_gm6" class="wp_picture_male" src="img/gm6.jpg"></img>
		<p class="wp_description_male"> 
			Rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble 
			rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble rabble
			rabble rabble rabble rabble rabble rabble rabble.
		</p>	
	</div>
	
	<div id="wp_bm3" class="wp_female">
		<h3 class="wp_name">bm3 </h3>
		<img id="pic_bm3" class="wp_picture_female" src="img/bm3.jpg"></img>
		<p class="wp_description_female">
			A B C D E F G H I J K L M N O P Q R S T U V W X Y Z A B C D E F G H I J K L M 
			N O P Q R S T U V W X Y Z A B C D E F G H I J K L M N O P Q R S T U V W X Y Z 
			A B C D E F G H I J K L M N O P Q R S T U V W X Y Z
		</p>	
	</div>

	<div id="wp_gm5" class="wp_male">
		<h3 class="wp_name">gm5 </h3>
		<img id="pic_gm5" class="wp_picture_male" src="img/gm5.jpg"></img>
		<p class="wp_description_male">
			Un elefante se balanceaba sobre la tela de una arana. Como veia que resistia, 
			fue a llamar a otro elefante. Dos elefantes se balanceabas sobre la tela de una 
			arana. Como veia que resistia, fueron a llamar a otro elefante.
		</p>	
	</div>
	
	<div id="wp_bm6" class="wp_female">
		<h3 class="wp_name">bm6 </h3>
		<img id="pic_bm6" class="wp_picture_female" src="img/bm6.jpg"></img>
		<p class="wp_description_female">
			Here in my car - I feel safest of all - I can lock all my doors - It's the only 
			way to live - In cars -- Here in my car - I can only receive - I can listen to 
			you - It keeps me stable for days - In cars
		</p>	
	</div>

	<div id="wp_gm1" class="wp_male">
		<h3 class="wp_name">gm1 </h3>
		<img id="pic_gm1" class="wp_picture_male" src="img/gm1.jpg"></img>
		<p class="wp_description_male">
			 I needed a new heel for my shoe, so, I decided to go to Morganville, which is what 
			 they called Shelbyville in those days. So I tied an onion to my belt, which was the 
			 style at the time. Now, to take the ferry cost a nickel, and in those days, nickels 
			 had pictures of bumblebees on 'em. Give me five bees for a quarter, you'd say.
		</p>	
	</div>
	
	<div id="wp_bm2" class="wp_female">
		<h3 class="wp_name">bm2 </h3>
		<img id="pic_bm2" class="wp_picture_female" src="img/bm2.jpg"></img>
		<p class="wp_description_female">
			Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus 
			nos eludet? Quem ad finem sese effrenata iactabit audacia? How long, O Catiline, will 
			you abuse our patience? And for how long will that madness of yours mock us? To what 
			end will your unbridled audacity hurl itself?
		</p>	
	</div>

	<div id="wp_gm4" class="wp_male">
		<h3 class="wp_name">gm4 </h3>
		<img id="pic_gm4" class="wp_picture_male" src="img/gm4.jpg"></img>
		<p class="wp_description_male">
			My personal acting technique is working with color. Imagining, then finding the emotional 
			vibrational mood connected to the color. See, if you look through my scripts, you see that 
			all my lines have a special color. So, I don’t memorize language, I memorize colors. 
			This way I can go through red, yellow, green, blue, and you have a full palette of emotions.
		</p>	
	</div>

</div> <!-- end div:weddingparty -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>
