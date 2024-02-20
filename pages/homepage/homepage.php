<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include "../../components/partials/main-head.php"; ?>
    <title>Panel By HotTornado</title>
</head>

<body>
    <div class="row m-0 p-0">
        <div class="col-xxl-2 col-xl-2 col-lg-4 d-lg-block d-none m-0 p-0">
            <?php include "../../components/partials/main-sidebar.php"; ?>
        </div>
        <div class="col-xxl-10 col-xl-10 col-lg-8 col-12 m-0 p-0">
            <?php include "../../components/partials/main-header.php"; ?>
            <form method="post">
                <textarea id="summernote" name="editordata"></textarea>
            </form>
            <div class="spacer py-5"></div>
            <span id="TEXT"></span>
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
    var test = $("#editordata");
    var edit = $("#edit");

    
    edit.click(function() {
    var codeText = $('#summernote').summernote('code');
    var plainText = $($("#summernote").summernote("code")).text()
    console.log(codeText);
    console.log(plainText);
        $.ajax({
            url: "tools/edit.php",
            data: {
                name: codeText
            },
            method: "POST",
            success: function(response) {
                console.log(response);
                $("#TEXT").append(response);
                Swal.fire({
                    title: "Header",
                    text: response,
                    icon: "success"
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
    </script>
</body>

</html>