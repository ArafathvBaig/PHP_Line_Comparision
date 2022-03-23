<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Line Comparission Computation Problem
 */
class LineComparission
{
    public $x1;
    public $x2;
    public $y1;
    public $y2;

    function welcomeMessage()
    {
        echo "Welcome to Line Comparission Computation Problem\n";
    }

    /**
     * Own implementation for power function 
     * Passing parameters of number and its power and 
     * checking the valid power conditions
     */
    function power($num, $power)
    {
        if ($power == 1) {
            return $num;
        } elseif ($power == 0) {
            return 1;
        } else {
            $temp = $num;
            for ($i = 1; $i < $power; $i++) {
                $temp = $temp * $num;
            }
            return $temp;
        }
    }

    /**
     * Function to get User input for calculating length
     * values for x1, y1,x2,y2 are taken
     */
    function userInput()
    {
        $this->x1 = readline("Enter the Value of X1 : ");
        $this->y1 = readline("Enter the Value of Y1 : ");
        $this->x2 = readline("Enter the Value of X2 : ");
        $this->y2 = readline("Enter the Value of Y2 : ");
    }

    /**
     * Function to Calculate length of the points
     * Using own Power function
     * returns the length
     */
    function calculateLength()
    {
        $this->userInput();
        $length = sqrt($this->power(($this->x2 - $this->x1), 2) +
            $this->power(($this->y2 - $this->y1), 2));
        return $length;
    }

    /**
     * Function to check the equality of two lengths
     * Passing length1 and length2 as parameters
     * Prints whether lengths are equal, greater or smaller
     */
    function checkEquality($length1, $length2)
    {
        if ($length1 == $length2) {
            echo "\nBoth have Equal Length\n";
        } elseif ($length1 > $length2) {
            echo "\nLength1 is Greater than Length2\n";
        } else {
            echo "\nLength1 is Smaller than Length2\n";
        }
    }

    /**
     * Function to compare two lengths
     * Passing length1 and length2 as parameters
     * Printing lengths are equal, greater or smaller
     */
    function compareLengths($length1, $length2)
    {
        $length1 = (string) $length1;
        $length2 = (string) $length2;
        // echo gettype($length1);
        // echo gettype($length2);
        $compare = strcmp($length1, $length2);
        if ($compare == 0) {
            echo "\nBoth have Equal Length\n";
        } elseif ($compare > 0) {
            echo "\nLength1 is Greater than Length2\n";
        } else {
            echo "\nLength1 is Smaller than Length2\n";
        }
    }
}

$lineComparission = new LineComparission();
$lineComparission->welcomeMessage();
$length1 = $lineComparission->calculateLength();
echo "\nLength 1: " . $length1 . "\n\n";
$length2 = $lineComparission->calculateLength();
echo "\nLength 2: " . $length2 . "\n";
//$lineComparission->checkEquality($length1, $length2);
$lineComparission->compareLengths($length1, $length2);
