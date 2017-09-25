<?php
include("config.php");
if(isset($_POST['save']))
{	
	//$c_name_save=$_POST['name'];
$eid = $_POST['id'];
$name=$_POST['name'];
$add=$_POST['address'];
$city=$_POST['city'];
$cont=$_POST['contact'];
$email=$_POST['email'];
$img=$_FILES['image']['name'];
$remar=$_POST['remark'];
if(isset($img) && $img != '')
{
	
	mysql_query("update student set name='$name',address='$add',city='$city',contact='$cont',email='$email',remark='$remar',image='$img'  where id='$eid'");
	move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$img);
}
else
{
		mysql_query("update student set name='$name',address='$add',city='$city',contact='$cont',email='$email',remark='$remar'  where id='$eid'");
		
}	
	header("location:view.php");
}


$eid =$_GET['id'];
$result=mysql_query("select * from student where id='$eid'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
	$name=$test['name'];
	
	
mysql_close($con);
?>
<?php
include("head.php");
?>
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-body text-center">
		<h3>Edit</h3>
		<br> <br>
		<form action="edit.php" method="post"   enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>                      
			<div class="form-horizontal">
				<div class="col-md-12">
				    <div class="form-group">
					  <label  class="col-lg-2 control-label">name</label>
						<div class="col-lg-10">
							<input class="form-control" placeholder="name" name="name" type="text" value="<?php echo $test['name']; ?>">
						</div>
					</div>
                    <div class="form-group">
						<label  class="col-lg-2 control-label">Address</label>
						<div class="col-lg-10">
							<input class="form-control" placeholder="Address" name="address" type="Address" value="<?php echo $test['address']; ?>" required>
                        </div>
					</div>
                    <div class="form-group">
						<label for="inputcity" class="col-lg-2 control-label">City</label>
						<div class="col-lg-10">
							<input class="form-control" placeholder="city" name="city" type="city" value="<?php echo $test['city']; ?>" >
                        </div>
					</div>
					<div class="form-group">
						<label for="inputcontact" class="col-lg-2 control-label">Contact</label>
						<div class="col-lg-10">
							<input class="form-control" placeholder="contact" name="contact" type="contact" value="<?php echo $test['contact']; ?>" required>							
						</div>
					</div>
					<div class="form-group">
						<label for="inputemail" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input class="form-control" placeholder="email" name="email" type="email" value="<?php echo $test['email']; ?>">             
						</div>
					</div>
					<div class="form-group">
						<label for="inputimage" class="col-lg-2 control-label">Image</label>
						<div class="col-lg-10">
							<img src="image/<?php echo $test['image']?>" width="200px" height="200px" />
							<input type="file" name="image" id="fileToUpload" >
						</div>
					</div>	
					<div class="form-group">
						<label for="inputphone" class="col-lg-2 control-label">Remark</label>
						<div class="col-lg-10">
							<input class="form-control" placeholder="remark" name="remark" type="remark" value="<?php echo $test['remark']; ?>">
                        </div>
					</div>
				</div>
				<div class="col-md-2">	<input type="submit" class="btn btn-info btn-login-submit btn-block " name="save" value="Update" /> </div>
				<div class="col-md-2">	<input type="reset" class="btn btn-info btn-login-submit btn-block " value="Reset" /> </div>
			</div>            
		</form>
		</div>
	</div>
</div>
<?php include("foot.php"); ?>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>