<?php
	class Button
	{
		private $type;
		private $name;
		private $text;
		
		public function __construct ($name, $text, $type)
		{
			$this->type = $type;
			$this->text = $text;
			$this->name = $name;
		}
		
		public function __toString()
		{
			return '<input type="'.$this->type.'" name="'.$this->name.'" value="'.$this->text.'"/>';
		}
	}
?>