<?php

    class Grand {

        public function example_function(){
            $calling_class = get_called_class();

            // echo "I'm in " . $calling_class;

            $the_object = new $calling_class;
            $the_object->private_method();
            var_dump($the_object);
        }

        private function private_method() {
            echo 'I\' Tien ';
        }

    }

    class Mother extends Grand {

        public function call_me_maybe(){
            
        }
    }

    $the_object = new Mother();
    $the_object->example_function();


?>