<?php 

require ("dbconnect.php");
//mysql_select_db("file");
if(isset($_REQUEST["submit"]))
{
	 $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="upload/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);
 mysqli_query("insert into upload(file) value('$file')");
	
	
}
}

?>


<form enctype="multipart/form-data" method="post" action="#">

File Upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">

</form