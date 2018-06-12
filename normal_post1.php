<? php
if($_FILES["file"]){
 move_upload_file($_FILES["file"]["tmp_name"],"./desktop/tonkatsu.jpg");
 }
 ?>
 
 <form action="./normal_post1.php" method="POST enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="ファイルをアップロードする"
 </form>
 