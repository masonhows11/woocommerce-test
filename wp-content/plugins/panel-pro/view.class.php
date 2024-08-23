<?php

class view
{

    // to display html/php file as view
    public static function load($view ,$data = [])
    {
        // to access data variable in view file
        extract($data);
        include UPP_DIR_VIEW.$view;
    }

}