<?php
/*
 * Created by PhpStorm.
 * User: MAMI
 * Date: 5/12/2018
 * Time: 5:33 PM
 */

if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>