<?php

class date {
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function get_formatted_date() {
        $date = date('Y-m-d');
        return $date;
    }

    public function get_formatted_date_with_month() {
        $date = date('d M Y');
        return $date;
    }
}
