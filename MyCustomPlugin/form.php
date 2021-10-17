<html>
	<body>
		<form method='post'>
			<input type="number" name="id"/>
			<input type="text" name="name"/>
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>
<?php
	if(isset($_POST["submit"]))
	{
		$id=$_POST["id"];
		$name=$_POST["name"];
		global $wpdb;
		$sql=$wpdb->insert("wp_form_data",array("id"=>$id,"name"=>$name));
		if($sql==true)
		{
			echo "<script>alert('inserted sucessfully');</script>";
		}
		
	}
?>