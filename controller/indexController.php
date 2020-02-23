<?php
    if(isset($_REQUEST['submit'])) {
        //scraper library        
        include_once REAL_DOC_ROOT.'/assets/simplehtmldom/simple_html_dom.php';
        $errors = [];
        $data = [];
        set_error_handler(
            function ($err_severity, $err_msg, $err_file, $err_line, array $err_context) {
                // do not throw an exception if the @-operator is used (suppress)
                if (error_reporting() === 0) return false;
            
                throw new ErrorException( $err_msg, 0, $err_severity, $err_file, $err_line );
            },
            E_WARNING
        );
        try {
            $html = file_get_html($_REQUEST['the_link']);
        } catch (Exception $e) {
            $errors[] = $e->getMessage(); //error
        }
        restore_error_handler();
        /*
        examples 
        <meta property="og:type" content="og:product" />
        <meta property="og:title" content="Bangku Cessi" />
        <meta property="og:image" content="https://m2fabelio.imgix.net/catalog/product/cache/image/265x265/beff4985b56e3afdbeabfc89641a4582/i/m/img_8785.jpg" />
        <meta property="og:description" content="" />
        <meta property="og:url" content="https://fabelio.com/ip/bangku-cessi.html" />
            <meta property="product:price:amount" content="161850"/>
            <meta property="product:price:currency" content="IDR"/>
        */
        if(empty($errors)){
            //validation and collecting data
            if(!empty($html->find('meta[property=og:type]', 0)->content) & $html->find('meta[property=og:type]', 0)->content == "og:product"){
                $link           = $html->find('meta[property=og:url]', 0)->content;
                $name           = $html->find('meta[property=og:title]', 0)->content;
                $price          = $html->find('span[class="price"]', 0)->plaintext;//$html->find('meta[property=product:price:amount]', 0)->content;
                $currency       = $html->find('meta[property=product:price:currency]', 0)->content;
                $description    = $html->find('div[id=description]', 0)->plaintext;
                foreach($html->find('script[type="text/x-magento-init"]') as $i){
                    $target = 'mage/gallery/gallery';
                    if(strpos((string)$i->innertext, $target) !== false){
                        $json   = $i->innertext;
                    }
                }
                $created_by     = $_SERVER['REMOTE_ADDR'];
                $image          = $html->find('meta[property=og:image]', 0)->content;
            }else{
                $errors[] = "link was't a product from Fabelio";
            }
            if(empty($errors)){
                // Insert user data into table
                $query = pg_query(
                    $connection, 
                    "
                        INSERT INTO 
                            links(
                                link,
                                name,
                                price,
                                currency,
                                image,
                                description,
                                json,
                                created_by
                            ) 
                        VALUES
                            (
                                '$link',
                                '$name',
                                '$price',
                                '$currency',
                                '$image',
                                '$description',
                                '$json',
                                '$created_by'
                            )
                        RETURNING currval('links_id'::regclass)
                    "
                );
            }  
        } 

        //die(print_r(pg_fetch_array($query)));
       
        //confirmation
        if(!empty($errors)){
            $data['success'] = false; 
            $data['message'] = $errors[0];
        }else{
            if(!$query){
                $data['success'] = false; 
                $data['message'] = $query;
            }else{
                $data['success'] = true; 
                $data['message'] = "Link was successful added";
                $data['id'] = pg_fetch_array($query)['currval'];
            }  
        }
    }
?>