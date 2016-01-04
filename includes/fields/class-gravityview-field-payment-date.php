<?php

class GravityView_Field_Payment_Date extends GravityView_Field_Date_Created {

	var $name = 'payment_date';

	var $is_searchable = true;

	var $search_operators = array( 'less_than', 'greater_than', 'is', 'isnot' );

	var $group = 'pricing';

	var $_custom_merge_tag = 'payment_date';

	/**
	 * GravityView_Field_Date_Created constructor.
	 */
	public function __construct() {
		$this->label = esc_attr__( 'Payment Date', 'gravityview' );
		$this->description = esc_attr__( 'The date the payment was received.', 'gravityview' );
		parent::__construct();
	}
}

new GravityView_Field_Payment_Date;
