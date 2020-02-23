<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-warning">
        <a class="navbar-brand" href="<?php echo BASE_URL?>"><?php echo APP_NAME?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/list.php'?>">List</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php 
        header_section();
    ?>
</header>