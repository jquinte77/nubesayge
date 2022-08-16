<?php

namespace App\Models;

use CodeIgniter\Model;

class Opcionesmenu extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'opcionesmenu';
    protected $primaryKey       = 'icodusu';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = \App\Entities\Menu::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'icodusu','usuario','idopcionmenu','nombreopcionmenu','consulta','clasedoc',
        'tipodoc','keytecla','execproc','params','frmshow','frmshowdialog','tipomov',
        'vmenu','bactivo','btoolstrip','frmshowwebmvc','bweb','repodocu'
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

    public function setSubMenu($id,$length)
    {
        $query =  $this->query('CALL ver_submenu("'.$id.'", '.$length.');');
        $submenu = $query->getResultArray();
        return $submenu;
    }

    public function setMenu()
    {
        $menu = $this->where('bweb',1)
                ->where('LENGTH(idopcionmenu)',2)
                ->findAll();
        foreach ($menu as $firstPos => $firstmenu) {
            if ($firstmenu) {
                $submenu =  $this->setSubMenu($firstmenu->idopcionmenu,4);
                if($submenu && count($submenu)){
                    $array[$firstmenu->idopcionmenu][] = [
                        'name' => $firstmenu->nombreopcionmenu,
                        'showweb' => $firstmenu->frmshowwebmvc,
                        'submenu' => []
                    ];
                    $array[$firstmenu->idopcionmenu][0]['submenu'] =  $submenu;
                    foreach ($array[$firstmenu->idopcionmenu][0]['submenu'] as $secondPos => $secondmenu) {
                        if ($secondmenu) {
                            $thirdmenu =  $this->setSubMenu($secondmenu['idopcionmenu'],6);
                            if($thirdmenu && count($thirdmenu)){
                                $array[$firstmenu->idopcionmenu][0]['submenu'][$secondPos]['thirdmenu'] = $thirdmenu;
                            }
                        }
                    }
                }
            } 
        }
        return json_encode($array);
    }

}
