<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>



<?php 
	$student_id="980456y";
	$query="SELECT * ";
	$query.="FROM student_details_modi ";
	$query.="WHERE student_id = '$student_id'";
	$result=mysqli_query($connection,$query);
	confirm_query($result);
	if (!$result) {
		die("database query fail....");
	}
?>



<?php include("../includes/layouts/header.php"); ?>



<div id="main">
	<div id="page">
		<h2>view course details</h2>
	</div>
	<div id="navigation">
	<?php 
		$student_id=keep_track_of_id($result);
		echo $student_id;
		$student_course=get_course($result);
		echo $student_course;
	?>
	<br>
	</div>
</div>
<?php 
	mysqli_free_result($result);
?>


<?php include("../includes/layouts/footer.php"); ?>


