<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    // Define the table name for the model
    protected $table = 'insurances';

    protected $fillable = ['policy_number', 'pdf_file'];

}
