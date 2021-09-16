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
    .column1{
        width: 80px!important;
    }
    .column4{
        text-align: center;
    }
</style>
<body>

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
                        foreach ($config['project'] as $key=>$project)
                        {
                        ?>
								<tr>
									<td class="column1"><?= $i++ ?></td>
									<td class="column2"><?= $project['name'] ?></td>
									<td class="column3"><?= $project['projectPath']  ?></td>
									<td class="column4"><?= $project['urlServer']  ?></td>
									<td class="column5">
                                        <a href="execution.php?project=<?= $key ?>" class="form-control btn-success text-center">
                                            Build
                                        </a>
                                    </td>
								</tr>
                        <?php
                        }
                        ?>

						</tbody>
					</table>
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

</body>
</html>
