<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mg Build</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="lib/view/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lib/view/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lib/view/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lib/view/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lib/view/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lib/view/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="lib/view/css/util.css">
    <link rel="stylesheet" type="text/css" href="lib/view/css/main.css">
    <!--===============================================================================================-->
</head>
<style>
    .column1 {
        width: 80px !important;
    }

    .column4 {
        text-align: center;
    }

    #box-cmd {
        height: 220px;
        opacity: 0.6;
        position: -webkit-sticky;
        position: -moz-sticky;
        position: -ms-sticky;
        position: -o-sticky;
        top: 15px;

    }

    .success {
        background-color: #1e7e34;
        color: white;
    }

    .panding {
        background-color: #bd4147;
        color: white;
    }

    #loader-image {
        position: fixed;
        width: 80px;
        height: 80px;
        top: 20px;
        right: 0;
        left: 0;
        margin: auto;
        animation-name: spinss;
        animation-duration: 2000ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes spinss {
        0% {
            transform: rotate(0deg);
        }
        50% {
            transform: rotate(90deg);
        }
        100% {
            transform: rotate(0deg);
        }
    }

</style>
<body>
<div>
    <img src="lib/view/images/folder.png" id="loader-image"/>
</div>
<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">count</th>
                        <th class="column2">Project Name</th>
                        <th class="column3">Path</th>
                        <th class="column4 ">Url Server</th>
                        <th class="column5 text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    foreach ($config['project'] as $key => $project) {
                        ?>
                        <tr>
                            <td class="column1"><?= $i++ ?></td>
                            <td class="column2"><?= $project['name'] ?></td>
                            <td class="column3"><?= $project['projectPath'] ?></td>
                            <td class="column4"><?= $project['urlServer'] ?></td>
                            <td class="column5">
                                <button url="execution.php?project=<?= $key ?>"
                                        class="form-control btn btn-success text-center btn-action">
                                    Build
                                </button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>
                </table>
                <div class="card m-t-8" id="box-cmd">
                </div>

            </div>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="lib/view/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="lib/view/vendor/bootstrap/js/popper.js"></script>
<script src="lib/view/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="lib/view/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="lib/view/js/main.js"></script>
<script>

    $("#loader-image").hide()
    let text = '<pre>'
    $(".btn-action").on('click', function (event) {
        $("#loader-image").show()
        let url = $(this).attr('url')
        $(this).attr('disabled', true)
        let thisBtn = $(this)
        text += ''
        var xhr = $.ajax({
            type: "POST",
            url: url,
            data: "",
            success: function (msg) {
                $("#loader-image").hide()
                thisBtn.removeAttr('disabled')
                text += msg
                $('#box-cmd').html(text)
            }
        });


        $('#box-cmd').html(text)
    });

</script>

</body>
</html>
