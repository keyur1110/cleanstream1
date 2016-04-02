<?php

  /**
  * Plugin Name: Statements
  **/  
  include('statement-categories.php');
 /*removal of other menu pages */
  function remove_menus(){
  
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php' );                   //Posts
  /* remove_menu_page( 'upload.php' );  */                //Media
  /* remove_menu_page( 'edit.php?post_type=page' ); */    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  /* remove_menu_page( 'themes.php' );  */                //Appearance
  /* remove_menu_page( 'plugins.php' );  */               //Plugins
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  /* remove_menu_page( 'options-general.php' ); */        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );

/*add statement_plugin_menu pages */
add_action('admin_menu', 'statement_plugin_menu');
function statement_plugin_menu() {
    if (is_admin()){
        add_menu_page('Statements', 'Statements', 'manage_options', 'statements-options', 'statement_plugin_options');
    }
}
/*add Category_menu pages */
add_action('admin_menu', 'cat_menu');
function cat_menu() {
    if (is_admin()){
        add_submenu_page('statements-options','Category', 'Category', 'manage_options', 'cat-options', 'statement_plugin_cat_options');
    }
}



/**Get all the data from the tabe wp_bor_software**/
function bor_get_statement() {
    global $wpdb;
    $software = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."statement ORDER BY statement_id");
    return $software;
	
}

   
    
	


/**Get an specific row from the table wp_bor_software**/
function bor_get_statementrow($id) {
    global $wpdb;
    $the_software = $wpdb->get_results("SELECT * FROM " .$wpdb->prefix ."statement WHERE statement_id='".$id."'");
    if(!empty($the_software[0])) {
        return $the_software[0];
    }
    return;
}
/* global $category;
$category = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."statement_category ORDER BY statement_category_id"); */

function bor_statement_meta_box() {
	global $wpdb;
	$category = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."statement_category ORDER BY statement_category_id");
	/* print_r ($category); */
    global $edit_software;
?>
    <p>Statement: <textarea rows="4" cols="50" name="statement"><?php if(isset($edit_software)) echo $edit_software->statement;?></textarea></p>
  <!--<p>Statement category: <input type="text" name="statement_category_id" value="<?php if(isset($edit_software)) echo $edit_software->statement_category_id;?>" /></p>-->
   <p>Statement category: <select name="statement_category_id" required>
						<option value="" selected="selected">Select</option>
						<?php 
							foreach ( $category as $cat )
							{  ?>
								<option value="<?php echo $cat->statement_category_id; ?>" <?php if($cat->statement_category_id == $edit_software->statement_category_id){
										echo "selected";
								} ?>><?php echo $cat->statement_category; ?></option>
							<?php }
						?>        
						</select>
			</p>
	
    <p>Weight: <input type="text" name="weight" value="<?php if(isset($edit_software)) echo $edit_software->weight;?>" /></p>
    <!--<p>License: <input type="text" name="bor_license" value="<?php if(isset($edit_software)) echo $edit_software->license;?>" /></p>-->
<?php
}

function statement_plugin_options(){
    /**Manipulate data of the custom table**/
    statement_action();
    if (empty($_GET['edit'])) {
      /**Display the data into the Dashboard**/
        bor_manage_statement();
    } else {
      /**Display a form to add or update the data**/
        bor_add_statement();  
    }
}
 
function statement_action(){
    global $wpdb;

    /**Delete the data if the variable "delete" is set**/
    if(isset($_GET['delete'])) {
        $_GET['delete'] = absint($_GET['delete']);
        $wpdb->query("DELETE FROM " .$wpdb->prefix ."statement WHERE statement_id='" .$_GET['delete']."'");
    }

    /**Process the changes in the custom table**/
    if(isset($_POST['bor_add_statement']) and isset($_POST['statement']) and isset($_POST['statement_category_id']) and isset($_POST['weight'])) {   
        /**Add new row in the custom table**/
        $statement = $_POST['statement'];
        $statement_category_id = $_POST['statement_category_id'];
        $weight = $_POST['weight'];
       /*  $license = $_POST['bor_license']; */

        if(empty($_POST['bor_software_id'])) {
            $wpdb->query("INSERT INTO " .$wpdb->prefix ."statement(statement,statement_category_id,weight) VALUES('" .$statement ."','" .$statement_category_id."','" .$weight."');");
        } else {
        /**Update the data**/
            $software_id = $_POST['bor_software_id'];
            $wpdb->query("UPDATE " .$wpdb->prefix. "statement SET statement='" .$statement ."', statement_category_id='" .$statement_category_id ."', weight='" .$weight ."' WHERE statement_id='" .$software_id ."'");
        }
    }  
}

