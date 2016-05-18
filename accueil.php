<?php

require_once('defines.php');
require_once('db/conn.php');
require_once('utils/login_out.php');
require_once('utils/panier.php');
require_once ('top.php');
$categories = get_categories();
//var_dump($categories);

?>
<?php
require_once('data/menu_data.php');

?>

<div class="menu">
    <ul>
        <?php

        foreach($menu as $menu_items => $menu_list){
            echo "<li><a href='$menu_list'> $menu_items</a></li>";
        }

        ?>
    </ul>
</div>


<!--<div id="main">-->
<!--    <!-- Liens vers les categories du catalogue -->
<!--    <div id="liens_categories">-->
<!--        <ul>-->
<!--            --><?php //foreach ($categories as $cat) { ?>
<!--                <li><a href="catalogue.php?cat_id=--><?//= $cat['id'] ?><!--">--><?//= $cat['name'] ?><!--</a></li>-->
<!--            --><?php //} ?>
<!--        </ul>-->
<!---->
<!--    </div>-->
<!---->
<!--    </div>-->
<!--    <!--Code html spécifique -->
<!--</div>-->
<?php
require_once('views/forfaits.php');
require_once ('views/page_bottom.php');
require_once('views/footer.php');
?>



