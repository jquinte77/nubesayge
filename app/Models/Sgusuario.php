<?php

namespace App\Models;

use CodeIgniter\Model;

class Sgusuario extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sgusuario';
    protected $primaryKey       = 'sicodusu';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       =  \App\Entities\Usuario::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "sicodusu","vusuario","vnombre","vcargo","vpass","icodper","vaccess",
        "bactivo","vobserv","vnomusu","sdfecact","vnomter","vnumser","vnumip","vpassword"
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
