<?php

namespace bbo51dog\kagagwa;

class Manager{

    /** @var string */
    private $path;

    /** @var array */
    private $data;

    public function __construct(string $dir){
        $path = $dir."Data.json";
        if(file_exists($path)){
            $json = file_get_contents($path);
            $data = json_decode($json, true);
        }else{
            $data = [];
        }
        $this->path = $path;
        $this->data = $data;
    }
}