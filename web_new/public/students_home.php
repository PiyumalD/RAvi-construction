<?php require_once("../includes/db_connection.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php  
if (isset($_GET["subject"])) {
	$selected_subject_id=$_GET["subject"];
}else{
	$selected_subject_id=null;
}
?>
<div id="main">
<h2>students menu</h2>
	<p>welcome to the student's area</p>
	<div id="navigation">
	<ul>
		<?php 
		$subject_set=find_all_subjects();
		?>
		<?php  
			while ($subject=mysqli_fetch_assoc($subject_set)) { 
		?>
			<li>
				<a href="students_home.php?subject=<?php echo urlencode($subject['id']); ?>"><?php echo $subject['menu_name']."<br/>";?></a>
			</li>
			<?php } ?>
			<br> 

		<?php if ($selected_subject_id) {?>
			<?php $current_subject_id=find_subject_by_id($selected_subject_id) ?>
			Your Current Selection : <?php echo $current_subject_id['menu_name']; ?>
		<?php  }else{ ?>
			please select one option..
		<?php } ?>
		<br>
	</ul>
	</div>
</div>
<?php mysqli_free_result($subject_set); ?>
<?php include("../includes/layouts/footer.php"); ?>