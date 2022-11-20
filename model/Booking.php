<?php

class Booking{

    private $bookingNum;
    private $customerID;
    private $hotelID;
    private $checkinDate;
    private $checkoutDate;
    private $totalCost;
    private $cancelled;
    private $completed;

    public function __construct(
        $customerID, 
        $hotelID, 
        $checkinDate, 
        $checkoutDate, 
        $perNightCost) {

        $this->customerID = $customerID;
        $this->hotelID = $hotelID;
        $this->checkinDate = $checkinDate;
        $this->checkoutDate = $checkoutDate;
        $this->totalCost = $this->calculateCost($perNightCost);
        $this->bookingNum = "abc";
        $this->cancelled = false;
        $this->completed = false;
        
    }

    public function calculateCost($perNight){

    }

    public function cancelBooking(){

    }

    public function completeBooking(){

    }
}