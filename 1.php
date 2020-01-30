<?php
class First {
    /**
     * @uses Print the name of the class of an object
     */
    public function getClassname(){
        echo get_class();
    }

    public function getLetter(){
        echo 'A';
    }
}

class Second extends First {
    public function getLetter(){
        echo 'B';
    }
}