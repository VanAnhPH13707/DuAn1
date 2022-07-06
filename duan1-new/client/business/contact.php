<?php
function contact(){
    $contact = "SELECT * FROM profile_company WHERE profile_id = 1";
    $l = exeQuery($contact, false);
    client_render('contact/index.php', compact('l'));
}

?>