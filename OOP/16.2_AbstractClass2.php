<?php 

    abstract class Person {

        private $givenName;
        private $familyName;

        // given name tên + tên lót
        public function setGivenName($gn) {
            $this->givenName = $gn;
        }

        public function getGivenName() {
            return $this->givenName;
        }

        public function setFamilyName($fn) {
            $this->familyName = $fn;
        }

        public function getFamilyName() {
            return $this->familyName;
        }

        public function sayHello() {
            echo("Hello, I am ");
            $this->introduceSelf();
        }

        abstract public function introduceSelf();
    }

    class Employee extends Person {

        private $role;

        public function setRole($r) {
            $this->role = $r;
        }

        public function getRole()
        {
            return $this->role;
        }

        public function introduceSelf(){
            echo( $this->getRole() . " " . $this->getGivenName() . " " . $this->getFamilyName() );
        }
    }

    $e = new Employee();
    $e->setGivenName('Huu Tien');
    $e->setFamilyName(' Nguyen ');
    $e->setRole('Brother');
    $e->introduceSelf();
?>