<?php

    class Puricure
    {
        public $name;
        public $hp;
        public $mp;

        public function __construct($name, $hp, $mp)
        {
            $this->name = $name;
            $this->hp = $hp;
            $this->mp = $mp;
        }

        public function attack()
        {
            $this->noAttack();
        }

        private function noAttack()
        ;
            echo '<br>';
        }
    }

?>