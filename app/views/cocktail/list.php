
    <body style="background-color:#dae2e7;">
            <link href="./main.css" rel="stylesheet" type="text/css">


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




        <div class="card-container2" >
            <?php if(!is_null($drink)) { ?>
                <?php foreach ($drink as $d) { ?>
                    <a href="/cocktail/details/<?= $d->idDrink; ?>" >
                    <div class="card2">
                    <img src=<?= $d->strDrinkThumb; ?>></img>
                    <p style="color: #00598f;"><?= $d->strDrink; ?></p>
                    </div>
                    </a>
            <?php };?>
            <?php } else { ?>
                <br>
                <p>0 Cocktail</p>
            <?php };?>
        </div>



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