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
                <li><a href="<?php print $front_page; ?>">Home <i class="fa fa-home"></i></a></li>
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

<section class="center">
    <div class="main-wrap-top">
        <div class="row green-canvas">
        <!-- dit stuk code om de main content te printen zou moeten verdwijnen op de front page -->

            <article class="col-md-12 content"><!-- main content -->
                <span>
                    <?php print $messages; ?>
                    <div id="main-wrapper">
                        <div id="main" class="clearfix">
                            <div id="content" class="column">
                                <div class="section">
                                    <a id="main-content"></a>
                                    <?php print render($title_prefix); ?>
                                    <?php if ($title): ?>
                                        <h1 class="title" id="page-title"><?php print $title; ?></h1>
                                    <?php endif; ?>
                                    <?php print render($title_suffix); ?>
                                    <?php if ($tabs): ?>
                                        <div class="tabs"><?php print render($tabs); ?></div>
                                    <?php endif; ?>
                                    <?php print render($page['help']); ?>
                                    <?php if ($action_links): ?>
                                        <ul class="action-links"><?php print render($action_links); ?></ul>
                                    <?php endif; ?>

                                    <?php if(!empty($page['content'])): ?>
                                    <?php if(drupal_is_front_page()) {
                                        unset($page['content']['system_main']['default_message']);
                                    }
                                    ?>
                                        <?php print render($page['content']); ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                            <!-- /.section, /#content -->
                </span>
            </article>

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