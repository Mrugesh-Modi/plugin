<html>
<?php
	global $wpdb;
	$sql="select * from wp_form_data";
	$result=$wpdb->get_results($sql);
?>
<body>
	<?php
		foreach($result as $li)
		{
			echo $li->id;
			echo "<br/>";
			echo $li->name;			
		}
	?>
</body>
</html>
