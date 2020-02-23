<?php
require '_env.php';
require REAL_DOC_ROOT.'/controller/showController.php';

$page_title = " - Price Monitor Web App";
$page_description = "Fabelio Price Monitor Web App";
$page_keyword = "Fabelio Price Monitor Web App";
$page_author = "Fajar Laksono";

function head_section(){

}

function header_section(){
    
}

function body_section(){
    global $data;
    ?>
        <br>
        <div class="card">
            <div class="card-header">
                Link Information:
            </div>
            <div class="card-body">
                <dl>
                    <dt>Link:</dt>
                    <dd><?php echo !empty($data['0']['link'])?$data['0']['link']:'-'; ?></dd>

                    <dt>Name:</dt>
                    <dd><?php echo !empty($data['0']['name'])?$data['0']['name']:'-';?></dd>
                    
                    <dt>Price:</dt>
                    <dd><?php echo !empty($data['0']['price'])?$data['0']['price']:'-';?></dd>
                    
                    <dt>Currency:</dt>
                    <dd><?php echo !empty($data['0']['currency'])?$data['0']['currency']:'-';?></dd>
                    
                    <dt>Description:</dt>
                    <dd><?php echo !empty($data['0']['description'])?$data['0']['description']:'-';?></dd>

                    <dt>Submitted at:</dt>
                    <dd><?php echo !empty($data['0']['created_at'])?$data['0']['created_at']:'-';?></dd>
                
                    <dt>Submitted by:</dt>
                    <dd><?php echo !empty($data['0']['created_by'])?$data['0']['created_by']:'-';?></dd>
                
                    <dt>Image:</dt>
                    <dd>
                        <img class="img-fluid" alt="Responsive image" src="<?php echo $data['0']['image']?>">
                    </dd>
                    
                    <dt>Images:</dt>
                    <dd>
                        <?php 
                            $the_json = json_decode($data[0]['json'], true);
                            //echo '<pre>';
                            //print_r($the_json);
                            //echo '</pre>';
                            $images = $the_json['[data-gallery-role=gallery-placeholder]']['mage/gallery/gallery']['data'];
                            // echo '<pre>';
                            // print_r($images);
                            // echo '</pre>';
                        ?>
                        <?php foreach($images as $i): ?>
                            <img class="img-thumbnail" src="<?php echo $i['img']?>">
                        <?php endforeach; ?>
                    </dd>
                </dl>
            </div>
        </div>
    <?php
}

function footer_section(){
   ?>
        <p>Created by Fajar Laksono for Fabelio</p>
   <?php
}

function foot_section(){
    
}

require REAL_DOC_ROOT.'/inc/layout.inc.php';
?>