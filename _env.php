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
    define("DB_HOST", "ec2-54-197-34-207.compute-1.amazonaws.com"); //needs to set according to your environment
    define("DB_NAME", "d1a7jomefl9as0"); //needs to set according to your environment
    define("DB_USERNAME", "glnhdeyxszvvxe"); //needs to set according to your environment
    define("DB_PASSWORD", "54b4e6131309739db2627e463269eb726927f8b3df3ab84c3e1b66f1f175a255"); //needs to set according to your environment
    include_once REAL_DOC_ROOT.'/config/database.php';
?>
