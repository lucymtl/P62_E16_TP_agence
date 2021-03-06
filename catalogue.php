<?php
require_once('defines.php');
require_once('db/conn.php');
require_once('utils/login_out.php');
require_once('utils/panier.php');
$categories = get_categories();

//var_dump($categories);
// Est-ce qu'il y a une categorie (cat_id)  présente dans l'url ?
$cat_id = false; // Initialiser u premier des items
if (array_key_exists('item_id', $_GET) && array_key_exists($_GET['item_id'], $categories)) {
    $cat_id = $_GET['item_id'];
}
$forfait = get_article_list($cat_id);
//var_dump($forfait);
?>

<?php require_once('top.php'); ?>


    <h2>Notre catalogue</h2>
<!--<div id="liens_categories">-->
<!--    <ul>-->
<!--        --><?php //foreach ($categories as $cat) { ?>
<!--            <li><a href="catalogue.php?cat_id=--><?//= $cat['id'] ?><!--">--><?//= $cat['name'] ?><!--</a></li>-->
<!---->
<!--        --><?php}// ?>
<!--    </ul>-->
<!---->
<!---->
<!--</div>-->

    <?php
    // Si il y a une categorie, afficher son nom
    if (false !== $cat_id) {
        echo "<h2>Les items de la catégorie " . $cat_id['name'] . "</h2>";
    }
    ?>

    <?php
    /* Affichage du catalogue */
    if (empty($forfait)) {
        echo "<p>Cette catégorie est vide !</p>";
    }else{
    ?>



    <ul id="categories">
        <?php
        foreach ($forfait as $id => $val) {
//            var_dump($val);
        ?>
                <li><a href="detail.php?item_id=<?= $id ?>">
                        <div id = "toto" >
                            <p><?= utf8_encode($val['name']) ?>
                                , <span class="prix"><?= $val['price'].'$' ?></span>
                                , <span class="categorie"><?= utf8_encode($cat_id[$val['category_id']]['name']) ?></span>
                            </p>
                            <img src="<?= $val['picture'] ?>" alt=""/>
                        </div>
                </a>
            </li>
            <?php
        } // foreach
        } // else if empty
        ?>
    </ul>
</div>
<?php require_once('views/page_bottom.php'); ?>
