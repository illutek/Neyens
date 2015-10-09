<!-- include fullscreen video background fullscreen_bg.inc.php -->
<?php include 'fullscreen_bg.inc.php'; ?>

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
                <?php include 'dashboard.inc.php'; ?>
            </ul>
            <!-- <ul class="nav navbar-nav navbar-right">
                <li><a href="#acties">Acties <i class="fa fa-info"></i></a></li>
            </ul> -->

        </div>
    </div>
</nav>
<div id="home"></div>
<!-- de header region include header.inc.php -->
<?php include 'header.inc.php'; ?>

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

<!-- de footer region include footer.inc.php -->

<?php include 'footer.inc.php'; ?>