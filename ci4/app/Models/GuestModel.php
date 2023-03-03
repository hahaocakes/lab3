<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'jatolentino_myguests';

    public function getGuest()
      
        return $this->findAll();
}