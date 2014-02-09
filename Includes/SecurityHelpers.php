<?php
    class SecurityHelpers {
        public static function sanitizeString($str)
        {
            $str = trim($str);
    
            if (get_magic_quotes_gpc())
                $str = stripslashes($str);
    
            return htmlentities(mysqli_real_escape_string($str));
        }
    }
?>
