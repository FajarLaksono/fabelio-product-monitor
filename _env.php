<?php
    //contains file and directory management
    define("BASE_URL", (
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' 
            ? "https" 
            : "http"
        ).'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
    );

    define("PRO_DIR", ""); //needs to set according to your environment
    define("APP_NAME", "Fabelio Price Monitor"); //needs to set according to your environment
    define("DIR_NAME", dirname(__FILE__));
    define("DIR_ROOT", $_SERVER['DOCUMENT_ROOT']);
    define("REAL_DOC_ROOT", DIR_ROOT.PRO_DIR);
    
    //database config
    define("DB_HOST", "localhost"); //needs to set according to your environment
    define("DB_NAME", "fabelio_link_collector"); //needs to set according to your environment
    define("DB_USERNAME", "root"); //needs to set according to your environment
    define("DB_PASSWORD", ""); //needs to set according to your environment
    include_once REAL_DOC_ROOT.'/config/database.php';
?>
