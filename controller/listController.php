<?php 
    $get_data = pg_query(
        $connection,
        "
            SELECT      * 
            FROM        links
            ORDER BY    links.created_at DESC
        "
    );

    while($r = pg_fetch_array($get_data)){
        $data[] = $r; 
    }
?>