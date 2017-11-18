<?php
	class DropDownList extends FormEntry
	{
		private $options;
		private $selectedOption;
		
		public function __construct($name, $label, $options, $selectedOption)
		{
			parent::__construct($name, $label);
			$this->options = $options;
			$this->selectedOption = $selectedOption;
		}
		
		public function __toString()
		{
			$output = '<select name="'.$this->name.'" id="'.$this->name.'">';
			
			foreach($this->options as $option)
			{
				if ($this->selectedOption == $option)
				{
					$selected = 'selected';
				}
				else
				{
					$selected = '';
				}
				
				$output .= '<option value="'.$option.'" '.$selected.'>'.$option.'</option>';
			}
			
			$output .= '</select><br />';
			
			return parent::__toString().$output;
		}
	}
?>