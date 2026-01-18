<?php
namespace App\Models;

use CodeIgniter\Model;

class DocumentationModel extends Model
{
    protected $table = 'documentation';
    protected $primaryKey = 'id';
    protected $allowedFields = ['type', 'file_path', 'title', 'description', 'sequence'];
}
