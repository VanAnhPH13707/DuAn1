<?php
function introduce(){
    $introduce = "SELECT * FROM introduce WHERE introduce_id = 1";
    $i = exeQuery($introduce, false);
    client_render('introduce/index.php', compact('i'));
}

?>