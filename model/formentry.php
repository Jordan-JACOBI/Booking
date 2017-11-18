<?php
	abstract class FormEntry
	{
		protected $name;
		protected $label;
		
		
		public function __construct($name, $label)
		{
			$this->name = $name;
			$this->label = $label;
		}
		
		public function __toString()
		{
			$labelField = '<label for="'.$this->name.'">'.$this->label.'</label>';
			return $labelField;
		}
	}
?>