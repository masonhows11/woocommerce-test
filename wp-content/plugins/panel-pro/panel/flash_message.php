<?php

class FlashMessage
{

    const SUCCESS = 1;
    const ERROR = 2;


    public static function add($message, $type = self::SUCCESS)
    {
        $_SESSION['upp_messages'] = [
            'message' => $message,
            'type' => $type
        ];

        //        if (isset($_SESSION['upp_messages'])) {
        //            $_SESSION['upp_messages'] = [
        //                'message' => $message,
        //                'type' => $type
        //            ];
        //
        //        } else {
        //            // dose not exists upp_messages in session
        //            // create one with required parameters
        //            $_SESSION['upp_messages'][] = [
        //                'message' => $message,
        //                'type' => $type
        //            ];
        //        }

    }

    public static function show()
    {
        if (isset($_SESSION['upp_messages'])) {
            $message = $_SESSION['upp_messages'];
            if($message['type'] === self::SUCCESS){
                echo '<div class="alert alert-success"><p>'.$message['message'].'</p></div>';
            }else{
                echo '<div class="alert alert-danger"><p>'.$message['message'].'</p></div>';
            }
            self::clear();
        }

    }
    public static function get()
    {
        $show_message = '';
        if (isset($_SESSION['upp_messages'])) {
            $message = $_SESSION['upp_messages'];
            if($message['type'] === self::SUCCESS){
               $show_message = '<div class="alert alert-success"><p>'.$message['message'].'</p></div>';
            }else{
                $show_message = '<div class="alert alert-danger"><p>'.$message['message'].'</p></div>';
            }
            self::clear();
        }
        return $show_message;

    }

    public static function clear()
    {
        $_SESSION['upp_messages'] = null;
    }

}