<?php
/*
$curl = curl_init();

curl_setopt_array($curl, []
CURLOPT_URL => "https://the-cocktail-db.p.rapidapi.com/filter.php?c=Cocktail",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => [
"x-rapidapi-host: the-cocktail-db.p.rapidapi.com",
"x-rapidapi-key: 09d8e86b69msh367d3917d7092d8p152d35jsnbed02402c430"
],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
echo "cURL Error #:" . $err;
} else {
echo $response;
}
*/
?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

    <body style="background-color:#dae2e7;">
        <link href="./main.css" rel="stylesheet" type="text/css">


        <div class="navbar2">
    <a href="#"><img src="cocktail.png"></img></a>
    <div class="topnav-right">
    <a href="#">Repository</a>
    <a href="#">Contact</a>
    </div>
    <div class="resp">
    <a href="#">Menu</a>
    </div>
</div>


        <div class="main-content2">
    <div class="tabs2" >
	<ul class="tab-links">
		<li class="active"><a href="#tab1">Cocktail</a></li>
		<li><a href="#tab2">Ingredients</a></li>
	</ul>

	<div class="tab-content">
		<div id="tab1" class="tab active">
			<form>
                <input id="cocktailsearch" type="text" placeholder="Search the cocktail by name">
                <button id="cocktailsubmit" type="submit">Search</button>
                <button id="cocktailprepare" >Prepare a cocktail</button>
            </form>
        
        </div>

		<div id="tab2" class="tab">
        <form>
                <input id="ingredientssearch" type="text" placeholder="Search the cocktail by ingredients">
                <button id="ingredientssubmit" type="submit">Search</button>
            </form>
    </div>

	</div>
</div>




<div class="card-container2">
<div class="card2">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/yqvvqs1475667388.jpg"></img>
<p>155 Belmont</p>
</div>


<div class="card2">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/qyyvtu1468878544.jpg"></img>
<p>57 Chevy with a White License Plate</p>
</div>
<!--
<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/i9suxb1582474926.jpg"></img>
<p>747 Drink</p>
</div>

<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/i9suxb1582474926.jpg"></img>
<p>747 Drink</p>
</div>

<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/i9suxb1582474926.jpg"></img>
<p>747 Drink</p>
</div>


<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/i9suxb1582474926.jpg"></img>
<p>747 Drink</p>
</div>


<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/i9suxb1582474926.jpg"></img>
<p>747 Drink</p>
</div>

<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/i9suxb1582474926.jpg"></img>
<p>747 Drink</p>
</div>
-->

</div>



</div>
    



<script >
    jQuery(document).ready(function() {
	jQuery('.tabs2 .tab-links a').on('click', function(e) {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs2 ' + currentAttrValue).fadeIn(400).siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});
});
</script>
    </body>
</html>