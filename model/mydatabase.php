<?php
	class MyDatabase extends mysqli
	{
		private $bookingTable;
		private $passengersTable;
		private $ticketsTable;
		
		public function __construct()
		{
			parent::__construct("localhost","root","","bookingdb");
			$bookingTable = 'bookings';
			$passengersTable = 'passengers';
			$ticketsTable = 'tickets';
		}
		
		public function saveBooking()
		{
			//FROM BOOKING::SAVE()
		}
	}
?>