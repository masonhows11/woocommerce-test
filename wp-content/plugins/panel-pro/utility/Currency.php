<?php
include_once 'lang.php';

// namespace utility;

class Currency
{

    public function convertToHezarToman($value)
    {
        return $value / 1000;
    }

    public function convertToRial($value)
    {
        return $value * 10;
    }


    public function formatHezarToman($value)
    {
        $lang = new lang();
        return $lang->convertToPersian(number_format($this->convertToHezarToman($value))) . 'هزار تومان';
    }

    public function formatToman($value)
    {

        $lang = new lang();
        return $lang->convertToPersian(number_format($value)) . 'تومان';
    }

    public function formatRial($value)
    {
        $lang = new lang();
        return $lang->convertToPersian(number_format($this->convertToRial($value))) . 'ریال';
    }


}