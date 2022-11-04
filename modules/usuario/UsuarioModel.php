<?php

class UsuarioModel extends ObjectModel {
    public $id;
    public $name;
    public $lastname;
    public $genre;
    public $description;
    public $photo;
    public static $definition = [
        'table' => 'user',
        'primary' => 'id',
        'fields' => [
            'name' =>  [
                'type' => self::TYPE_STRING,
                'validate' => 'isName',
                'required'=> true,
            ],
            'lastname' =>  [
                'type' => self::TYPE_STRING,
                'validate' => 'isName',
                'required'=>true
            ],
            'genre' =>  [
                'type' => self::TYPE_INT,
                'validate' => 'isAnything',
                'required'=>true
            ],
            'description' =>  [
                'type' => self::TYPE_STRING,
                'required'=>true
            ],
            'photo' => [
                'type' => self::TYPE_STRING,
                'size' => 255,
            ],
        ],
    ];
}