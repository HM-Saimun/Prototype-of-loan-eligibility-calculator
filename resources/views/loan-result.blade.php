@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Loan Eligibility Result</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Age:</strong> {{ $data['age'] }}</p>
    <p><strong>Date of Birth:</strong> {{ $data['dob'] }}</p>
    <p><strong>Employment:</strong> {{ $data['employment'] }}</p>
    <p><strong>Monthly Income:</strong> {{ number_format($data['income'], 2) }} BDT</p>
    <p><strong>Existing Debts:</strong> {{ number_format($data['debts'], 2) }} BDT</p>
    <p><strong>Loan Amount Requested:</strong> {{ number_format($data['loan_request'], 2) }} BDT</p>
    <p><strong>Repayment Period:</strong> {{ $data['repayment_years'] }} years</p>

    <h2>Eligibility:</h2>
    <p><strong>Status:</strong> {{ $status }}</p>
    <p><strong>Message:</strong> {{ $message }}</p>
</div>
@endsection
