<?php if(! defined('ABSPATH')){ return; }
/*
	Name: My Awesome Element
	Description: This element is just awesome
	Class: ZnMyAwesomeElement
	Category: content
	Level: 3
	Keywords: awesome
*/

	class ZnMyAwesomeElement extends ZnElements {

	function options(){

		$uid = $this->data['uid'];

		$options = array(
			'has_tabs'  => true,
			'general' => array(
				'title' => __( 'General options', 'my-kallyas-element-demo' ),
				'options' => array(
					array (
						'id'          => 'my_option_id',
						'name'        => __( 'My option name', 'my-kallyas-element-demo' ),
						'description' => __( 'Just enter something...it will work :).', 'my-kallyas-element-demo' ),
						'std'         => '',
						'placeholder' => __( 'Just enter something', 'my-kallyas-element-demo' ),
						'type'        => 'text'
					),

				),
			),

			'help' => znpb_get_helptab( array(
				'video'   => 'http://support.hogash.com/kallyas-videos/#GAiAelvoOg4',
				'docs'    => 'http://support.hogash.com/documentation/anchor-point-element/',
				'copy'    => $uid,
				'general' => true,
			)),

		);

		return $options;

	}


	/**
	 * This will show the element output
	 * @return string the element HTML markup
	 */
	function element(){
		$my_option_id_value = $this->opt('my_option_id', 'this is the default value');
		echo '<div id="'.$this->data['uid'].'" class="my-awesome-class '.zn_get_element_classes($this->data['options']).'">'.$my_option_id_value.'</div>';
	}


	/**
	 * This will show the element output only on edit mode
	 * @return string the element HTML markup
	 */
	function element_edit() {
		$my_option_id_value = $this->opt('my_option_id', 'this is the default value');
		echo '<div id="'.$this->data['uid'].'" class="my-awesome-class '.zn_get_element_classes($this->data['options']).'">'.$my_option_id_value.'</div>';
	}
}

?>
