<?php
/* Plugin Name: Mitt plugin
Author: Anton
 */
    add_action('storefront_after_footer', 'skrivUt');


 function skrivUt (){
     echo '<p id="weo">' . 'made by Anton' . '</p>';
 }
?>