function bor_add_statement(){
    $software_id =0;
    if($_GET['id']) $software_id = $_GET['id'];

    /**Get an specific row from the table wp_bor_software**/
    global $edit_software;
    if ($software_id) $edit_software = bor_get_statementrow($software_id);  

    /**create meta box**/
    add_meta_box('bor-meta', __('Statement Info'), 'bor_statement_meta_box', 'bor', 'normal', 'core' );
?>

    <!--Display the form to add a new row-->
    <div class="wrap">
      <div id="faq-wrapper">
        <form method="post" action="?page=statements-options">
          <h2>
          <?php if( $software_id == 0 ) {
                $tf_title = __('Add Statement');
          }else {
                $tf_title = __('Edit Statement');
          }
          echo $tf_title;
          ?>
          </h2>
          <div id="poststuff" class="metabox-holder">
            <?php do_meta_boxes('bor', 'normal','low'); ?>
          </div>
          <input type="hidden" name="bor_software_id" value="<?php echo $software_id?>" />
          <input type="submit" value="<?php echo $tf_title;?>" name="bor_add_statement" id="bor_add_statement" class="button-secondary">
        </form>
      </div>
    </div>
<?php
}

function bor_manage_statement(){
?>
<div class="wrap">
  <div class="icon32" id="icon-edit"><br></div>
  <h2><?php _e('Manage Statements') ?></h2>
  <form method="post" action="?page=statements-options" id="bor_form_action">
    <p>
        <select name="bor_action">
            <option value="actions"><?php _e('Actions')?></option>
            <option value="delete"><?php _e('Delete')?></option>
      </select>
      <input type="submit" name="bor_form_action_changes" class="button-secondary" value="<?php _e('Apply')?>" />
        <input type="button" class="button-secondary" value="<?php _e('Add a new Statement')?>" onclick="window.location='?page=statements-options&amp;edit=true'" />
    </p>
    <table class="widefat page fixed" cellpadding="0">
      <thead>
        <tr>
        <th id="cb" class="manage-column column-cb check-column" style="" scope="col">
          <input type="checkbox"/>
        </th>
          <th class="manage-column"><?php _e('Statement ID')?></th>
          <th class="manage-column"><?php _e('Statement')?></th>
          <th class="manage-column"><?php _e('Statement Category')?></th>
          <th class="manage-column"><?php _e('Weight')?></th>
        </tr>
      </thead>
      <tfoot>
        <tr>
        <th id="cb" class="manage-column column-cb check-column" style="" scope="col">
          <input type="checkbox"/>
        </th>
          <th class="manage-column"><?php _e('Statement ID')?></th>
          <th class="manage-column"><?php _e('Statement')?></th>
          <th class="manage-column"><?php _e('Statement Category')?></th>
          <th class="manage-column"><?php _e('Weight')?></th>
        </tr>
      </tfoot>
      <tbody>
        <?php
		global $wpdb;
          $table = bor_get_statement();
          if($table){
           $i=0;
           foreach($table as $software) {
			   $category_id = $software->statement_category_id;
			   
			   /*display category name*/
			   $category_name = $wpdb->get_results("SELECT 	statement_category FROM ". $wpdb->prefix ."statement_category where statement_category_id =".$category_id);
			  /*  print_r($category_name); */
               $i++;
        ?>
      <tr class="<?php echo (ceil($i/2) == ($i/2)) ? "" : "alternate"; ?>">
        <th class="check-column" scope="row">
          <input type="checkbox" value="<?php echo $software->statement_id?>" name="bor_id[]" />
        </th>
		
          <td>
          <strong><?php echo $software->statement_id?></strong>
          <div class="row-actions-visible">
          <span class="edit"><a href="?page=statements-options&amp;id=<?php echo $software->statement_id?>&amp;edit=true">Edit</a> | </span>
          <span class="delete"><a href="?page=statements-options&amp;delete=<?php echo $software->statement_id?>" onclick="return confirm('Are you sure you want to delete this software?');">Delete</a></span>
          </div>
          </td>
          <td><?php echo $software->statement?></td>
          <td><?php echo $category_name[0]->statement_category?></td>
          <td><?php echo $software->weight?></td>
        </tr>
        <?php
           }
        }
        else{  
      ?>
        <tr><td colspan="4"><?php _e('There are no data.')?></td></tr>  
        <?php
      }
        ?>  
      </tbody>
    </table>
    <p>
        <select name="bor_action-2">
            <option value="actions"><?php _e('Actions')?></option>
            <option value="delete"><?php _e('Delete')?></option>
        </select>
        <input type="submit" name="bor_form_action_changes-2" class="button-secondary" value="<?php _e('Apply')?>" />
        <input type="button" class="button-secondary" value="<?php _e('Add a new Statement')?>" onclick="window.location='?page=statements-options&amp;edit=true'" />
    </p>

  </form>
</div>
<?php
}
?>