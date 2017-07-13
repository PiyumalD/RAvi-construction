<?php 
	function confirm_query($result_set){
		if (!$result_set) {
			# code...
			die("database query failed....");
		}
	}
	function keep_track_of_id($result){
		while ($row=mysqli_fetch_assoc($result)) { 
			return $row['id']. "<br/>";
		}
	}
	function get_course($result){
		while ($row=mysqli_fetch_assoc($result)) { 
			return $row;
		}
	}
	function find_all_subjects(){
		global $connection;
		$query="SELECT * ";
		$query.="FROM students_menu_modi ";
		// $query.="WHERE visible=1 ";
		$query.="ORDER BY position ASC";
		$result=mysqli_query($connection,$query);
		confirm_query($result);
		return $result;
	}
	function navigation(){
		// to highlight words if we need;
		// $output="<ul>";
		// $subject_set=find_all_subjects();
		// while ($subject=mysqli_fetch_assoc($subject_set)) { 
		// 	$output.="<li>";
		// 		$output.="<a href="students_home.php?subject=";
		// 		$output.=urlencode($subject['id']);
		// 		$output.="\">";
		// 		$output.= $subject['menu_name'];
		// 		$output.="</a>";
		// 	$output.="</li>";
		// 	}
		// 	$output.="<br>"; 
		// $output.= "$selected_subject_id";
		// $output.="<br>";
		// $output.="</ul>";
		// return $output;
	}
	function find_subject_by_id($subject_id){
		global $connection;
		$query="SELECT * ";
		$query.="FROM students_menu_modi ";
		$query.="WHERE id={$subject_id} ";
		$query.="LIMIT 1";
		$subject_set=mysqli_query($connection,$query);
		confirm_query($subject_set);
		if ($subject=mysqli_fetch_assoc($subject_set)) {
			return $subject;
		}else{
			return null;
		}
		
	}
?>