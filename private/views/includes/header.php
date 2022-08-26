<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['page_title'] . " | ". WEBSITE_NAME?></title>
    <link rel="stylesheet" href="<?=ASSET?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ASSET?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=ASSET?>css/templatemo-style.css">

</head>
<body>
    <!-- Page Loader -->
    <div id="1loader-wrapper">
        <div id="1loader"></div>

        <div class="1loader-section section-left"></div>
        <div class="1loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                <?=WEBSITE_NAME?>
                <?php 
                echo isset($_SESSION['user_email']) ? "<span style='font-size:12px';> | Hi, ". $_SESSION['user_email'] . "</span>" : ""
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 <?= ($data['page_title']) == "Photos" ? 'active':'';?>" aria-current="page" href="<?=BASE?>index">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2 <?= ($data['page_title']) == "Videos" ? 'active':'';?>" href="<?=BASE?>videos">
                    Videos
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 <?= ($data['page_title']) == "About" ? 'active':'';?>" href="<?=BASE?>about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4 <?= ($data['page_title']) == "Contact" ? 'active':'';?>" href="<?=BASE?>contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4 <?= ($data['page_title']) == "Upload Image" ? 'active':'';?>" href="<?=BASE?>upload/image">Upload_Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4 <?= ($data['page_title']) == "Upload Videos" ? 'active':'';?>" href="<?=BASE?>upload/videos">Upload_videos</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
