<?php

if (isset($_POST['input'])) {
    $input = $_POST['input'];
 

    //Checks to see if the field is empty.
    if (empty( $_POST['input'] ) ) {
        echo "You didn't enter anything in the field! Thats an F for sure!!!";

    //Else if to check for the grade letter.
    }elseif ($input > 85 && $input < 100) {
        echo "You got an A!!!";

    } elseif ($input > 75 && $input < 84.99 ) {
        echo "You got a B!!!";

    } elseif ($input > 60 && $input < 74.99 ) {
        echo "You got a C!!!";

    } elseif ($input > 0 && $input < 59.99 ) {
        echo "You got a D!!!";

    //Nested switch to handle the letter being input and display the mark range for that letter.
    } elseif (is_string($input) ) {
        switch ( $input )  {
            case 'a':
                echo "An A would be a mark of 85 - 100!";
            break;  

            case 'b':
                echo 'Got a B huh? thats a mark between 75 - 84.99!';
            break;  

            case 'c':
                echo 'A C would be a mark between 60 - 74.99!';
            break;

            case 'd':
                echo 'A D mark would mean that your score was between 0 - 59.99!';
            break;

            //Displays a message if the user put in an incorrect value.
            default:
                echo ' Uh oh! you did not put in a valid grade letter! Please try again!';                  
            }    
        }              
    }                                    
    ?>                                                                      