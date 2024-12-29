<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class loanController extends Controller
{
    public function showForm()
    {
        return view('loan-form'); // Ensure this file exists in resources/views
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|regex:/^[A-Za-z\s]+$/',
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'address' => 'required',
            'age' => 'required|integer|min:18',
            'dob' => 'required|date',
            'employment' => 'required',
            'income' => 'required|numeric|gt:0', // Prevent zero or negative income
            'debts' => 'required|numeric|gte:0',
            'loan_request' => 'required|numeric|gt:0',
            'repayment_years' => 'required|integer|gt:0',
        ]);

        // Calculate Debt-to-Income Ratio
        $dti = ($data['debts'] / $data['income']) * 100;

        // Loan calculation
        $interest_rate = 0.1; // 10% annual interest rate
        $n = $data['repayment_years'] * 12; // Total months
        $monthly_interest_rate = $interest_rate / 12;

        // EMI formula: E = [P * r * (1 + r)^n] / [(1 + r)^n - 1]
        $emi = ($data['loan_request'] * $monthly_interest_rate) /
            (1 - pow(1 + $monthly_interest_rate, -$n));

        // Determine eligibility
        $status = $dti < 40 ? "Eligible for Loan" : "Not Eligible for Loan";
        $message = $dti < 40 ? "Monthly EMI: " . round($emi, 2) . " BDT" : "Your debt-to-income ratio is too high.";

        return view('loan-result', [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ]);
    }
}
