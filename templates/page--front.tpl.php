<!-- include fullscreen video background includes/fullscreen_bg.inc.php -->
<?php include 'includes/fullscreen_bg.inc.php'; ?>

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
                <li><a href="#acties">Actie <i class="fa fa-info"></i></a></li>
                <?php include 'includes/dashboard.inc.php'; ?>
            </ul>
        </div>
    </div>
</nav>
<div id="home"><!-- anker home --></div>
<!-- de header region include includes/header.inc.php -->
<?php include 'includes/header-front.inc.php'; ?>

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
<div id="prive-tuinen" class="anchor"></div>
<section class="center">
    <div class="main-wrap">
        <div class="row green-canvas">
            <?php print render($page['prive']); ?>
        </div>
    </div>
</section>
<!-- regions bedrijven plaats voor de bedrijven tekst - inhoudstype 'activiteiten' (filter op field_soort_activiteit)
 + node--activiteit.tpl.php -->
<div id="bedrijven" class="anchor"></div>
<section class="center">
    <div class="main-wrap">
        <div class="row green-canvas">
            <?php print render($page['bedrijf']); ?>
            </div>
        </div>
    </div>
</section>
<!-- regions steden plaats voor de steden tekst - inhoudstype 'activiteiten' (filter op field_soort_activiteit)
 + node--activiteit.tpl.php -->
<div id="steden" class="anchor"></div>
<section class="center">
    <div class="main-wrap">
        <div class="row green-canvas">
            <?php print render($page['steden']); ?>
        </div>
    </div>
</section>
<!-- realisaties -->
<div id="realisaties" class="anchor"></div>
<section class="center realisaties">
    <div class="main-wrap">
        <div class="green-canvas">
            <article class="col-md-12 content">
                <?php print render($page['realisaties']); ?>
            </article>
        </div>
    </div>
</section>
<!-- contact formulier enkel in de rechter col-md-6 -->
<div id="contact" class="anchor"></div>
<section class="center">
    <div class="main-wrap">
        <div class="row yellow-canvas">
            <div class="col-md-5 mention">
                <div class="mention-text">
                    <?php print render($page['content_contactform']); ?>
                </div>
                <div class="arrow-right">
                    <i class="fa fa-arrow-right arrow"></i>
                </div>
                <div class="arrow-down">
                    <i class="fa fa-arrow-down arrow"></i>
                </div>
            </div>
            <!-- het contact formulier -->
            <div class="col-md-6 col-md-offset-1 form">
                <?php print render($page['contact']); ?>
            </div>
        </div>
    </div>
</section>
<!-- acties er wordt altijd een actie getoond daarom ook geen controle -->
<div id="acties" class="anchor"></div>
<section class="center">
    <div class="main-wrap-acties">
        <div class="yellow-canvas">
            <?php print render($page['actions']); ?>
        </div>
    </div>
</section>
<!-- de footer region include footer.inc.php -->
<?php include 'includes/footer.inc.php'; ?>

<a href="#0" class="cd-top">Top</a>

