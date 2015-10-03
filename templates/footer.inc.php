<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 3/10/2015
 * Time: 16:29
 */
?>
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

            <div class="col-sm-6 footer-right">
                <img src="<?php print base_path() . path_to_theme(); ?>/images/logo_small.jpg" alt="Neyens oud logo">
                <?php print '<a href="' . url('user') . '">' . 'Neyens | &copy; 2015' . '</a>'; ?>
</div>
</div>
</div>
</footer>