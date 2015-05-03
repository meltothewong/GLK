<?php
Starkers_Utilities::get_template_parts( array( 'parts/header' ) );
?>

<div class="center-col center">
	<h1 class="kilo"><?php
$phrases = array(
	"I say! You’re in a bit of a sticky wicket!",
	"Cor, Blimey!",
	"Whoopsie Daisy!",
	"Egad!",
	"Gadzooks!",
	"Dash it all!",
	"Pardon our Kerfuffle!",
	"Keep Calm and Carry on!",
	"Stiff upper lip, what!",
	"This sort of thing is not quite top drawer!",
	"M'Gosh!",
	"Fiddlesticks!",
	"Fluffernutter!",
	"GREAT SCOTT!"
);
echo $phrases[rand(0, count($phrases)-1)];
?></h1>
<p>It seems this page doesn't exist (404). Try the <a href="/">home page</a>.</p>
</div>

<?php
Starkers_Utilities::get_template_parts( array( 'parts/footer' ) );
?>