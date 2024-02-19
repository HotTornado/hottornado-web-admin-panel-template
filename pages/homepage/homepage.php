<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "../../components/partials/main-head.php"; ?>
    <title>Panel By HotTornado</title>
</head>

<body>
    <div class="row m-0 p-0">
        <div class="col-xxl-3 col-xl-3 col-lg-4 d-lg-block d-none m-0 p-0">
            <?php include "../../components/partials/main-sidebar.php"; ?>
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-8 col-12 m-0 p-0">
            <?php include "../../components/partials/main-header.php"; ?>
            <div class="container-fluid">
                <button id="edit">Duzenle</button>
            </div>
        </div>
    </div>
    <?php include "../../components/partials/main-footer.php"; ?>
    <?php include "../../components/partials/main-sidebar-open.php"; ?>
    <?php include "../../components/partials/main-js.php"; ?>
    <script>
        var edit = $("#edit");
        edit.click(function () {
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            })
        });
    </script>
</body>

</html>