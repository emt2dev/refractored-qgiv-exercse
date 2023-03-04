<?php


function getAPI_Data() {
    $user = json_decode(file_get_contents('https://randomuser.me/api/?results=1&nat=us&exc=login,id,nat'), true);

    print_r($user['results'][0]['gender']);
    echo '<br />';
    echo '<br />';
    
    print_r($user['results'][0]['name']['title']);
    echo '<br />';
    echo '<br />';

    print_r($user['results'][0]);
    echo '<br />';
    echo '<br />';


    print_r($user);
}



?>