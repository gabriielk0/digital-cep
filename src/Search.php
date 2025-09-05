<?php

namespace Gabriel\DigitalCep;

class Search{
    private $url = 'https://viacep.com.br/ws/';

    public function getAdressFromZipcode(string $zipcode): array{

        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

        $get = file_get_contents($this->url . $zipcode . "/json");

        return (array) json_decode($get);
    }
}