<?php

    trait salary
    {
        public function getSalary()
        {
            echo 'hello i am getting salary . ';
        }
    }

    trait bonus
    {
        public function getBonus()
        {
            echo 'hello i am getting bonus. ';
        }
    }

    class SuperVisor
    {
        use salary,bonus;

        public function role(){
            echo ' hello i am supervisor role';
        }
    }

    $mgmg = new SuperVisor();
    $mgmg->getBonus();
    $mgmg->role();

?>