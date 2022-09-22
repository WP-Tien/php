<?php  

    // Abstract class là một lớp trừu tượng chứa những  phương thức trừu tượng. Các lớp khác khi kế thừa lớp trừu tượng sẽ định nghĩa các phương thức trừu tượng ấy, 1 class chỉ kế thừa một lớp trừu tượng. 

    abstract class Database {
        public $table;

        abstract protected function checkExistUser();
        abstract protected function updateUser();
    }

    class User extends Database {
        public function checkExistUser(){
            
        }

        public function updateUser(){

        }
    }

?>