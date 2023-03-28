<?php 
    /**
     * Returns a random set of numbers between 0,23
     */
    function generateRandomValues(){
        $values = range(0, 23);
        shuffle($values);
        return $values;
    }
    /**
     * gets the average to get the total amount for the banker to offer
     */
    function offer($prizes, $discarded) {
        $total = 0;
        $count = 0;
        for ($i = 0; $i < count($prizes); $i++) {
            if (!in_array($prizes[$i], $discarded)) {
                $total += $prizes[$i];
                $count++;
            }
        }
        return $total / $count;
        }
?>
