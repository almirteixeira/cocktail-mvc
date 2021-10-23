
<body style="background-color:#dae2e7;">
    <div class="navbar2">
        <a href="/cocktail/"><img src="../../assets/img/cocktail.png"></img></a>
        <div class="topnav-right">
        <a href="https://github.com/almirteixeira/cocktail-mvc">Repository</a>
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
                    <form action="/cocktail/list" method="post">
                        <input name="name" id="cocktailsearch" type="text" placeholder="Search the cocktail by name">
                        <button id="cocktailsubmit" type="submit">Search</button>
                    </form>
                    <br>
                    <a href="/cocktail/random/"><button id="cocktailprepare" >Prepare a cocktail</button></a>
                </div>

            <div id="tab2" class="tab">
                <form action="/cocktail/listIn" method="post">
                        <input id="ingredientssearch" type="text" name="in" placeholder="Search the cocktail by ingredients">
                        <button id="ingredientssubmit" type="submit">Search</button>
                    </form>
            </div>

        </div>
    </div>


        <?php foreach ($drink as $d) { ?>

            <div class="card-details">
            <img src=<?= $d->strDrinkThumb; ?>></img>
            <div class="container-text">
            <span><b>Name: </b><?= $d->strDrink; ?></span>
            <br/>
            <span><b>Drick </b><?= $d->strAlcoholic; ?></span>
            <br/>
            <span><b>Ingredients:</b></span>
                <ul style="list-style:none">
                    <li><?= $d->strIngredient1?> <?= $d->strMeasure1 ?></li>
                    <li><?= $d->strIngredient2?> <?= $d->strMeasure2 ?></li>
                    <li><?= $d->strIngredient3?> <?= $d->strMeasure3 ?></li>
                    <li><?= $d->strIngredient4?> <?= $d->strMeasure4 ?></li>
                    <li><?= $d->strIngredient5?> <?= $d->strMeasure5 ?></li>
                    <li><?= $d->strIngredient6?> <?= $d->strMeasure6 ?></li>
                    <li><?= $d->strIngredient7?> <?= $d->strMeasure7 ?></li>
                    <li><?= $d->strIngredient8?> <?= $d->strMeasure8 ?></li>
                    <li><?= $d->strIngredient9?> <?= $d->strMeasure9 ?></li>
                    <li><?= $d->strIngredient10?> <?= $d->strMeasure10 ?></li>
                    <li><?= $d->strIngredient11?> <?= $d->strMeasure11 ?></li>
                    <li><?= $d->strIngredient12?> <?= $d->strMeasure12 ?></li>
                    <li><?= $d->strIngredient13?> <?= $d->strMeasure13 ?></li>
                    <li><?= $d->strIngredient14?> <?= $d->strMeasure14 ?></li>
                    <li><?= $d->strIngredient15?> <?= $d->strMeasure15 ?></li>
                </ul>
                <br/>
            <span><b>Instruction:</b></span>
            <span><?= $d->strInstructions; ?></span>
            <br/>
            </div>
            </div>


        <?php }?>


    </div>
    



    <script >
            jQuery(document).ready(function() {
                    jQuery('.tabs2 .tab-links a').on('click', function(e) {
                        var cValue = jQuery(this).attr('href');
                        // Aplicar efeito para a tab - Apply effect for the tab
                        jQuery('.tabs2 ' + cValue).fadeIn(400).siblings().hide();
                        // Remover a Tab ativa - Remove active tab
                        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
                        e.preventDefault();
                    });
                });
    </script>
</body>