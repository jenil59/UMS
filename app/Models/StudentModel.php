<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'tlb_student_details';
    protected $primaryKey = 'Enrollment';


    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Enrollment',
        'first_name',
        'Last_Name',
        'gender',
        'dob',
        'Mobile',
        'Email',
        'Pass',
        'Branch',
        'Sem',
        'status'
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}


?>