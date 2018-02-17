 <form action="./?p=upload" method="POST" enctype="multipart/form-data"> 
 <input type="file" name="image" size="50"> <br><br> 
 <input type="Submit" name="submitted" value="Upload"/> </form>

<?php
if(isset($_POST['submitted'])) 
{
$file=$_FILES['image']['name'];
if ($file=$_FILES['image']['name'] !="")
{
$file_tmp=$_FILES['image']['tmp_name'];
$path="avatar/".$file;
if(move_uploaded_file($file_tmp,$path))
{
    echo "file uploaded";
} 
 else
    {
       echo "Could not move file";
     }
}
}
?>