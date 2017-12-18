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
			$input = '<input type="'.$this->type.'" name="'.$this->name.'" value="'.$this->text.'"';
			
			if($this->name == 'cancel')
			{
				$input .= ' class="cancel"';
			}
			else
			{
				$input .= ' class="normal"';
			}
			
			$input .=' />';
			
			return $input;
		}
	}
?>