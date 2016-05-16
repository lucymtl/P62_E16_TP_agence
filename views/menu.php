
<?php


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


