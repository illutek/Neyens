<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 18/10/2015
 * Time: 15:53
 */
?>
<div class="profile"<?php print $attributes; ?>>
    <?php include 'includes/user-profile-text.inc.php'; ?>

<!-- onderstaande code print de history van de user, heeft weinig zin voor deze
site daarom ook in comment geplaatst -->
<?php // global $user; print render($user_profile); ?>

<h4>Gebruikersmenu</h4>
<ul class="user_linken">
    <li>
        <?php print l(t('Edit your account'), "user/{$GLOBALS['user']->uid}/edit"); ?>
    </li>
    <li>
        <a href="<?php print base_path() ?>admin/dashboard">Dashboard</a>
    </li>
    <li>
        <a href="<?php print base_path() ?>user/logout">Uitloggen</a>
    </li>
</ul>
</div>