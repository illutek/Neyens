<div class="fullscreen-bg">
    <video loop muted autoplay poster="<?php print base_path() . path_to_theme(); ?>/video/jasmine_flower_127/snapshot-min.PNG" class="fullscreen-bg__video">
        <source src="<?php print base_path() . path_to_theme(); ?>/video/jasmine_flower_127/Jasmine_flower.mp4" type="video/mp4">
        <source src="<?php print base_path() . path_to_theme(); ?>/video/jasmine_flower_127/Jasmine_flower.ogv" type="video/ogv">
        <source src="<?php print base_path() . path_to_theme(); ?>/video/jasmine_flower_127/Jasmine_flower.ogg" type="video/ogg">
        <source src="<?php print base_path() . path_to_theme(); ?>/video/jasmine_flower_127/Jasmine_flower.webmsd.webm" type="video/webm">
    </video>
</div>
<!-- navigatie fixed top -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#home">Home <i class="fa fa-home"></i></a></li>
                <li><a href="#prive-tuinen">Prive tuinen en parken <i class="fa fa-map-pin"></i></a></li>
                <li><a href="#bedrijven">Bedrijven <i class="fa fa-industry"></i></a></li>
                <li><a href="#steden">Steden en gemeente <i class="fa fa-university"></i></a></li>
                <li><a href="#realisaties">Realisaties <i class="fa fa-picture-o"></i></a></li>
                <li><a href="#contact">Contact <i class="fa fa-envelope"></i></a></li>
            </ul>
            <!-- <ul class="nav navbar-nav navbar-right">
                <li><a href="#acties">Acties <i class="fa fa-info"></i></a></li>
            </ul> -->

        </div>
    </div>
</nav>
<div id="home"></div>
<header class="container">
    <div class="row">
        <div class="experience">
            <a href="#home">
                <figure><img src="<?php print base_path() . path_to_theme(); ?>/images/twentyfive_year_active-stroke-200-min.png"></figure>
            </a>
        </div>
        <div id="sticky-anchor"></div>
        <!-- als deze de top vd page bereikt wordt .experience sticky -->
        <div class="site-name">
            <?php print $site_name; ?>
        </div>
    </div>
    <div class="actie-wrap">
        <a href="#acties">
            <div class="acties"></div>
        </a>
    </div>
</header>

<!-- regions welkom plaats voor de welkom tekst - inhoudstype 'article' (core)
 + node--article.tpl.php -->
<section class="center">
    <div class="main-wrap-top">
        <div class="row green-canvas">
            <?php print render($page['welkom']); ?>
        </div>
    </div>
</section>
<!-- regions prive plaats voor de prive tekst - inhoudstype 'activiteiten' (filter op field_soort_activiteit)
 + node--activiteit.tpl.php -->
<section class="center" id="prive-tuinen">
    <div class="main-wrap">
        <div class="row green-canvas">
            <?php print render($page['prive']); ?>
        </div>
    </div>
</section>
<!-- regions bedrijven plaats voor de bedrijven tekst - inhoudstype 'activiteiten' (filter op field_soort_activiteit)
 + node--activiteit.tpl.php -->
<section class="center" id="bedrijven">
    <div class="main-wrap">
        <div class="row green-canvas">
            <?php print render($page['bedrijf']); ?>
            </div>
        </div>
    </div>
</section>
<!-- regions steden plaats voor de steden tekst - inhoudstype 'activiteiten' (filter op field_soort_activiteit)
 + node--activiteit.tpl.php -->
<section class="center" id="steden">
    <div class="main-wrap">
        <div class="row green-canvas">
            <?php print render($page['steden']); ?>
        </div>
    </div>
</section>


<section class="center" id="realisaties">
    <div class="main-wrap">
        <div class="green-canvas">
            <article class="col-md-12 content">
                <h2>Realisatie</h2>

                <div class="img_realisaties"></div>
            </article>
        </div>
    </div>
</section>

<section class="center" id="contact">
    <div class="main-wrap">
        <div class="row yellow-canvas">
            <div class="col-md-5 mention">
                <p>Contacteer ons via dit formulier voor al je vragen of voor een offerte</p>

                <div class="arrow-right">
                    <i class="fa fa-arrow-right arrow"></i>
                </div>
                <div class="arrow-down">
                    <i class="fa fa-arrow-down arrow"></i>
                </div>

            </div>
            <div class="col-md-6 col-md-offset-1 form">
                <form>
                    <label>Jouw naam</label> <input type="text" size="40" name="name"><br>
                    <label>e-mail</label> <input type="email" size="40" name="email"><br>
                    <label>Bericht</label> <textarea name="bericht" row="8" cols="40"></textarea><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>

<section class="center" id="acties">
    <div class="main-wrap-acties">
        <div class="row yellow-canvas">
            <span>
                <h2>Aktie : Korting van 10% op uw huidig onderhoudscontract - Offertte</h2>
            <p>Aktie van 10 % korting op uw huidig groenonderhoudscontract.</p>
            <p>Hebt u een lagere offerte dan de onze, dan verlagen wij onze prijs - Zodat wij deze steeds aan de beste
                voorwaarden kunnen voldoen!
                Nieuw : Plaatsen van Citycontainers voor groenafval max 10m³ aan voordelige prijzen.
                Plaatsen van Citycontainers voor alle soorten afval, vanaf 6 m³ VRAAG NAAR DE PLAATSINGSVOORWAARDEN</p>
            </span>
        </div>
    </div>
</section>
<footer>
    <div class="footer-wrap">
        <div class="row green-canvas footer-canvas">
            <div class="col-sm-6 address">
                <div class="phone-screen margin-bottom">
                    <i class="fa fa-phone"></i> 003211/63.35.28
                </div>
                <div class="phone-mobile margin-bottom">
                    <a href="tel:+3211633528" class="btn btn-info">
                        <i class="fa fa-phone"></i> 003211/63.35.28
                    </a>
                </div>
                <div class="phone-screen margin-bottom">
                    <i class="fa fa-mobile"></i> 0495/30.35.28
                </div>
                <div class="phone-mobile margin-bottom">
                    <a href="tel:+32495303528" class="btn btn-info">
                        <i class="fa fa-mobile"></i> 0495/30.35.28
                    </a>
                </div>
                <div class="mail margin-bottom">
                    <i class="fa fa-envelope"></i>
                    <script type="text/javascript">
                        document.write("<a href=\"mail" + "to:" + new Array("info", "neyens.be").join("@") + "\">" + "info@neyens.be" + "</" + "a>");
                    </script>
                </div>
                <div class="btw margin-bottom">
                    BE 0705.544.643
                </div>
                <div>
                    <p>Postadres :<br>Weyerstraat 325<br>3850 Kozen België</p>
                </div>
            </div>
            <!-- end address -->

            <div class="col-sm-6">
                <img src="<?php print base_path() . path_to_theme(); ?>/images/logo_small.jpg" alt="Neyens oud logo">
                Neyens | &copy; 2015
            </div>
        </div>
    </div>
</footer>