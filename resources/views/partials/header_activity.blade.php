<?php
$link = (isset($link_profile)) ? $link_profile : "#";
?>

    <div id="header-card mb-3">
        <img src=<?= $link ?> class="img_inside mr-2" alt="">
        <div class="header-text">
            <p class="name-and-action font-weight-bold d-inline"><?=$name?></p>
            <p class="name-and-action d-inline"><?=$action?></p>
            <p class="name-and-action font-weight-bold d-inline"><?=$actionInBold?></p><br>
            <p><small><?=$date?></small></p>
        </div>
    </div>