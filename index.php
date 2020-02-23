<?php
require '_env.php';
require REAL_DOC_ROOT.'/controller/indexController.php';

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
        <?php 
            if(isset($data)){
                if($data['success']){
                    ?>
                        <div class="alert alert-success"><?php echo $data['message'] ?></div>
                    <?php
                    header("Location: ".BASE_URL."/show.php?id=".$data["id"]); 
                    exit();
                }else{
                    ?>
                        <div class="alert alert-danger"><?php echo $data['message'] ?></div>
                    <?php
                }
            }
        ?>
        <div class="card">
            <div class="card-header">
                Insert New Fabelio Link:
            </div>
            <div class="card-body">
                <div class="card-text">
                <form class="form-block" action="<?php echo BASE_URL.'/index.php'?>" method="POST">
                    <label class="my-1 mr-2" for="the_link">Link</label>
                    <input name="the_link" type="text" class="form-control" id="the_link" aria-describedby="link" placeholder="https://fabelio.com/...">

                    <button name="submit" value="add" type="submit" class="btn btn-primary my-1">Submit</button>
                </form>
                </div>
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