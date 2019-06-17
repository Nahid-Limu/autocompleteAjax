<?php
$con = mysqli_connect("localhost","root","","autocompleteAjax") or die("fail to conncet");

if (isset($_POST['query'])) {
	$output = '';

	$sql = "SELECT * FROM `searches` WHERE data LIKE '%".$_POST['query']."%'";

	$result = mysqli_query($con, $sql);

	$output = '<ul class="list-unstyled">';

	if (mysqli_num_rows($result)>0) {
		
		while ($row = mysqli_fetch_assoc($result)) {
			
			$output .='<li>'.$row["data"].'</li>';
		}
	}
	else{
		$output .='<li>Country Not Found</li>';
	}

	$output .='</ul>';	

	echo $output;

}
?>