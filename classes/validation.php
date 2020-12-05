<?php 

    class Validation{

        public static function numeric_input($integer){
            if(!is_numeric($integer)){
                $integer = filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
            }
            return $integer;
        }

        public static function character_input($character){
            $character = trim(htmlspecialchars($character));
            return $character;
        }

        public static function SKU_input($character){
            $character = trim(htmlspecialchars($character));
            if(strlen($character) == 6){
                return $character;
            }
            
        }
        
    }

?>
