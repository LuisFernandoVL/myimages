<?php
    function corrige($str){
        $troca = array(
            '!' , '"' , '#' , '$' , '%' , '&' , '\'' , '(' , ')' , '*'  , '+' , 
            ',' , '-' , '.' , '/' , ':' , ';' , '<'  , '=' , '>' , '?' , '@' , 
            '[' , '\\', ']' , '^' , '_' , '`' , '{'  , '|' , '}' , '~'
        );
        $str = str_replace($troca,"",$str);    
        return $str;
    }
?>
