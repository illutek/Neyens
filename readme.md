Theme opgezet met bootstrap en Flexbox en scss

Video handleiding in de Drupal map
http://www.zamzar.com/ voor het converteren naar verschillende formaten

HTML5
<section class="center" id="prive-tuinen">
    <div class="main-wrap">
        <div class="row green-canvas">
            <div class="col-md-4 image-wrap"><img src="../images/prive.jpg"></div>
            <article class="col-md-8 content">
            <h1></h1>
            <p></p>
            </article>........

Dit HTML verhaal klopt wel, maar eens omgezet naar een Drupal7 theme kan op het tpl.php niveau
geen tag article opnieuw gebruikt worden of toch?

Deze manier
<!-- op 'page.tpl.php' level -->
<article class="col-md-8 content">
<!-- hierna de node.tpl.php code -->
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <header>
            <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        </header>
            <?php print render($content); ?>
    </div>
    <!-- end node.tpl.php -->
</article>

Of volgende
<!-- op 'page.tpl.php' level -->
<div class="col-md-8 content">
<!-- hierna de node.tpl.php code -->
    <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <header>
            <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        </header>
            <?php print render($content); ?>
    </article>
    <!-- end node.tpl.php -->
</div>

De artikel tekst en de h2 moeten samen gebundelt worden in een span tag bij IE zou dit
anders een probleem geven


Font awesome
bedrijven <i class="fa fa-industry"></i>
gemeente <i class="fa fa-tree"></i> of <i class="fa fa-university"></i>
realisaties <i class="fa fa-picture-o"></i>
home <i class="fa fa-home"></i>
acties <i class="fa fa-asterisk"></i> of <i class="fa fa-info"></i>
prive <i class="fa fa-map-pin"></i> of <i class="fa fa-leaf"></i>
contact <i class="fa fa-envelope"></i>

Experience cirkel Sticky after scroll (sticky.js) + aantal transform effecten

