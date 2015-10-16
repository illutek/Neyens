<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 6/10/2015
 * Time: 22:33
 */
?>

<li><?php global $user;
    if ($user->uid != 0) {
        print '<li class="first">' . t('') .
            '<a href="' . url('user/' . $user->uid) . '">' . $user->name . '</a>
                        </li>';
        print '<li>
                        <a href="' . url('admin/dashboard') . '">' . t('Dashboard') . '</a>
                        </li>';
    } else {
        print '<li class="first">
                        <a href="' . url('user') . '">' . t('') . '</a>
                        </li>';
    } ?>
</li>