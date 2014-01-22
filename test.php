<?php require('diff.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
	<head>
		<title></title>
		<style type="text/css">
			.del {
				background:#ffcccc;
				color:#440000;
			}
			.add {
				background:#ccffcc;
				color:#004400;
			}
		</style>
	</head>

	<body>
		<?php
		if(isset($_POST['sent'])) {
			$result = diff($_POST['old'],$_POST['new']);
		?>
		<h1>Results</h1>
		<?php echo($result);?>
		<?php
		}
		?>
		<form action="test.php">
			<textarea name="old" rows="10" cols="30" placeholder="Enter old">
			</textarea><br />
			<br />
			<textarea name="new" rows="10" cols="30" placeholder="Enter old">
			</textarea>
			<input type="hidden" name="sent" value="1" />
			<br />
			<button type="submit">Check</button>
		</form>
	</body>
</html>