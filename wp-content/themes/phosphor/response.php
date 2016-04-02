<?php
/**
 * Template Name: Response
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Phosphor
 */
get_header();?>
<style>
#registration_wrapper {
			
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(255,255,255,.6);
z-index: 1001;
}
#popup{
width: 555px;
height: auto;
background: transparent url("http://hunani-infotech.com/cleanstream/wp-content/uploads/2016/02/bg.jpg");
background-repeat: no-repeat;
background-size: cover;
border: 5px solid #000;
border-radius: 25px;
-moz-border-radius: 25px;
-webkit-border-radius: 25px;
box-shadow: #64686e 0px 0px 3px 3px;
-moz-box-shadow: #64686e 0px 0px 3px 3px;
-webkit-box-shadow: #64686e 0px 0px 3px 3px;
position: relative;
top: 150px; left: 375px;
}
.close_popup{	
	position: absolute;
top: -12px;
right: 0px;
background: rgb(74, 178, 234) none repeat scroll 0% 0%;
padding: 5px;
border-radius: 50%;
font-weight: bold;
font-size: 24px;
color: rgb(255, 255, 255);
text-decoration: none;
border: 2px solid;
}
.popup_content {
    text-align: center;
    width: 80%;
    margin: 0px auto;
}
.popup_content h2 {
    margin: 20px 0px;
    text-align: center;
    background-color: #0492D0;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px #fff;
}

.attendee_field {
    width: auto;
    margin-bottom: 0.5em;
}
.attendee_field label {
    width: 40%;
    display: inline-block;
    text-align: left;
}
.generate_results{
	display: block;
margin: 10px auto;
color: rgb(255, 255, 255) !important;
background-color: #4398C7 !important;
}
</style>
 <?php 
 global $wpdb;
$get_cat = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."statement_category ORDER BY 	statement_category_id");
/* print_r($get_cat->statement_category_id); */
 foreach($get_cat as $get_cats){
	 $got_cat[] = $get_cats->statement_category_id;	 
 }
$assesment = $_POST;
foreach($assesment as $k => $v){
	$k2 = explode("_",$k);
	$cat_array[] = $k2[0]."-".$v;	
}
$new_array = array();
foreach($cat_array as $m => $n){
	$n2= explode("-",$n);
	$cat = $n2[0];
	$val = $n2[1];
	$vj[$cat][] = $val;echo "<br>";	
}
foreach($vj as $ke => $vjs){
	$questions = count($vjs);
	$result[$ke] = array_sum($vjs)/count($vjs); 
}
unset($result['submit']);
$results = serialize($result);
?>
 <div class="container">
  
  <form role="form" method="POST" action="">
  <div class="popup_content">
    <h2>SIGN UP TO SEE RESULT</h2>
	
	<p class="attendee_field"><label>Your Name:</label>
	<input type="text" id="attendee_name" name="attendee_name" class="attendee_name" required="required"/></p>
	<p class="attendee_field"><label>Email:</label>
	<input type="email" id="attendee_email" name="attendee_email" class="attendee_email" required="required"/></p>
	<p class="attendee_field"><label>Organization:</label>
	<input type="text" id="attendee_org" name="attendee_org" class="attendee_org"/></p>
	<p class="attendee_field"><label>Role in your organization:</label>
	<input type="text" id="attendee_role" name="attendee_role" class="attendee_role"/></p>
	<input type="hidden" name="result" value="<?php echo  $results ?>"/>
	<input name="attendee_submit" class="generate_results" type="submit" value="GENERATE RESULTS"/>
	    
  </div>
  </form>
 <?php
 if(isset($_POST['attendee_submit'])){
	 $attendee=$_POST['attendee_name'];
		$email = $_POST['attendee_email'];
		$org = $_POST['attendee_org'];
		$role= $_POST['attendee_role'];
		$results = $_POST['result'];
		$wpdb->query("INSERT INTO " .$wpdb->prefix ."attendee (attendee,organization,email,role) VALUES('" .$attendee ."','" .$org."','" .$email."','" .$role."');");
		$attendee_id = $wpdb->insert_id;
		$res = unserialize($results);
		$newresult = array();
		foreach($res as $k => $v){
			$wpdb->query("INSERT INTO " .$wpdb->prefix ."result (attendee_id,statement_category_id,value) VALUES('" .$attendee_id ."','" .$k."','" .$v."');");
			}
			$redirect = "http://localhost/cleanstream/get-link?id=".$attendee_id;
			
			$message = "Thanks for conducting the assessment.<br>
						We are now ready with the compilation of your result for your business. Just click the link below to see your result.<br>
						".$redirect."<br>
						On that page you can also download a pdf for further analysis and to show your peers in the organization.<br>
						There is also a couple of videos that will guide you to make improvements of your result.<br>
						Good luck with your improvement work,<br>
						<strong>Matts Rehnstrom</strong>";
			/* wp_redirect($redirect); */
			$subject = "Assesment Result Link.";
			$from = "info@mattsrehnstrom.com";
			$headers = "From:" . $from;
			if ( mail($email,$subject,$message,$headers) ) { 
				echo '<div class="success">Thanks for conducting the assessment! A link with a customized compilation of your result is sent to <strong>'.$email.'</strong> </div>';
			} else {
			echo '<div class="unsuccess">Please check your email id.</div>';
			}
			
 }
 ?>
</div> 

 <?php get_footer(); ?>