<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="bootstrap.min.css">
	<title>Registration</title>
</head>
<body>
	<!-- View the archuive form -->

	<!-- Form in card <BOOSTRAP> -->
	<div class="card col-6 m-auto mt-5">
		<div class="card-header bg-dark text-light lead">
			to subscribe
		</div>
		<div class="card-body shadow-lg">
			<form action="index.php" method="POST" class="px-5 d-flex flex-column" autocomplete="off">
				<input type="text" class="form-control my-2 rounded-0 shadow-none" placeholder="Name user" name="user">

				<input type="password" class="form-control my-2 rounded-0 shadow-none" placeholder="Password" name="password">

				<input type="password" class="form-control my-2 rounded-0 shadow-none" placeholder="Repeat Password" name="r-password">

				<!-- Button the send -->
				<input type="submit" value="SEND" name="submit" class="btn btn-dark rounded-0">
			</form>
		</div>
		<div class="card-footer bg-dark">
			<?php if(!empty($danger)): ?>
				<div class="alert alert-danger text-center">
					<?php echo $danger ?>
				</div>
			<?php elseif (!empty($success)): ?>
				<div class="alert alert-success text-center">
					<?php echo $success; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	
</body>
</html>