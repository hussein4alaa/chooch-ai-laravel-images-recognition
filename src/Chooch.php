<?php

namespace g4t\Chooch;

use g4t\Chooch\Requests\Requests;

class Chooch extends Requests
{

    /**
     * Create Person with name in specific model
     */
    public static function CreatePerson($name, $model_id)
    {
        $ch = new Chooch;
        $url = $ch->url.'/predict/face?person_name='.$name.'&model_id='.$model_id.'&apikey='.$ch->api_token.'&command=create_person';
        return self::Post($url, $name);
    }


    /**
     * Insert image to specific person
     */
    public static function InsertPrsonImage($id, $image)
    {
        $ch = new Chooch;
        $url = $ch->url.'predict/face?person_id_filter='.$id.'&apikey='.$ch->api_token.'&command=insert_person_image';
        return self::callApi($url, $image);
    }


    /**
     * Create person with image
     */
    public static function InsertPersonWithImage($name = 'no name', $image, $model_id)
    {
        $ch = new Chooch;
        $url = $ch->url.'predict/face?key_id='.$name.'&model_id='.$model_id.'&command=insert_person_image_key_id&apikey='.$ch->api_token;
        return self::callApi($url, $image);
    }


    /**
     * Search in specific model using local image
     */
    public static function SearchLocal($image, $model_id)
    {
        $ch = new Chooch;
        $url = $ch->url.'predict/face?person_id_filter=-1&model_id='.$model_id.'&apikey='.$ch->api_token;
        return self::callApi($url, $image);
    }


    /**
     * Search in specific model using URL
     */
    public static function SearchURL($image_url, $model_id)
    {
        $ch = new Chooch;
        $url = $ch->url.'/predict/face?url='.$image_url.'&person_id_filter=-1&model_id='.$model_id.'&apikey='.$ch->api_token;
        return self::SearchMethod($url);
    }



}
