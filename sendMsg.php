<?php

require 'system/Connection.php';

class sendMsg {

    function sendMsg() {
        session_start();
        $userid = $_SESSION['user_session'];
        $this->setUserid($userid);
    }

    function getUserid() {
        return $this->userid;
    }

    function getMsg() {
        return $this->msg;
    }

    function getDate() {
        return $this->date;
    }

    function getUse() {
        return $this->use;
    }

    function setUserid($userid) {
        $this->userid = $userid;
    }

    function setMsg($msg) {
        $this->msg = $msg;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setUse($use) {
        $this->use = $use;
    }

    public function send() {
        $conn = Connect();

        $userid = $_SESSION['user_session'];
        $this->setUserid($userid);

        $date = date('Y-m-d H:i:s');

        $this->setDate($date);


        $query = "INSERT into message (userid,message,dateandTime,touserid) values"
                . " ('" . $this->getUserid() . "','" . $this->getMsg() . "','"
                . $this->getDate() . "','" . $this->getUse() . "')";

        $conn->query($query);
    }

}
