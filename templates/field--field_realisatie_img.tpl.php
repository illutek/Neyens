<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 15/10/2015
 * Time: 16:37
 * $i op 1  dan wordt het eerste item overgeslagen bv om de eerste image
 * een andere opmaak class mee te geven
 */

$total = count($items);
for ($i = 1; $i < $total; ++$i): ?>
<div class="grid-item">
    <?php print render($items[$i]); ?>
</div>
<?php endfor; ?>
