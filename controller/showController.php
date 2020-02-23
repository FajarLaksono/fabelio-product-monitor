<?php
    $id = $_GET['id'];

    $get_data = mysqli_query(
        $connection,
        "
            SELECT      * 
            FROM        links
            WHERE       links.id = '$id'
            ORDER BY    links.created_at DESC
            LIMIT       1
        "
    );

    while($r = mysqli_fetch_array($get_data)){
        $data[] = $r; 
    }
?>