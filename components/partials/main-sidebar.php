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
<div class="container-fluid py-3 d-flex justify-content-center align-items-center">
    <img src="<?=$space?>assets/images/HotTornadoLogoTransparentBlackCropped.png" alt="" height="75" class="">
</div>
<!-- <hr class="p-0 m-0"> -->
<div class="container-fluid py-3 px-0 mx-auto">
    <div class="accordion accordion-flush border-none" id="accordionPanelsStayOpenExample">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#C1" aria-expanded="true" aria-controls="C1">
                    Homepage
                </button>
            </h2>
            <div id="C1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <a href="<?=$space?>pages/homepage/homepage.php">Homepage</a>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#C2" aria-expanded="false" aria-controls="C2">
                    Accordion Item #2
                </button>
            </h2>
            <div id="C2" class="accordion-collapse collapse">
                <div class="accordion-body">
                    
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#C3" aria-expanded="false" aria-controls="C3">
                    Accordion Item #3
                </button>
            </h2>
            <div id="C3" class="accordion-collapse collapse">
                <div class="accordion-body">
                    
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#C4" aria-expanded="false" aria-controls="C4">
                    Accordion Item #3
                </button>
            </h2>
            <div id="C4" class="accordion-collapse collapse">
                <div class="accordion-body">
                    
                </div>
            </div>
        </div>

    </div>
</div>