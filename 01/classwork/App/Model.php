<?php
/**
 * Created by PhpStorm.
 * User: serii
 * Date: 3/8/18
 * Time: 10:58 PM
 */

namespace App;


class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();

        $res = $db->query('SELECT * FROM ' . static::TABLE, static::class);

        return $res;
    }
}
