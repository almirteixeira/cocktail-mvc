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




<div class="card-details">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/yqvvqs1475667388.jpg"></img>
<div class="container-text">
<span><b>Name: </b>155 Belmont</span>
<br/>
<span><b>Drick </b>Alcoholic</span>
<br/>
<span><b>Ingredients:</b></span>
    <ul>
        <li>Tequila: 1/2oc</li>
        <li>Tequila: 1/2oc</li>
        <li>Tequila: 1/2oc</li>
        <li>Tequila: 1/2oc</li>
    </ul>
    <br/>
<span><b>Instruction:</b></span>
<span>Rub the rim of the glass with the lime slice to make the salt stick to it. 
    Take care to moisten only the outer rim and sprinkle the salt on it. The salt should present to the lips of the imbiber and never mix into the cocktail. Shake the other ingredients with ice, then carefully pour into the glass.</span>
<br/>
</div>
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