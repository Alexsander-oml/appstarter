<?php

namespace App\Models;

use CodeIgniter\Model;

class LivroModel extends Model
{
  protected $table      = 'livros';
  protected $primaryKey = 'id';
  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = ['titulo', 'ano', 'autor', 'editora', 'quantidade'];
}
