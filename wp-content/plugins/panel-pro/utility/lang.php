<?php

class lang
{

    public function convertToPersian($input)
    {

        $fa_numbers = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
        $en_numbers = ['0','1','2','3','4','5','6','7','8','9',];

        return str_replace($en_numbers,$fa_numbers,$input);

    }

    public function convertToEnglish($input)
    {
        $fa_numbers = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
        $en_numbers = ['0','1','2','3','4','5','6','7','8','9',];
        return str_replace($fa_numbers,$en_numbers,$input);

    }


}