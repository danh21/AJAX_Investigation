<?php
    $rows = $_REQUEST['rows'];
    $cols = $_REQUEST['cols'];

    for ($i=0; $i<$rows; $i++) {
        for ($j=0; $j<$cols; $j++)
            print("*");
        print("<br/>");
    }
?>