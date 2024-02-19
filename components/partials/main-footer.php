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
<div class="container-fluid px-3 py-4 d-flex aling-items-center justify-content-between px-4">
    <div class="">
        <span class="fw-semibold opacity-50 text-wrap"> • Deniz Berkay KALKAN</span>
    </div>
    <div class="">
        <a href="https://github.com/HotTornado" class="d-flex align-items-center gap-2 text-dark text-decoration-none ms-auto max-content" target="_blank">
            <span class="fw-semibold fs-14px text-decoration-none opacity-50 user-select-none">Made By</span>
            <img src="<?=$space?>assets/images/HotTornadoLogoTransparentBlackCropped.png" class="opacity-50" alt="" height="15">
        </a>
    </div>
</div>