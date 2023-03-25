<?php 
    //Returns a random set of numbers between 0,23
    function generateRandomValues(){
        $values = range(0, 23);
        shuffle($values);
        return $values;
    }

?>