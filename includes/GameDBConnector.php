<?php

use Zttp\Zttp;
use Zttp\ZttpResponse;

class GameDBConnector
{
    protected $endpoint;
    protected $userkey;

    public function __construct()
    {
        $this->endpoint = 'https://api-v3.igdb.com/';
        $this->userkey = '5a31ba5ae8941dbb5677041f75809fb3';
    }

    public function search(String $text){

        $response = Zttp::withHeaders(['user-key' => $this->userkey])->post( $this->endpoint . 'search', ['name' => $text, 'fields' => 'name'] );

        if( $response->isOk() ){

            $json = $response->json();

            if( count($json) > 0 ){
                $this->grabGameImage($json[0]['id']);
            }


        } else {
            echo $response->status();
        }

    }

    private function grabGameImage(int $game_id){
        $response = Zttp::withHeaders(['user-key' => $this->userkey])->post( $this->endpoint . 'screenshots', ['game' => $game_id ]);

        if( $response->isOk() ){

            $json = $response->json();
            var_dump(  $json );
            die;

        } else {
            echo $response->status();
        }
    }

}