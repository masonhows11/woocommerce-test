<?php

class view
{

    // to display html/php file as view
    public static function load($view)
    {
        include UPP_DIR_VIEW.$view;
    }

}