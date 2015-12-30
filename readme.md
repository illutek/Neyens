#Theme opgezet met bootstrap en Flexbox en scss

Video handleiding in de Drupal map
http://www.zamzar.com/ voor het converteren naar verschillende formaten

##HTML5
```html
<section class="center" id="prive-tuinen">
    <div class="main-wrap">
        <div class="row green-canvas">
            <div class="col-md-4 image-wrap"><img src="../images/prive.jpg"></div>
            <article class="col-md-8 content">
            <h1></h1>
            <p></p>
            </article>........
```
Dit HTML verhaal klopt wel, maar eens omgezet naar een Drupal7 theme kan op het tpl.php niveau
geen tag article opnieuw gebruikt worden of toch?

Deze manier
```html
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
```
```html
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
```
De artikel tekst en de h2 moeten samen gebundelt worden in een span tag bij IE zou dit
anders een probleem geven


##Font awesome
```html
bedrijven <i class="fa fa-industry"></i>
gemeente <i class="fa fa-tree"></i> of <i class="fa fa-university"></i>
realisaties <i class="fa fa-picture-o"></i>
home <i class="fa fa-home"></i>
acties <i class="fa fa-asterisk"></i> of <i class="fa fa-info"></i>
prive <i class="fa fa-map-pin"></i> of <i class="fa fa-leaf"></i>
contact <i class="fa fa-envelope"></i>
```
Experience cirkel Sticky after scroll (sticky.js) + aantal transform effecten

##Drupal online
inhoudstype article enkel gebruikt als hoofd/welkom tekst op de homepage (node--article.tpl.php)

page--front.tpl.php en page.tpl.php voor structuur
De indentieke delen op de page en front--page vervangen door inc.php onderdelen
- footer.inc.php - header.inc.php - fullscreen_bg.inc.php (de video background)
```<?php include 'footer.inc.php'; ?> ```

##Path naar images en video

Maakt het leesbaarder op tpl.php niveau
```
/**
 * Impelements hook_preprocess_page().
 */
function neyensbootstrap_preprocess_page(&$vars) {
    $vars['images_path'] = $vars['base_path'] . $vars['directory'] . '/images';
    $vars['video_path'] = $vars['base_path'] . $vars['directory'] . '/video';
}
```
**dit op tpl.php**
```
<img src="<?php print $images_path; ?>/twentyfive_year_active-stroke-200-min.png">
```

##Masonry
### Realisaties (uitgeschakeld afbeeldingen liggen soms over elkaar zonder enige verklaring)
#### Had hier ook weinig zin omdat de thumbnails alle dezelfde hoogte hebben.
Dit zonder modules, een inhoudstype realisaties, een simpele view volledige inhoud tonen.
Een node--realisaties.tpl.php met de nodige div's en een extra file field--field_realisatie_img.tpl.php
om de class 'grid-item' rond de image te plaatsen, voor een meer gedetailleerde uitleg
https://www.dropbox.com/s/dri1mdwjjze87wh/Masonry_Drupal_zonder_module.pdf?dl=0

Code 'field--field_realisatie_img.tpl.php'
```
<?php
$total = count($items);
for ($i = 1; $i < $total; ++$i): ?>
<div class="grid-item img-over-effect">
    <?php print render($items[$i]); ?>
</div>
<?php endfor; ?>
```

##Aanroepen jquery.smooth-scroll.js
Om dit enkel op de home pagina te include.
```
    if (drupal_is_front_page()) {
        drupal_add_js(drupal_get_path('theme', 'neyensbootstrap') . '/js/jquery.smooth-scroll.js', array('weight' => 2));
    }
```
Volgende om ervoor te zorgen dat dit gebeurt na het include van jquery.min.js geven we een weight mee
```
array('weight' => 2)
```

##Collapse menu
Het menu op de page--front.tpl.php in tablet mode klapt niet dicht na een menu keuze
omdat het menu item naar een ankerpunt refereerd op dezelfde pagina, collapse.js lost dit op, wordt eveneens
enkel op de frontpage opgeroepen via drupal_add_js op template.php.

##Vieuwport
Ingesteld op template.php, op deze manier blijft html.php weer een stuk cleaner.
```
/**
 * Implements viewport to html.tpl.php
 * <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'/>
 */
function neyensbootstrap_page_alter($page) {
    $viewport = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1')
    );
    drupal_add_html_head($viewport, 'viewport');
}
```

##Custom js files
JavaScript closures toegevoegd 'jQuery(document).ready'
```
function($) {
	$('a[href*=#]:not([href=#])').click(function() {.....
```
wordt dan
```
jQuery(document).ready(function($) {
	$('a[href*=#]:not([href=#])').click(function() {......
```
https://www.drupal.org/node/171213

###Alle bootstrap files extern (versie 3.3.6)
De versie 3.3.4 op domein laten zitten om eventueel terug te kunnen vallen (.info file uit comment halen)

###Meta tags
Deze toegevoegd op template.php heeft weinig zin op de module te installeren voor enkel 1 pagina, de front page

```
function neyensbootstrap_preprocess_html(&$variables)
{
    // Adding meta tags description, one page template dus kies hier om deze rechtstreeks
    // toe te voegen.
    $description = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'description',
            'content' => 'Neyens tuinaanleg en tuinonderhoud zowel privé, gemeente en
            bedrijven  ook vijvers en zwembaden als ook verhardingen behoort tot onze
            activiteiten.')
    );
    drupal_add_html_head($description, 'description');

    // Adding meta tags keywords, one page template dus kies hier om deze rechtstreeks
        // toe te voegen.
        $keywords = array(
            '#type' => 'html_tag',
            '#tag' => 'meta',
            '#attributes' => array(
                'name' => 'keywords',
                'content' => 'tuinaanleg, tuinonderhoud, verhardingen, waterpatijen, vijvers,
                zwembaden, tuinverlichting, beplanting, gazon, grasperken')
        );
        drupal_add_html_head($keywords, 'keywords');
}
```

###Better login module
Een kleine aanpassing in de files templates/page--user--login.tpl.php, templates/page--user--password.tpl.php
en templates/page--user--reset.tpl.php
nl volgende verwijdert <img src="<?php print $logo; ?>" alt="...."> dit om de border rond de site-name
te verwijderen.

### SCSS opgedeeld
![SMACSS logo](/images/SMACSS.jpg)

In verschillende files SMACSS Scalable and Modular Architecture for CSS  
* Base: alle basis css zoals reset en globals (vooral de tags zoals header, body, paragraaf, linken  
* Layout: Vooral de structuur van de site, the look and feel.  
* Components: Hier de to-top button, het betterlogin onderdeel, maar ook de userpagina zou als component kunnen  
* State: De verschillende uitzichten van de site, voor mij is dat de media-query  
* Theme: Niet gebruikt  
Let’s say you have a dialog module that needs to have a border colour of blue, the border 
itself would be initially defined in the module and then the theme defines the colour:  
```
// in module-name.css
.mod {
    border: 1px solid;
}

// in theme.css
.mod {
    border-color: blue;
}
```
https://smacss.com/book/type-theme

Lijkt misschien ver gezocht om bij een eenvoudige site dit alles toe te passen, maar toch op deze mannier is het 
heel simpel om bepaalde onderdelen te hergebruiken voor andere projecten.


