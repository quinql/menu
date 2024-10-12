<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'MenuItems'; // Specifies the database table that this model should interact with.
    protected $primaryKey = 'ItemID'; // Defines the primary key field of the table for CRUD operations.
    // Lists the fields that are allowed to be set using the model. This is for security and prevents mass assignment vulnerabilities.
    protected $allowedFields = ['ItemID','MenuID','Name', 'Price']; 
    protected $returnType = 'array'; // Sets the default return type of the results. This model will return results as arrays.
}
