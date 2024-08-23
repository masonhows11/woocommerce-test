<?php

class view
{

    // to display html/php file as view
    public static function load($view ,$data = [],$layout = 'master')
    {
        // $view is variable include view path like panel/dashboard/index

        $layout_path = UPP_DIR_VIEW . DIRECTORY_SEPARATOR . 'layouts/';
        $layout_file_path  = $layout_path . $layout . '.php';
        if(file_exists($layout_file_path) && is_readable($layout_file_path)){
            // to access data variable in view file

            $view = str_replace('.',DIRECTORY_SEPARATOR,$view); // replace . dot instead / slash
            $view = $view.'.php'; // remove .php after view file
            extract($data);
            include $layout_file_path;
        }

        //        extract($data);
        //        include UPP_DIR_VIEW.$view;

    }

}