<?php
/**
 * Class Validation проверяет все введенные данные пользователем
 */
class Validation
{
    static public function getInt($int)
    {
        if(isset($int) && !empty($int)){
            return intval($int);
        }
        else {
            return 0;
        }
    }

    static public function getStr($str)
    {
        if(isset($str) && !empty($str)){
            return htmlspecialchars($str);
        }
        else {
            return '';
        }
    }
}