<?php

class Activity {

    private $id_activity;
    private $activity_date;
    private $activity_description;
    private $user;

    public function __construct(){}

    public function init($id, $a, $d, $u) {

        $this->id_activity = $id;
        $this->activity_date = $a;
        $this->activity_description = $d;
        $this->user = $u;
    }

    public function getID() {return $this->id_activity;}

    public function getActvityDate() {return $this->activity_date;}

    public function getActivityDescription() {return $this->activity_description;}

    public function getUser() {return $this->user;}

    public function __toString() {return "ACTIVITY = " . $this->getActivityDescription . " DATE = " . $this->activity_date . " USER = " . $this->user;}

}

?>