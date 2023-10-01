<?php declare(strict_types=1);

use Cassandra\Date;
use pq\DateTime;

class Message{
    private int $id;
    private string $sender;
    private string $receiver;
    public string $message;
    public DateTime $time;
    public Date $date;

    public function sendMessage(String $message): void {
        $this->setID();
        $this->message = $message;
    }

    public function retrieveMessage() : string {
        return $this->message;
    }

    private function setDate() : string {
        $date = date_create();
        return date_format($date, "j D, F");
    }

    private function setTime() : string {
        $time = date_create();
        return date_format($time, "g:i A");
    }

    public function setSender(String $name) : void {
        $this->sender = $name;
    }
    public function setReceiver(String $name) : void {
        $this->receiver = $name;
    }

    public function getSender() : string {
        return $this->sender;
    }

    public function getReceiver() : string {
        return $this->receiver;
    }

    private function setID() : void {
        try{
            $this->id = random_int(0, PHP_INT_MAX);
        }catch (Exception){
            //no sheet
        }
    }

    public function getID() : int {
        return $this->id;
    }

    public function getDate() : string {
        return $this->setDate();
    }

    public function getTime() : string {
        return $this->setTime();
    }

    /** Generate a random ID for a message, will not check for duplicate as messages are not saved */
    /** @noinspection PhpUnhandledExceptionInspection */
    private function generateID() : int {
        return $id = random_int(0, PHP_INT_MAX);
    }
}