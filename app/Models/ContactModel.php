<?php

namespace App\Models;
// phpcs:ignoreFile
/**
 *  Model kết nối Database contact_mails của ở trang LIỆN HỆ - CONTACT,
 */

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ContactModel extends Model
{
    // protected $db;

    // public function __construct(ConnectionInterface $db)
    // {
    //     $this->db = $db;
    // }

    protected $table      = 'contact_mails';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType    = 'array';
    protected $allowedFields = ['name', 'email', 'subject', 'message', 'reply_status', 'reply_message', 'status', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'name'     => 'required|alpha_numeric_space|min_length[3]',
        'email'    => 'required|valid_email',
    ];
    protected $validationMessages   = [
        'email' => [
            'required' => 'Sorry. That email is required.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
