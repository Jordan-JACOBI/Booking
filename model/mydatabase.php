<?php
	class MyDatabase extends mysqli
	{
		private $bookingsTable;
		private $passengersTable;
		
		public function __construct()
		{
			parent::__construct("localhost","root","","bookingdb");
			$this->bookingsTable = 'bookings';
			$this->passengersTable = 'passengers';
		}
		
		public function save($booking)
		{
			//SAVE BOOKING
			$table = $this->bookingsTable;
			
			$dest = $booking->getDestination();
			$price = $booking->getPrice();
			$insurance = $booking->getInsurance()? 1:0;
			
			$query = 'INSERT INTO '.$table.' (destination, insurance, price) 
			VALUES("'.$dest.'", '.$insurance.', '.$price.')';
			
			$this->query($query);
			
			//SAVE PASSENGERS
			$table = $this->passengersTable;
			$bookingID = $this->insert_id;
			
			$number = $booking->getNumberOfPassengers();
			
			for($i = 0; $i < $number; $i++)
			{
				$name = $booking->getPassenger($i)->getName();
				$age = $booking->getPassenger($i)->getAge();
				
				$query = 'INSERT INTO '.$table.' (name, age, bookingID) 
				VALUES("'.$name.'", '.$age.' ,'.$bookingID.')';
				
				$this->query($query);
			}
			
			$booking->register();
		}
		
		public function update($booking)
		{
			//TO BE IMPLEMENTED
		}
		
		public function erase($id)
		{
			//TO BE IMPLEMENTED
		}
		
		public function getBookings()
		{
			$query ='SELECT * FROM '.$this->bookingsTable;
			return $this->query($query);
		}
		
		public function getPassengers($bookingID)
		{
			$query ='SELECT age, name FROM '.$this->passengersTable.' WHERE bookingID = '.$bookingID.'';
			return $this->query($query);
		}
	}
?>