<?php
/**
 * Created by PhpStorm.
 * User: serii
 * Date: 3/8/18
 * Time: 9:06 PM
 */

namespace App\Models;


use App\Db;

class User
{
    public $name;
    public $email;

    public static function findAll()
    {
        $db = new Db();

        $res = $db->query('SELECT * FROM users', 'App\Models\User');

        return $res;
    }
}
