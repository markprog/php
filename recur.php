<?php

function recur($num){
    if ($num > 10) {
        echo ($num--) . '<br>';
        recur($num);
    } else return;


}

echo recur(20);



?>