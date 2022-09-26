<?php

namespace App\Models;

use CodeIgniter\Model;

class TripsModel extends Model
{
    protected $table = 'trips';
    protected $allowedFields = ['title', 'body'];

    protected $returnType     = 'object';

    public function getTrips($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->find($id);
    }
}