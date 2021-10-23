<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

    <body>
        <link href="./main.css" rel="stylesheet" type="text/css">


        <div class="navbar">
    <a href="#"><img src="cocktail.png"></img></a>
    <div class="topnav-right">
    <a href="#">Repository</a>
    <a href="#">Contact</a>
    </div>
    <div class="resp">
    <a href="#">Menu</a>
    </div>
</div>


        <div class="main-content">
    <div class="tabs" >
	<ul class="tab-links">
		<li class="active"><a href="#tab1">Cocktail</a></li>
		<li><a href="#tab2">Ingredients</a></li>
	</ul>

	<div class="tab-content">
		<div id="tab1" class="tab active">
			<form>
                <input id="cocktailsearch" type="text" placeholder="Search the cocktail by name">
                <button id="cocktailsubmit" type="submit">Search</button>
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


<div class="prepareCocktail">
<a>Prepare a cocktail</a>
</div>

<div class="card-container">
<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/yqvvqs1475667388.jpg"></img>
<p>155 Belmont</p>
</div>


<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/qyyvtu1468878544.jpg"></img>
<p>57 Chevy with a White License Plate</p>
</div>

<div class="card">
<img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/i9suxb1582474926.jpg"></img>
<p>747 Drink</p>
</div>

</div>

<div class="white-section">
    <p><a>See more...</a></p>
</div>

</div>
    



<script >
    jQuery(document).ready(function() {
	jQuery('.tabs .tab-links a').on('click', function(e) {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});
});
</script>
    </body>
</html>