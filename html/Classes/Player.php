<?php
    class Player{
        private $turn;
        private $money = 0;
        private $current = 0;

        public function __construct(){
        }
        
        public function getName(){
            return $this -> name;
        }
        public function setName($name){
            $this -> name = $name;
        }
        public function getGender(){
            return $this -> gender;
        }
        public function setGender($gender){
            $this -> gender = $gender;
        }        
        public function getMoney(){
            return $this -> money;
        }