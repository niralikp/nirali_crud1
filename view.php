<?php 
include("config.php");
include("head.php");
$sql="";
if(isset($_POST['name']) && $_POST['name'] != '' or isset($_POST['city']) && $_POST['city'] != '')
{
	$name = $_POST['name'];
	$city = $_POST['city'];
	$sql = mysql_query("select * from student where name like '%$name%' && city like '%$city%' ");
	
}
else
{
	$sql=mysql_query("select * from student");
}
?>
	
    <body>
	 <div class="block-content collapse in">
     <form action="view.php" method="post">
	 <div class="span12">
	<div class="control-group">
		<div class="controls">
		<label  class="control-label">name:  </label>
        <input class="input-xlarge focused" type="text" name="name" />
        </div>
		<div class="controls">
		<label  class="control-label">city:  </label>
        <input class="input-xlarge focused" type="text" name="city" />
        </div>
        </div>
		<div class="form-actions">
         <button type="submit" name="search" class="btn btn-primary">Search</button>
         </div>
		</div>
		</form>
        </div>
        <div class="navbar navbar-inner block-header"t>
            <div class= "text align:center"><center></center></div>
		</div>
        <div class="block-content collapse in">
            <div class="span12">

  									<table class="table">
						              <thead>
						                <tr>
						                  <th>id</th>
						                  <th>Name</th>
                                          <th>Address</th>
                                          <th>City</th>
                                          <th>Contact</th>
                                          <th>Email</th>
										  <th>Image</th>
										  <th>Remark</th>
										  <th>Update</th>
                                          <th>Delete</th>
						                </tr>
						              </thead>
						              <tbody>
                                    <?php
									while($row = mysql_fetch_array($sql))
									{
									?>
						                <tr>
                                        <?php 
										echo "<td>". $row["id"]."</td>";
										echo "<td>". $row["name"]."</td>";
										echo "<td>". $row["address"]."</td>";
										echo "<td>". $row["city"]."</td>";
										echo "<td>". $row["contact"]."</td>";
										echo "<td>". $row["email"]."</td>";
										echo "<td><img width='100px' height='100px' src='images/". $row["image"]."' /></td>";
										
										echo "<td>". $row["remark"]."</td>";
									?>
  <td><a href="edit.php?id=<?php echo $row["id"]?>" target="_self">Edit</a></td>
  <td><a href="delete.php?id=<?php echo $row["id"]?>" target="_self">Delete</a></td>
						                </tr>
                                        <?php
										 }
										?>                                      
						              </tbody>
						            </table>
                                </div>
                            </div>
<?php include("foot.php"); ?>

    </body>
</html>