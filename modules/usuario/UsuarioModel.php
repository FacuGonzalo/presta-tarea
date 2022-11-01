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
        'multilang' => true,
        'multilang_shop' => false,
        'fields' => [
            'name' =>  [
                'type' => self::TYPE_STRING,
                'validate' => 'isAnything',
                'required'=>true
            ],
            'lastname' =>  [
                'type' => self::TYPE_STRING,
                'validate' => 'isAnything',
                'required'=>true
            ],
            'genre' =>  [
                'type' => self::TYPE_INT,
                'validate' => 'isAnything',
                'required'=>true
            ],
            'description' =>  [
                'type' => self::TYPE_STRING,
                'validate' => 'isAnything',
                'required'=>true
            ],
            'photo' => [
                'type' => self::TYPE_STRING,
                'lang' => false,
                'validate' =>  null,
                'size' => 255,
            ],
        ],
    ];
}