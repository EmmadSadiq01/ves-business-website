<?php
$im_id = $_POST['im_id'];
if(isset($_POST['submit']))
{
	$extension=array('jpeg','jpg','png', 'pdf','docx');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		$filename=$_FILES['image']['name'][$key];
		$filename_tmp=$_FILES['image']['tmp_name'][$key];
		echo '<br>';
		$ext=pathinfo($filename,PATHINFO_EXTENSION);

		$finalimg='';
		// if(in_array($ext,$extension))
		if(in_array($ext,$extension))
		{
			if(!file_exists('upload/'.$filename))
			{
			move_uploaded_file($filename_tmp, 'upload/'.$filename);
			$finalimg=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, 'upload/'.$newfilename);
				 $finalimg=$newfilename;
				 
			}
			//insert
			// $insertqry="INSERT INTO `maintenanace_img`(`recept_no`, `image_name`) VALUES ($im_id,'$finalimg')";
			// mysqli_query($conn,$insertqry);
		
			// header('Location: ');
			header('Location: careers.php');

		}
		else
		{
			header('Location: careers.php');
		}
	}
}
?>