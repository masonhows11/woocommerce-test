<?php


class UserService
{
    public function get_user_wallet($user_id): int
    {
        return (int)get_user_meta($user_id,'upp_wallet',true);
    }

}