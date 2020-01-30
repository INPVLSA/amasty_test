<?php
/**
 * @author Vladislav Marudenko
 */

class First {
    /**
     * @uses Print any object classname
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

