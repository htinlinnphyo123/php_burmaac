<?php

    interface sendSMS
    {
        public function sendMessage();
    }

    class Telenor implements sendSMS
    {
        public function sendMessage()
        {
            echo "i am telenor send message";
        }
        public function fee()
        {
            echo 'i am telenor fee';
        }
    }

    class Ooredoo implements sendSMS
    {
        public function sendMessage()
        {
            echo 'i am ooredoo send message';
        }
        public function fee()
        {
            echo 'i am ooredoo fee';
        }
    }

    class MPT implements sendSMS
    {
        public function sendMessage()
        {
            echo 'i am mpt send message';
        }
        public function fee()
        {
            echo 'i am MPT fee';
        }
    }

    class Promotion
    {
        public function send(sendSMS $provider)
        {
            $provider->sendMessage();
            echo '<br/>';
            $provider->fee();
        }
        public function takeCharge(){
            echo 'hello i am taking charge for your service.';
        }
    }

    $promotion = new Promotion();
    $promotion->send(new MPT());
    $promotion->takeCharge();



?>
