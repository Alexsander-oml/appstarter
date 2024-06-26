<?php

namespace App\Models;

use CodeIgniter\Model;

class EmprestimoModel extends Model
{
  protected $table      = 'emprestimos';
  protected $primaryKey = 'id';

  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = ['UserId', 'LivroId'];

  protected $useAutoIncrement = true;

  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  protected $allowCallbacks = true;
  protected $beforeInsert   = [];
  protected $afterInsert    = [];
  protected $beforeUpdate   = [];
  protected $afterUpdate    = [];
  protected $beforeFind     = [];
  protected $afterFind      = [];
  protected $beforeDelete   = [];
  protected $afterDelete    = [];

  public function __construct()
  {
    parent::__construct();
    $this->db = \Config\Database::connect();
  }

  public function getEmprestimosByUserId($userId)
  {
    return $this->where('UserId', $userId)->findAll();
  }
}
