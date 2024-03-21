<?php
class Generica{
    public function toDate($date){
        return date("d/m/Y",strtotime($date));
    }
    /* static function toDate($date){
        return date("d/m/Y",strtotime($date));
    } */
}