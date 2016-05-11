


        <?php
        require_once('../data/defines.php');



        foreach(get_menu() as $menu => $menu_data){
            echo '<li class="active"><a href="', $menu_data,'">', $menu,'</a></li>';
        }  ?>


