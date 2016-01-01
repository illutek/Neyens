<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 3/10/2015
 * Time: 19:33
 */
?>

<header class="container">
    <div class="row">
        <!-- de ervaring cirkel er wordt hier een class 'stick' toegevoegd met sticky.js -->
        <!-- als deze de top vd page bereikt wordt .experience .sticky -->
        <div class="experience">
            <a href="#home">
                <figure>
                    <img src="<?php print $images_path; ?>twentyfive_year_active-stroke-200-min.png" alt="Tuinen Neyens 25 jaar ervaring">
                </figure>
            </a>
        </div>
        <div id="sticky-anchor"></div>

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