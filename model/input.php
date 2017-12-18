<?php
	class Input extends FormEntry
	{
		private $type;
		private $value;
		
		public function __construct($name, $label, $type, $value)
		{
			parent::__construct($name, $label);
			$this->type = $type;
			$this->value = $value;
		}
		
		public function __toString()
		{
			return parent::__toString().
			'<input type="'.$this->type.'" name="'.$this->name.'" id="'.$this->name.'" value="'.$this->value.'" /><br />';
		}
	}
?>