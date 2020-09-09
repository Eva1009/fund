<?php 
if(! isset($page_name)) $page_name='';
?>
<nav class="navbar navbar-expand-lg navbar-light ">

    <div class="container">
    <a class="navbar-brand" href="#">募資管理後台</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= $page_name=='data-list' ? 'active' : '' ?> ">
                <a class="nav-link" href="<?= WEB_ROOT ?>/parts/datalist2_delete.php">提案列表</a>
            </li>
            <li class="nav-item <?= $page_name=='data-insert' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= WEB_ROOT ?>/parts/data-insert.php">新增提案</a>
            </li>
            <li class="nav-item <?= $page_name=='data-frecord' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= WEB_ROOT ?>/parts/data-frecord.php">贊助紀錄</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>

        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
        <ul class="navbar-nav">
            <?php if(isset($_SESSION['e_fund_control'])): ?>
                <li class="nav-item">
                        <a class="nav-link"><?= $_SESSION['e_fund_control']['e_designer'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= WEB_ROOT ?>/parts/logout.php">登出</a>
                    </li>

                <?php else: ?>
            <li class="nav-item <?= $page_name=='login' ? 'active' : '' ?> ">
                <a class="nav-link" href="<?= WEB_ROOT ?>/parts/login.php">登入</a>
            </li>
                <?php endif; ?>
        </ul>   
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
    </div>
</nav>

<style>
    .navbar .nav-item.active{
       background-color: #84bace;
       border-radius: 10px;
       text-align: center;
    }

    .navbar .nav-item{
       
       border-radius: 10px;
       text-align: center;
    }

    .navbar {
        background-color:#f8f9f6 ;
       
    }
</style>
