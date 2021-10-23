
<div>

    <div class="navbar">
        <a href="/cocktail/"><img src="../../assets/img/cocktail.png"></img></a>
        <div class="topnav-right">
        <a href="https://github.com/almirteixeira/cocktail-mvc">Repository</a>
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
                <form action="/cocktail/list" method="post">
                    <input name="name" id="cocktailsearch" type="text" placeholder="Search the cocktail by name">
                    <button id="cocktailsubmit" type="submit">Search</button>
                </form>
            
            </div>

            <div id="tab2" class="tab">
            <form action="/cocktail/listIn" method="post">
                    <input id="ingredientssearch" name="in" type="text" placeholder="Search the cocktail by ingredients">
                    <button id="ingredientssubmit" type="submit">Search</button>
                </form>
            </div>

            </div>
        </div>


        <div class="prepareCocktail">
            <a style="color: white;" href="/cocktail/random/">Prepare a cocktail</a>
        </div>

        <div class="card-container">
            <a href="/cocktail/details/15346">    
                <div class="card">
                <img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/yqvvqs1475667388.jpg"></img>
                <p>155 Belmont</p>
                </div>
            </a>

            <a href="/cocktail/details/14029">
                <div class="card">
                <img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/qyyvtu1468878544.jpg"></img>
                <p>57 Chevy with a White License Plate</p>
                </div>
            </a>

            <a href="/cocktail/details/178318">
                <div class="card">
                <img src="https:\/\/www.thecocktaildb.com\/images\/media\/drink\/i9suxb1582474926.jpg"></img>
                <p>747 Drink</p>
                </div>
            </a>

        </div>

        <div class="white-section">
            <p><a href="/cocktail/seemore/vodka">See more...</a></p>
        </div>

    </div>
            



    <script>
        jQuery(document).ready(function() {
            jQuery('.tabs .tab-links a').on('click', function(e) {
                var cValue = jQuery(this).attr('href');
                // Aplicar efeito para a tab - Apply effect for the tab
                jQuery('.tabs ' + cValue).fadeIn(400).siblings().hide();
                // Remover a Tab ativa - Remove active tab
                jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
                e.preventDefault();
            });
        });
    </script>
</div>
