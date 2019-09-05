<?php

    require_once('puricure.php');

    class Curewhite extends Puricure 
    {

        public function attack()
        {
            $this->whiteThunder();
        }

        private function whiteThunder()
        {
            echo 'ホワイトサンダー!';
            echo '<br>';
        }
    }

?>