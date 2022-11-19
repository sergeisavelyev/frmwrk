<?php

namespace app\models;

use core\Model;

class Main extends Model
{
    public function getName()
    {
        $name = $this->db->row('SELECT * FROM users');
        return $name;
    }
}
