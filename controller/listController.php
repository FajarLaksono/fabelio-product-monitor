<?php 
    $get_data = mysqli_query(
        $connection,
        "
            SELECT      * 
            FROM        links
            ORDER BY    links.created_at DESC
        "
    );

    while($r = mysqli_fetch_array($get_data)){
        $data[] = $r; 
    }
?>