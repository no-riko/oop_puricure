<?php

    require_once('puricure.php');

    class Cureblack extends Puricure {

        public function attack(){
            $this->blackThunder();
        }

        private function blackThunder(){
            echo 'ブラックサンダー!';
            echo '<br>';
        }
    }

?>