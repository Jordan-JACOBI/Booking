<?php
	class Checkbox extends FormEntry
	{
		private $selected;
		
		public function __construct($name, $label, $selected)
		{
			parent::__construct($name, $label);
			$this->selected = $selected;
		}
		
		private function IsChecked()
		{
			if(($this->selected == 1)||($this->selected == true))
			{
				return 'checked';
			}
			else
			{
				return '';
			}
		}
		
		public function __toString()
		{
			return parent::__toString().
			'<input type="checkbox" name="'.$this->name.'" id="'.$this->name.'" '.$this->IsChecked().' /><br />';
		}
	}
?>