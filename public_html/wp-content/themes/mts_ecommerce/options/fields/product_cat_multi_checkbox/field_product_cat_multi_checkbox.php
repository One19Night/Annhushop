<?php
class NHP_Options_product_cat_multi_checkbox extends NHP_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since NHP_Options 1.0
	*/
	function __construct($field = array(), $value ='', $parent){
		
		parent::__construct($parent->sections, $parent->args, $parent->extra_tabs);
		$this->field = $field;
		$this->value = $value;
		//$this->render();
		
	}//function
	
	
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and outputs the HTML for the field in the settings
	 *
	 * @since NHP_Options 1.0
	*/
	function render(){
		
		$class = (isset($this->field['class']))?$this->field['class']:'regular-text';
		
		echo '<fieldset>';
			$args = array( 'hide_empty' => 0 ); 

			$woo_categories = get_terms( 'product_cat', $args);
			$categories = array();
			foreach ($woo_categories as $term_i => $term) {
				$categories[$term->term_id] = $term->name;
			}
			foreach($categories as $k => $v){
				$this->value[$k] = (isset($this->value[$k]))?$this->value[$k]:'';
				
				echo '<label for="'.$this->field['id'].'_'.array_search($k,array_keys($categories)).'">';
				echo '<input type="checkbox" id="'.$this->field['id'].'_'.array_search($k,array_keys($categories)).'" name="'.$this->args['opt_name'].'['.$this->field['id'].']['.$k.']" '.$class.' value="1" '.checked($this->value[$k], '1', false).'/>';
				echo ' '.$v.'</label><br/>';
				
			}//foreach

		echo (isset($this->field['desc']) && !empty($this->field['desc']))?'<span class="description">'.$this->field['desc'].'</span>':'';
		
		echo '</fieldset>';
		
	}//function
	
}//class
?>