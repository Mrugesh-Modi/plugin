<?php
/*
Plugin Name: My Custom Plugin
Author: Amit Vallecha
Version: 1.0
*/
/*Add Panel
add_action('admin_menu','form_data_menu');

//Function creation form_data_menu
function form_data_menu()
{
	add_menu_page('Form_data','Form Data',8,__FILE__,'form_data_insert');
	add_menu_page('Form_data_display','Form Data Display',8,__FILE__,'form_data_display');
	
}
*/
add_action('admin_menu', 'form_data_menu');

function form_data_menu(){
add_menu_page('FormData', 'FormData', 'manage_options', 'members-slug', 'form_data_insert');
add_submenu_page( 'members-slug', 'Display Data', 'Display Data', 'manage_options', 'add-members-slug', 'form_data_display');
}
 


//form aiya banavu
function form_data_insert()
{
	include('form.php');
}
function form_data_display()
{
	include('formdis.php');
}

//register activation hook & deactivation hook
register_activation_hook(__FILE__,'form_data_activate');
register_deactivation_hook(__FILE__,'form_data_activate');

function form_data_activate()
{
	global $wpdb;
	$sql="create table wp_form_data (id int(11),name varchar(500));";
	$wpdb->query($sql);	
}
?>

<?php
/*
if you dont understand then visit site link https://onlinewebtutorblog.com/wordpress-crud-tutorial-with-wpdb-object/ (jalsa karo)
n pachi pan kai nai thai to sui javo n chalo daman 


insert
global $wpdb;
$wpdb->insert( $table, $data, $format );

Update

global $wpdb;

$wpdb->update($table, $data, $where, $format = null, $where_format = null);


demo

global $wpdb;

$wpdb->update( 
  $wpdb->prefix."posts", 
  array(
    "post_title" => "Updated Post Title", 
    "post_content" => "This is sample content update of this post", 
    "post_name" => "my-updated-post", 
    "post_excerpt" => "Sample content update"
  ), 
  array("ID" => 4), 
  array("%s", "%s", "%s","%s"), 
  array("%d") 
);

Delete

global $wpdb;

$wpdb->delete(string $table, array $where, array|string $where_format = null)

global $wpdb;

$wpdb->delete(
  $wpdb->prefix."posts",
  array("ID" => 4),
  array("%d")
);

common query
global $wpdb
  
$query = "DELETE FROM wp_posts WHERE ID = 4";

$prepared_query = $wpdb->preapre($query);

$data = $wpdb->query($prepared_query);






*/



?>