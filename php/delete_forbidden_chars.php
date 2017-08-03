<?php 
//delete_forbidden_chars.php
function delete_forbidden_chars($array)
    {
        $charsForbidden = array("'","/","<",">",";");    
        return str_replace($charsForbidden,"",$array);
    }  
?>