<?php

class Theme {

	/* Default Theme functions */

	static function post_tag($p) {
		echo '<a href="' . get_permalink($p->ID) . '">' . $p->post_title . '</a>';
	}

	static function featured_image_array($p) {
		return wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'single-post-thumbnail');
	}

	static function featured_image_url($p) {
		$image = Theme::featured_image_array($p);
		return $image[0];
	}

	static function featured_image_tag($p) {
		$image = Theme::featured_image_array($p);
		if($image[0]) {
			echo '<img src="' . $image[0] . '" alt="' . $p->post_title . '">';
		}
	}

	static function slug($p) {
		return sanitize_title($p->post_title);
	}
	static function get_image($size = 'normal',$class = '',$attr = NULL, $id = NULL){
		global $post;
		if($id == NULL)
			$id = $post->ID;
		if(function_exists('get_the_image')){
			get_the_image(array('image_scan' => true, 'post_id' => $id, 'size' => $size, 'image_class' => $class, $attr, 'thumbnail_id_save' => true));
		} elseif(has_post_thumbnail($id)) {
			echo '<a href="'.get_permalink($id).'" title="'.esc_attr(get_post_field('post_title', $id)).'">';
			the_post_thumbnail($size, array('class' => $class, $attr));
			echo '</a>';
		} else {
			//http://wpforce.com/automatically-set-the-featured-image-in-wordpress/
			$attached_image = get_children( "post_parent=".$post->ID."&post_type=attachment&post_mime_type=image&numberposts=1" );
			if($attached_image){
				foreach ($attached_image as $attachment_id => $attachment) {
					set_post_thumbnail($id, $attachment_id);
				}
				echo '<a href="'.get_permalink($id).'" title="'.esc_attr(get_post_field('post_title', $id)).'">';

				the_post_thumbnail($size, array('class' => $class, $attr));
				echo '</a>';
			} else {
				$first_img = ''; ob_start(); ob_end_clean();
				$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
				$first_img = $matches [1] [0];
				if(empty($first_img)){
					return;
				}
				$html = '<a href="'.get_permalink($id).'" title="'.esc_attr(get_post_field('post_title', $id)).'">';
				$html .= wp_get_attachment_image(get_image_id($first_img), $size, array('class' => $class, $attr));
				$html .= '</a>';
				echo $html;
			}
		}
	}

	/*
	 * $post_type = the post type of the object you are searching for
	 * $key = the name of the field in the advanced custom fields UI
	 * $parent_id = the ID of the parent you are searching associated objects for
	 */
	static function linked_posts($post_type, $key, $parent_id) {
		return get_posts(array(
		'post_type' => $post_type,
		'meta_query' => array(
			array(
				'key' => $key,
				'value' => '"' . $parent_id . '"',
				'compare' => 'LIKE'
			)
		)
		));
	}
}

//GRAVITY FORM INPUT 

/* Add a custom field to the field editor (See editor screenshot) */
add_action("gform_field_standard_settings", "my_standard_settings", 10, 2);

function my_standard_settings($position, $form_id){

// Create settings on position 25 (right after Field Label)

if($position == 25){
?>
		
<li class="admin_label_setting field_setting" style="display: list-item; ">
<label for="field_placeholder">Placeholder Text

<!-- Tooltip to help users understand what this field does -->
<a href="javascript:void(0);" class="tooltip tooltip_form_field_placeholder" tooltip="&lt;h6&gt;Placeholder&lt;/h6&gt;Enter the placeholder/default text for this field.">(?)</a>
			
</label>
		
<input type="text" id="field_placeholder" class="fieldwidth-3" size="35" onkeyup="SetFieldProperty('placeholder', this.value);">
		
</li>
<?php
}
}

/* Now we execute some javascript technicalitites for the field to load correctly */

add_action("gform_editor_js", "my_gform_editor_js");

function my_gform_editor_js(){
?>
<script>
//binding to the load field settings event to initialize the checkbox
jQuery(document).bind("gform_load_field_settings", function(event, field, form){
jQuery("#field_placeholder").val(field["placeholder"]);
});
</script>

<?php
}

/* We use jQuery to read the placeholder value and inject it to its field */

add_action('gform_enqueue_scripts',"my_gform_enqueue_scripts", 10, 2);

function my_gform_enqueue_scripts($form, $is_ajax=false){
?>
<script>

jQuery(function(){
<?php

/* Go through each one of the form fields */

foreach($form['fields'] as $i=>$field){

/* Check if the field has an assigned placeholder */
			
if(isset($field['placeholder']) && !empty($field['placeholder'])){
				
/* If a placeholder text exists, inject it as a new property to the field using jQuery */
				
?>
				
jQuery('#input_<?php echo $form['id']?>_<?php echo $field['id']?>').attr('placeholder','<?php echo $field['placeholder']?>');
				
<?php
}
}
?>
});
</script>
<?php
}
?>
