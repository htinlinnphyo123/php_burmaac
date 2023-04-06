<?php

    interface paymentInfo
    {
        public function payment();
    }

    abstract class ticket implements paymentInfo
    {
        public $buyer;
        public $movieName;
        public $payment;

        public function __construct($buyer,$movieName,$payment)
        {
            $this->buyer = $buyer;
            $this->movieName = $movieName;
            $this->payment = $payment;
        }
        public function payment(){
            return 'i am payment';
        } 

    }

    class Vipticket extends ticket
    {
        public function printInfo(){
            echo '<p>' . $this->buyer . ' is a vip ticker holder for the movie ' . $this->movieName . ' and he will pay with ' . $this->payment .'</p>';
        }
        
    }

    $mgmg = new Vipticket('Mg Mg','Titanic','CODd');

    echo $mgmg->printInfo();
    echo $mgmg->payment();
    var_dump($mgmg);

?>