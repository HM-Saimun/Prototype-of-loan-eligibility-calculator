<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'name', 'phone', 'address', 'age', 'dob', 'employment', 
        'income', 'debts', 'loan_request', 'repayment_years'
    ];
}
