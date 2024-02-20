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
<script src="<?=$space?>node_modules/@popperjs/core/dist/umd/popper.js"></script>
<script src="<?=$space?>node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?=$space?>node_modules/@tabler/icons/dist/umd/tabler-icons.js"></script>
<script src="<?=$space?>node_modules/jquery/dist/jquery.js"></script>
<script src="<?=$space?>node_modules/jquery-ui/dist/jquery-ui.js"></script>
<script src="<?=$space?>node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js"></script>
<script src="<?=$space?>node_modules/owl.carousel/dist/owl.carousel.js"></script>
<script src="<?=$space?>node_modules/summernote/dist/summernote-bs5.js"></script>
<script src="<?=$space?>node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="<?=$space?>js/script.js"></script>
<script src="<?=$space?>js/summernote.js"></script>
