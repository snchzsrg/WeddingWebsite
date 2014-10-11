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

<div id="ourstory">

	<h2> Their Story (Abridged)  </h2>
	
	<p> It's not easy to put 10+ years of history on a single page, but we'll try... </p>

	<h3 class="story_header"> They first met </h3>
	<p class="story_response"> 
		Benjamin pidio una bebida de kiwi y fresa. Noe, sin verguenza, la mas exquisita champaña del menu.
	</p>
	
	<h3 class="story_header"> They had the first date </h3>
	<p class="story_response"> 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
		et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
		dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
		officia deserunt mollit anim id est laborum:
	</p>
		<ul id="first_date_fun_facts">
			<li>A quick brown fox jumps over the lazy dog.</li>
			<li>Now is the time for all good men.</li>
			<li>New Petitions and Building Code.</li>
			<li>Jose compro en Peru una vieja zampoña.</li>
		</ul>
	
	<h3 class="story_header"> They first kissed </h3>
	<p class="story_response"> 
		Jove xef, porti whisky amb quinze glacons d'hidrogen, coi! 
	</p>
	
	<h3 class="story_header"> They took their first picture as a couple </h3>
	<p class="story_response"> 
		Relaxing in basins at the end of inlets <i>terminates</i> the endless tests from the box. Carved symbols 
		in a mountain hollow on the bank of an inlet irritated an eccentric person.
	</p>	
	
	<h3 class="story_header"> They had their second first date </h3>
	<p class="story_response"> 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
		et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
		dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
		officia deserunt mollit anim id est laborum.
	</p>
	
	<h3 class="story_header"> They attended college </h3>
	<p class="story_response"> 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
		et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
		dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
		officia deserunt mollit anim id est laborum.
	</p>
	
	<h3 class="story_header"> After graduation </h3>
	<p class="story_response"> 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
		et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		aliquip ex ea commodo consequat.
	</p>
	
	<h3 class="story_header"> He proposed </h3>
	<p class="story_response"> 
		Pro etiam assum perpetua ex, diam viderer corrumpit est ut, vix tation utroque voluptatum ut. Nec 
		populo aliquid mediocrem at, pro ponderum constituam at. Ex cibo interpretaris nec. Ex consequat 
		concludaturque vis, vel ex erat summo disputando. Ne qui duis postulant petentium, no ius movet liberavisse. 
		Malorum contentiones voluptatibus nam ad. Stet nullam sensibus sit ne, sint habeo at nam, eu mel nusquam 
		tibique. Vim veniam nullam apeirian eu, sed at solum imperdiet vituperata. Eum aliquam verterem ad, 
		integre scaevola est ex, putant dictas ullamcorper id vis. In assum tempor instructior est. Ex assum 
		exerci nominati pro, graeci convenire consequat id vis, ne choro nullam mea.
	</p>
	
	<p id="editor_note"> 
		<i>This is what an "editor_note" looks like.</i>
	</p>

</div> <!-- end div:ourstory -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>

