<?php 

    class Validation{
        
        // validate numerical inputs
        // check that input is a number, otherwise filter input with FILTER_SANITIZE_NUMBER_INT
        public static function numeric_input($integer){
            if(!is_numeric($integer)){
                $integer = filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
            }
            return $integer;
        }

        // validate (string + number) inputs
        // trim and remove htmlspecial characters to avoid any xss
        public static function character_input($character){
            $character = trim(htmlspecialchars($character));
            return $character;
        }

        // validate SKU input
        // trim and remove htmlspecial characters to avoid any xss
        public static function SKU_input($character){
            $character = trim(htmlspecialchars($character));
            // check the length of SKU entered
            if(strlen($character) == 6){
                return $character;
            }
            
        }
        
    }

?>
