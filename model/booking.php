<?php	
	class Booking
	{
		private $ID;
		private $destination;
		private $insurance;
		private $numberOfPassengers;
		private $registeredPassengers;
		private $passengers = array();
		
		public function __construct()
		{
			$this->destination = "";
			$this->numberOfPassengers = 0;
			$this->insurance = 0;
			$this->registeredPassengers = 0;
		}
		
		public function setID($newID)
		{
			//Set a new ID if 0<=$newID<=65536
			if(is_numeric($newID) && ($newID >= 0) && ($newID <= 65536))
			{
				$this->ID = $newID;
			}
		}
		
		public function getID()
		{
			if($this->ID != null)
			{
				return $this->ID;
			}
			else
			{
				return null;
			}
		}
		
		public function getDestination()
		{
			return $this->destination;
		}
		
		public function setDestination($destination)
		{
			$this->destination = $destination;
		}
		
		public function getInsurance()
		{
			if($this->insurance)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function setInsurance($insurance)
		{
			$this->insurance = $insurance;
		}
		
		public function getNumberOfPassengers()
		{
			return $this->numberOfPassengers;
		}
		
		public function setNumberOfPassengers($number)
		{
			for($i =0; $i <$number; $i++)
			{
				if(!isset($this->passengers[$i]))
				{
					$this->addPerson(new Person("",0));
				}			
			}
			
			while($this->numberOfPassengers > $number)
			{
				$this->removePerson();
			}
		}
		
		public function getPassenger($index)
		{
			if(isset($this->passengers[$index]))
			{
				return $this->passengers[$index];
			}
			else
			{
				return null;
			}
		}
		
		public function getPrice()
		{
			$price = 0;
			
			if(isset($this->passengers))
			{
				foreach ($this->passengers as $person)
				{
					if($person->getAge() >12)
					{
						$price += 15;
					}
					else
					{
						$price += 10;
					}
				}
			}
				
				if($this->insurance)
				{
					$price += 20;
				}
			
			return $price;
		}
		
		public function addPerson($person)
		{
			array_push($this->passengers, $person);
			$this->numberOfPassengers++;
		}
		
		public function removePerson()
		{
			if(array_pop($this->passengers)!=null)
			{
				$this->numberOfPassengers--;
			}
		}
		
		public function reset()
		{
			$this->ID = null;
			$this->destination = "";
			$this->numberOfPassengers= 0;
			$this->insurance= 0;
			$this->passengers = array ();
		}
		
		public function getRegisteredPassengers()
		{
			return $this->registeredPassengers;
		}
		
		public function setRegisteredPassengers($number)
		{
			$this->registeredPassengers = $number;
		}
		
		public function addRegisteredPassenger()
		{
			$this->registeredPassengers += 1;
		}
		
		public function allPassengersRegistered()
		{
			return $this->registeredPassengers == $this->numberOfPassengers;
		}
	}
?>