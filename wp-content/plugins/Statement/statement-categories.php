<?php 
/**Get all the data from the tabe wp_bor_software**/
function bor_get_category() {
    global $wpdb;
    $category = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."statement_category ORDER BY statement_category_id");
    return $category;
	
}

   
    
	


/**Get an specific row from the table wp_bor_software**/
function bor_get_categoryrow($id) {
    global $wpdb;
    $the_category = $wpdb->get_results("SELECT * FROM " .$wpdb->prefix ."statement_category WHERE statement_category_id='".$id."'");
    if(!empty($the_category[0])) {
        return $the_category[0];
    }
    return;
}
$category = $wpdb->get_results("SELECT * FROM ". $wpdb->prefix ."statement_category ORDER BY statement_category_id");
function bor_category_meta_box() {
    global $edit_software;
?>
   <p>Statement category: <input type="text" name="statement_category" value="<?php if(isset($edit_software)) echo $edit_software->statement_category;?>" /></p>
	
    <p>Parent:<input type="text" name="statement_parent_category_id" value="<?php if(isset($edit_software)) echo $edit_software->statement_parent_category_id;?>" /></p>
    <!--<p>License: <input type="text" name="bor_license" value="<?php if(isset($edit_software)) echo $edit_software->license;?>" /></p>-->
<?php
}

function statement_plugin_cat_options(){
    /**Manipulate data of the custom table**/
    bor_action();
    if (empty($_GET['edit'])) {
      /**Display the data into the Dashboard**/
        bor_manage_category();
    } else {
      /**Display a form to add or update the data**/
        bor_add_category();  
    }
}
 
function bor_action(){
    global $wpdb;

    /**Delete the data if the variable "delete" is set**/
    if(isset($_GET['delete'])) {
        $_GET['delete'] = absint($_GET['delete']);
        $wpdb->query("DELETE FROM " .$wpdb->prefix ."statement_category WHERE statement_category_id='" .$_GET['delete']."'");
    }

    /**Process the changes in the custom table**/
    if(isset($_POST['bor_add_category']) and isset($_POST['statement_category']) and isset($_POST['statement_parent_category_id'])) {   
        /**Add new row in the custom table**/
        $statement_category = $_POST['statement_category'];
        $statement_parent_category_id = $_POST['statement_parent_category_id'];
       /*  $license = $_POST['bor_license']; */

        if(empty($_POST['bor_software_id'])) {
            $wpdb->query("INSERT INTO " .$wpdb->prefix ."statement_category(statement_category,statement_parent_category_id) VALUES('" .$statement_category ."','" .$statement_parent_category_id."');");
        } else {
        /**Update the data**/
            $software_id = $_POST['bor_software_id'];
            $wpdb->query("UPDATE " .$wpdb->prefix. "statement_category SET statement_category='" .$statement_category ."', statement_parent_category_id='" .$statement_parent_category_id ."' WHERE statement_category_id='" .$software_id ."'");
        }
    }  
}

function bor_add_category(){
    $software_id =0;
    if($_GET['id']) $software_id = $_GET['id'];

    /**Get an specific row from the table wp_bor_software**/
    global $edit_software;
    if ($software_id) $edit_software = bor_get_categoryrow($software_id);  

    /**create meta box**/
    add_meta_box('bor-meta', __('Category Info'), 'bor_category_meta_box', 'bor', 'normal', 'core' );
?>

    <!--Display the form to add a new row-->
    <div class="wrap">
      <div id="faq-wrapper">
        <form method="post" action="?page=cat-options">
          <h2>
          <?php if( $software_id == 0 ) {
                $tf_title = __('Add Category');
          }else {
                $tf_title = __('Edit Category');
          }
          echo $tf_title;
          ?>
          </h2>
          <div id="poststuff" class="metabox-holder">
            <?php do_meta_boxes('bor', 'normal','low'); ?>
          </div>
          <input type="hidden" name="bor_software_id" value="<?php echo $software_id?>" />
          <input type="submit" value="<?php echo $tf_title;?>" name="bor_add_category" id="bor_add_category" class="button-secondary">
        </form>
      </div>
    </div>
<?php
}

function bor_manage_category(){
?>
<div class="wrap">
  <div class="icon32" id="icon-edit"><br></div>
  <h2><?php _e('Manage Statement Categories') ?></h2>
  <form method="post" action="?page=cat-options" id="bor_form_action">
    <p>
        <select name="bor_action">
            <option value="actions"><?php _e('Actions')?></option>
            <option value="delete"><?php _e('Delete')?></option>
      </select>
      <input type="submit" name="bor_form_action_changes" class="button-secondary" value="<?php _e('Apply')?>" />
        <input type="button" class="button-secondary" value="<?php _e('Add a new Category')?>" onclick="window.location='?page=cat-options&amp;edit=true'" />
    </p>
    <table class="widefat page fixed" cellpadding="0">
      <thead>
        <tr>
        <th id="cb" class="manage-column column-cb check-column" style="" scope="col">
          <input type="checkbox"/>
        </th>
          <th class="manage-column"><?php _e('Statement Category')?></th>
          <th class="manage-column"><?php _e('Statement Category ID')?></th>
          <th class="manage-column"><?php _e('Statement Parent Category')?></th>
        </tr>
      </thead>
      <tfoot>
        <tr>
        <th id="cb" class="manage-column column-cb check-column" style="" scope="col">
          <input type="checkbox"/>
        </th>
          <th class="manage-column"><?php _e('Statement Category')?></th>
          <th class="manage-column"><?php _e('Statement Category ID')?></th>
          <th class="manage-column"><?php _e('Statement Parent Category')?></th>
        </tr>
      </tfoot>
      <tbody>
        <?php
          $table = bor_get_category();
          if($table){
           $i=0;
           foreach($table as $software) {
               $i++;
        ?>
      <tr class="<?php echo (ceil($i/2) == ($i/2)) ? "" : "alternate"; ?>">
        <th class="check-column" scope="row">
          <input type="checkbox" value="<?php echo $software->statement_category_id?>" name="bor_id[]" />
        </th>
		
          <td>
          <strong><?php echo $software->statement_category?></strong>
          <div class="row-actions-visible">
          <span class="edit"><a href="?page=cat-options&amp;id=<?php echo $software->statement_category_id?>&amp;edit=true">Edit</a> | </span>
          <span class="delete"><a href="?page=cat-options&amp;delete=<?php echo $software->statement_category_id?>" onclick="return confirm('Are you sure you want to delete this software?');">Delete</a></span>
          </div>
          </td>
          <td><?php echo $software->statement_category_id?></td>
          <td><?php echo $software->statement_parent_category_id?></td>
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
        <input type="button" class="button-secondary" value="<?php _e('Add a new Category')?>" onclick="window.location='?page=cat-options&amp;edit=true'" />
    </p>

  </form>
</div>
<?php
}
?>