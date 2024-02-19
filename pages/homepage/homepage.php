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
                <input class="form-control" id="test" type="text">
                <button class="btn btn-primary" id="edit">Duzenle</button>
            </div>
        </div>
    </div>
    <?php include "../../components/partials/main-footer.php"; ?>
    <?php include "../../components/partials/main-sidebar-open.php"; ?>
    <?php include "../../components/partials/main-js.php"; ?>
    <script>
        var test = $("#test");
        var edit = $("#edit");
        edit.click(function () {
            $.ajax({
                url: "tools/edit.php",
                data: { name: test.val() },
                method: "POST",
                success: function (response) {
                    console.log(response);
                    Swal.fire({
                        title: response,
                        text: "That thing is still around?",
                        icon: "question"
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    </script>
</body>

</html>