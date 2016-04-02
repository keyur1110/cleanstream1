<?php
/**
 * Template Name: Details
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
.custom_hide {
            display: none;
        }

        .custom_show {
            display: block;
        }
		
</style>
<?php

 global $wpdb;
	$categories = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."statement_category ORDER BY 	statement_category_id");
	/* print_r($categories); */	
	
	/*category index array */
	/* $cat_count = count($categories);
	$cat_id = $categories;
	foreach($cat_id as $catid){
	$cattid[] = $catid->statement_category_id;
	}
	print_r($cattid);
	echo $cattid[0]; */
	$j = 0;
	$cat = $categories;
	$catcount=count($categories);
	$catcount;
	?>
	<div id="primary" class="content-area">
		<div class="main_part">
    	<div class="container">
		<form id="radio-demo" class="radio-demo" action="<?php echo get_site_url(); ?>/register-response" method="POST">
		<?php
	/* print_r($categories); */
	
	/*loop to get questions for each categories*/
	foreach($cat as $categories){		
	$software = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."statement where statement_category_id =".$categories->statement_category_id);
	$j++;
		$table = $software;
		$c_id = $categories->statement_category_id;		
		$i = 0;
		
		?>
		
		 <div class="custom_hide" id="page_<?php echo $j;?>">
		 <?php
		 $cat_name = $categories->statement_category;
		 /*loop for the number of questions per category */
		foreach($table as $software) {
			$i++; 
			?>
		
	
            <div class="question_one">
                <p><?php echo $i.". ".$software->statement;?></p>
                
               
                  
                  <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="first-choice-<?php echo $i;?>" value="<?php echo 1*$software->weight;?>" /> 
                    <label for="first-choice">1</label>
    			  </label>
                  
                   <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="second-choice-<?php echo $i;?>" value="<?php echo 2*$software->weight;?>" /> 
                    <label for="second-choice">2</label>
    			  </label>
                  
                   <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="third-choice-<?php echo $i;?>" value="<?php echo 3*$software->weight;?>" /> 
                    <label for="third-choice">3</label>
    			  </label>
                  
                   <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="four-choice-<?php echo $i;?>" value="<?php echo 4*$software->weight;?>" /> 
                    <label for="four-choice">4</label>
    			  </label>
                  
                   <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="five-choice-<?php echo $i;?>" value="<?php echo 5*$software->weight;?>" /> 
                    <label for="five-choice">5</label>
    			  </label>
                  
                   <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="six-choice-<?php echo $i;?>" value="<?php echo 6*$software->weight;?>" /> 
                    <label for="six-choice">6</label>
    			  </label>
                  
                   <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="seven-choice-<?php echo $i;?>" value="<?php echo 7*$software->weight;?>" /> 
                    <label for="seven-choice">7</label>
    			  </label>
                  
                   <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="eight-choice-<?php echo $i;?>" value="<?php echo 8*$software->weight;?>" /> 
                    <label for="eight-choice">8</label>
    			  </label>
                  
                   <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="nine-choice-<?php echo $i;?>" value="<?php echo 9*$software->weight;?>" /> 
                    <label for="nine-choice">9</label>
    			  </label>
                  
                  <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="ten-choice-<?php echo $i;?>" value="<?php echo 10*$software->weight;?>" /> 
                    <label for="ten-choice">10</label>
    			  </label>
				  
				  <label class="radio-inline">
      				<input type="radio" name="<?php echo $c_id.'_'.$i;?>" id="ten-choice-<?php echo $i;?>" value="<?php echo 0*$software->weight;?>" /> 
                    <label for="ten-choice">No Opinion</label>
    			  </label>
                 <!-- <input type="hidden" name="currentID" value="<?php echo $c_id; ?>" />-->
                  
                  
		</div> <?php }?>
		<div class="bottum_btn">
    	<div class="">
        	
			<?php if($j > 1){?>
			<div class="back_btn">
				<a onclick="custom_back(<?php echo $j-1;?>)"><i class="fa fa-chevron-circle-left">Back</i> </a>
			</div>
			<?php
			}
			if($j == $catcount){?>
			<div class="next_btn">
			<input name="submit" type="submit" id="submit_btn" value="submit""><i class="fa fa-chevron-circle-right"></i></input>
			</div>
			<!--<a name="submit"  id="submit_btn" onClick="PopUp()">submit<i class="fa fa-chevron-circle-right"></i>
			</a>-->
		<?php } else
		{
			?>
			<div class="next_btn">
			<a onclick="custom_next(<?php echo $j+1;?>)">Next<i class="fa fa-chevron-circle-right"></i> </a>
			</div><?php
		}?>
        </div>
    </div>
		</div>
		
	<?php }?>
		</form>            
        </div>
    </div>
<!-----------------------------Footer-Start----------------------------------->
	
<!-----------------------------Footer-Finish---------------------------------->
	</div><!-- #primary -->
	
<script>
jQuery(document).ready(function() {
		jQuery('#page_1').removeClass('custom_hide');
        jQuery('#page_1').addClass('custom_show');
      });
function custom_next(val) {
            var val1 = "#page_" + val;
            var val2 = "#page_" + (val - 1);
            jQuery(val1).removeClass("custom_hide");
            jQuery(val1).addClass("custom_show");
            jQuery(val2).removeClass("custom_show");
            jQuery(val2).addClass("custom_hide");
            jQuery("#page_no").html("Page "+val);
        }

        function custom_back(val) {
            var val1 = "#page_" + val;
            var val2 = "#page_" + (val + 1);
            jQuery(val1).removeClass("custom_hide");
            jQuery(val1).addClass("custom_show");
            jQuery(val2).removeClass("custom_show");
            jQuery(val2).addClass("custom_hide");
            jQuery("#page_no").html("Page "+val);
        }
</script>
<script type="text/javascript">
function PopUp(){
        document.getElementById('registration_wrapper').style.display="block"; 
}
function close_PopUp(){
        document.getElementById('registration_wrapper').style.display="none"; 
}
/* jQuery(function(){
  jQuery('input[name="radio-group-1_2"]').click(function(){
    if (jQuery(this).is(':checked'))
    {
      alert(jQuery(this).val());
    }
  });
}); */
/* jQuery(document).ready(function(){
   setTimeout function(){
      PopUp();
   },5000); // 5000 to load it after 5 seconds from page load
}); */
</script>
<?php  /* get_sidebar(); */ ?>
<!--<div id="registration_wrapper">
  <div id="popup">
  <a class="close_popup" id="close_popup" onclick="close_PopUp()">X</a>
  <form role="form" method="POST">
  <div class="popup_content">
    <h2>SIGN UP TO SEE RESULT</h2>
	
	<p class="attendee_field"><label>Your Name:</label>
	<input type="text" id="attendee_name" class="attendee_name" required="required"/></p>
	<p class="attendee_field"><label>Email:</label>
	<input type="email" id="attendee_email" class="attendee_email" required="required"/></p>
	<p class="attendee_field"><label>Organization:</label>
	<input type="text" id="attendee_org" class="attendee_org"/></p>
	<p class="attendee_field"><label>Role in your organization:</label>
	<input type="text" id="attendee_role" class="attendee_role"/></p>
	
	<input class="generate_results" type="submit" value="GNERATE RESULTS"/>
	    
  </div>
  </form>
  </div>
</div>-->
<?php get_footer(); ?>
