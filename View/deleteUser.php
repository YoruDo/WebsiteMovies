<?php 
	$id = $_REQUEST['uid'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
	<?php 

		require_once("../Controller/UserController.php");
		$user = new UserCtrl();
		$isOK = $user->deleteUserById($id);
		if($isOK == TRUE) {
			echo
			"
				<div class='alert alert-success' role='alert'>
				  Đã xóa thành công
				</div>
			";
		} else {
			echo
			"
				<div class='alert alert-warning' role='alert'>
				  Chưa xóa được
				</div>
			";
		}
	?>
</body>
</html>