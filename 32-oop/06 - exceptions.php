<?php


function edit_page($user,$title){
    if($user !== 'admin'){

        throw new Exception('The user is not admin');
    }
    if(strlen($title) < 3){
        return null;
    }

    //Editing / Updating the page
}

try{
    edit_page('admin', 'About Us');
    echo "-----";
}
catch(Exception $e){
    var_dump($e);
}