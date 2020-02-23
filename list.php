<?php
require '_env.php';
require REAL_DOC_ROOT.'/controller/listController.php';

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
                Submited Links:
            </div>
            <div class="card-body">
                <div class="card-text">
                    <?php if(!empty($data)): ?>
                    <table class="table table-resposive">
                        <thead>
                            <tr>
                                <th class="">Date</th>
                                <th class="">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $r): ?>
                                <tr>
                                    <td><?php echo $r['created_at'] ?></td>
                                    <td>
                                        <a href="<?php echo BASE_URL.'/show.php?id='.$r['id']?>" class="btn-link">
                                            <?php echo $r['link'] ?>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                        <h3>
                            No data found, please start to insert a link, 
                            <a href="<?php echo BASE_URL ?>">come here</a>. 
                        </h3>
                    <?php endif; ?>
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