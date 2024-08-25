<?php
include "Handler.php";
include  UPP_DIR ."view.class.php";
class ProfileHandler extends Handler{

    public function __construct()
    {
        parent::__construct();
        add_action('upp_update_profile',[$this,'update_user_profile']);
    }


    public function index()
    {
        if(isset($_POST['saveData'])){

            do_action('upp_update_profile');
        }
        $params =  [
            'current_user' => $this->current_user,
            ];
        view::load('panel.profile.index',$params);
    }

    public function update_user_profile(){

        $user_data_for_update = [
           'ID' => $this->current_user->ID,
          'display_name' => apply_filters('pre_user_display_name',$_POST['userFullName'])
        ];

        if(!empty('userPassword')){
            $user_data_for_update['user_pass'] = apply_filters('pre_user_pass',$_POST['userPassword']);
        }

        // this code to prevent save twice value after  every post request
        $update_result = wp_update_user($user_data_for_update);
        if(!is_wp_error($update_result)){
            $this->set_current_user(wp_get_current_user());
        }

    }
}