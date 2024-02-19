<?php
    $space = "";
    $path = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
    $current = explode('/', $path);
    // echo "<pre>";
    // print_r($current);
    // echo "</pre>";
    if (isset($current[3])) {
        $space = "../../";
    } else {
        $space = "";
    }
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?=$space?>css/style.css">
<link rel="stylesheet" href="<?=$space?>css/theme.scss">
<link rel="stylesheet" href="<?=$space?>css/material-icons.css">
<link rel="stylesheet" href="<?=$space?>node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css">
<link rel="stylesheet" href="<?=$space?>node_modules/@tabler/icons-webfont/tabler-icons.css">
<link rel="stylesheet" href="<?=$space?>node_modules/animate.css/animate.css">
<link rel="stylesheet" href="<?=$space?>node_modules/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="<?=$space?>node_modules/jquery-ui/dist/themes/base/jquery-ui.css">
<link rel="stylesheet" href="<?=$space?>node_modules/material-symbols/index.css">
<link rel="stylesheet" href="<?=$space?>node_modules/owl.carousel/dist/assets/owl.carousel.css">
<link rel="stylesheet" href="<?=$space?>node_modules/owl.carousel/dist/assets/owl.theme.default.css">
<link rel="stylesheet" href="<?=$space?>node_modules/summernote/dist/summernote-bs5.css">
<link rel="stylesheet" href="<?=$space?>node_modules/sweetalert2/dist/sweetalert.css">
<link rel="website icon" href="<?=$space?>assets/icons/HotTornadoLogoIconBlack.ico">