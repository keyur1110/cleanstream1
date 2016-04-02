<?php
/**
 * Template Name: Result
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Phosphor
 */
get_header(); ?>
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
<?php 	global $wpdb;
		$attendee_id = $_GET['id'];
		$attendee_details=$wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."attendee where attendee_id=".$attendee_id);
		/* print_r($attendee_details); */
		$attendee_name=$attendee_details[0]->attendee;
		$attendee_organization=$attendee_details[0]->organization;
		$attendee_email=$attendee_details[0]->email;
		$attendee_role=$attendee_details[0]->role;
		$attendee_result=$wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."result where attendee_id=".$attendee_id);
		$newresult = array();
		foreach($attendee_result as $result){
			$newresult += array($result->statement_category_id=>$result->value); 
		}
		$res = array();
		foreach($newresult as $k => $v){			
			$catname=$wpdb->get_results("SELECT statement_category FROM ". $wpdb->prefix ."statement_category where statement_category_id=".$k);
			$res += array($catname[0]->statement_category=>$v); 
			}
		
/* require_once('SVGGraph/SVGGraph.php');  */
$values = $res;
$str_val=array_map('intval', array_slice(array_values($values), 0));
/* print_r($str_val);
$settings = array(
  'back_colour'       => '#eee',    'stroke_colour'      => '#000',
  'back_stroke_width' => 0,         'back_stroke_colour' => '#eee',
  'axis_colour'       => '#333',    'axis_overlap'       => 2,
  'axis_font'         => 'Georgia', 'axis_font_size'     => 14,
  'grid_colour'       => '#666',    'label_colour'       => '#000',
  'grid_straight'	  => true,		'show_subdivisions'	 => true,
  'pad_right'         => 20,        'pad_left'           => 20,
  'link_base'         => '/',       'link_target'        => '_top',
  'fill_under'        => true,		'crosshairs'		 => true,
  'show_subdivisions' => true,
  'marker_size'       => 5,
  'marker_type'       => ('square'),
  'marker_colour'     => array('yellow', 'red')
);

 
$colours = array(array('red', 'yellow'), array('blue', 'white'));
$links = array('Dough' => 'jpegsaver.php', 'Ray' => 'crcdropper.php',
  'Me' => 'svggraph.php');
 
$graph = new SVGGraph(500, 400, $settings);
$graph->colours = $colours;
$graph->Values($values);
$graph->Links($links); */
/* $graph->Render('MultiRadarGraph'); */
/* $output = $graph->fetch('MultiRadarGraph'); */?>

<div id="primary" class="content-area">
<div class="bottum_btn">
    	<div class="container">
		
		</div>
		<div class="container">
		<div class="description_h1">Assesment Result <?php echo do_shortcode('[printfriendly]');?></div>
		<div class="attendee_details">
		<table>
		<tr>
		<td>
		Name
		</td>
		<td>
		<em>: <?php echo $attendee_name;?></em>
		</td>
		</tr>
		<tr>
		<td>
		Email Address
		</td>
		<td>
		<em>: <?php echo $attendee_email;?></em>
		</td>
		</tr>
		<tr>
		<td>
		Organization
		</td>
		<td>
		<em>: <?php echo $attendee_organization;?></em>
		</td>
		</tr>
		<tr>
		<td>
		Role
		</td>
		<td>
		<em>: <?php echo $attendee_role;?></em>
		</td>
		</tr>
		</table>
		</div>
        <div class="graph"><canvas id="cvs">[No canvas support]</canvas></div>
					
        </div>
    </div>
</div>
<script src="../wp-content/themes/phosphor/RGraph/libraries/RGraph.common.core.js" ></script>
<script src="../wp-content/themes/phosphor/RGraph/libraries/RGraph.common.tooltips.js"></script>
<script src="../wp-content/themes/phosphor/RGraph/libraries/RGraph.common.effects.js"></script>
    <script src="../wp-content/themes/phosphor/RGraph/libraries/RGraph.common.dynamic.js" ></script>
    <script src="../wp-content/themes/phosphor/RGraph/libraries/RGraph.common.key.js" ></script>
    <script src="../wp-content/themes/phosphor/RGraph/libraries/RGraph.drawing.rect.js" ></script>
    <script src="../wp-content/themes/phosphor/RGraph/libraries/RGraph.rose.js" ></script>
	
   <script>
   var catnames = <?php print json_encode(array_keys($values));?>;
	var results = <?php print json_encode(array_values($str_val));?>;
	var tooltipval = <?php print json_encode(array_values($values));?>;
    window.onload = function ()
    {
		var canvas = document.getElementById("cvs");

        RGraph.Reset(canvas);

        canvas.width  = jQuery(window).width() * 0.6;
    canvas.height = jQuery(window).width() * 0.5;

    var text_size = Math.min(12, (jQuery(window).width() / 1000) * 10 );
    var linewidth = jQuery(window).width() > 500 ? 2 : 1,
        linewidth = jQuery(window).width() > 750 ? 3 : linewidth;
		
	        var rose = new RGraph.Rose({
            id: 'cvs',
            data: results,
			
            options: {
				variant: 'stacked',
				labelsAxes: '',
                margin: 2.5,
                /* anglesStart: -(RGraph.HALFPI/2), */
                colors: ['#4CFF4C','#B86CFE','#FE6C6C','#8AA7FC','#BCFAA6','#C3D0F8'],
				key:catnames,
				keyBackground:'#fff',
				keyColorShape: 'circle',
				strokestyle: 'rgba(0,0,0,0)',
				 labels: catnames,
				  tooltips: tooltipval,
				  linewidth:linewidth,
                colorsSequential: true
            }
        }).roundRobin();
		
    };
</script>
 <?php get_footer(); ?>