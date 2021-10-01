<?php include ('includes/session.php');?>
<?php
	include ('includes/database.php');
	
	if (isset($_POST['post_comment']))
	{
		$user=$_SESSION['id'];
		$content_comment=$_POST['content_comment'];
		$post_id=$_POST['post_id'];
		$user_id=$_POST['user_id'];
		$time=time();
		

		{
			   $sql1 = "SELECT * FROM `user` WHERE user_id = '$user'";
	$query1 = mysqli_query($con, $sql1);
	$array = mysqli_fetch_assoc($query1);

	$username = $array["username"];
	$profile_picture = $array["profile_picture"];

$notify_text = $username. " commented on a post";

	$sql3 = "INSERT INTO `notification`(`user_id`, `notification`, `profile_img`, `created`) VALUES ('$user','$notify_text','$profile_picture','$time')";

			mySQLi_query($con,"INSERT INTO comments (post_id,user_id,name,content_comment,image,created)
			VALUES ('$post_id','$id','$user_id','$content_comment','$profile_picture',$time)");
			

			$query3 = mysqli_query($con, $sql3);
			echo "<script>window.location='feed'</script>";
		}
			
	}
	
?>