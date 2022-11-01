<?php

class UsuarioModel extends ObjectModel {
    public $id;
    public $name;
    public $lastname;
    public $genre;
    public $description;
    public $photo;
    public static $definition = [
        'table' => 'ps_user',
        'primary' => 'id',
        'fields' => [
            'name' =>  ['type' => self::TYPE_STRING, 'validate' => 'isAnything', 'required'=>true],
            'lastname' =>  ['type' => self::TYPE_STRING, 'validate' => 'isAnything', 'required'=>true],
            'genre' =>  ['type' => self::TYPE_INT, 'validate' => 'isAnything', 'required'=>true],
            'description' =>  ['type' => self::TYPE_STRING, 'validate' => 'isAnything', 'required'=>true],
            'photo' => ['type'=>self::TYPE_STRING, 'validate'=>'isAnything','required'=>true,],
        ],
    ];
}