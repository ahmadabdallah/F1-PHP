<?php


class php_helper
{
    public  static  function  str_trim($_str, $_length,$allow_trailing_dots)
    {
        $trimmed_text = '';
        if (strlen($_str) > $_length) {
            $_TitleArr = explode(" ", $_str);
            for ($i = 0; $i < sizeof($_TitleArr); $i++) {
                if (strlen($trimmed_text . $_TitleArr[$i]) < $_length) {
                    $trimmed_text = $trimmed_text . $_TitleArr[$i] . " ";
                } else {
                    $trimmed_text = substr_replace($trimmed_text, "", -1);
                    if($allow_trailing_dots==true)
                    {
                        $trimmed_text.="...";
                    }
                    break;
                }
            }
        } else {
            $trimmed_text = $_str;
        }
        return $trimmed_text;
    }

}

?>