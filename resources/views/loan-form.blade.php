@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5 text-2xl font-bold">Loan Eligibility Form</h1>
    <form action="{{ route('loan.store') }}" method="POST" class="max-w-lg mx-auto p-4 bg-white shadow-md rounded">
        @csrf
        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required 
                pattern="[A-Za-z\s]+" 
                title="Only letters and spaces allowed">
        </div>
        
        <!-- Phone -->
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium">Phone Number:</label>
            <input 
                type="text" 
                id="phone" 
                name="phone" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required 
                pattern="01[3-9]\d{8}" 
                title="Must be a valid Bangladeshi number (e.g., 017xxxxxxxx)">
        </div>
        
        <!-- Address -->
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium">Address:</label>
            <input 
                type="text" 
                id="address" 
                name="address" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required>
        </div>
        
        <!-- Age -->
        <div class="mb-4">
            <label for="age" class="block text-sm font-medium">Age:</label>
            <input 
                type="number" 
                id="age" 
                name="age" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required 
                min="18">
        </div>
        
        <!-- Date of Birth -->
        <div class="mb-4">
            <label for="dob" class="block text-sm font-medium">Date of Birth:</label>
            <input 
                type="date" 
                id="dob" 
                name="dob" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required>
        </div>
        
        <!-- Employment -->
        <div class="mb-4">
            <label for="employment" class="block text-sm font-medium">Employment:</label>
            <input 
                type="text" 
                id="employment" 
                name="employment" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required>
        </div>
        
        <!-- Monthly Income -->
        <div class="mb-4">
            <label for="income" class="block text-sm font-medium">Monthly Income:</label>
            <input 
                type="number" 
                id="income" 
                name="income" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required>
        </div>
        
        <!-- Existing Debts -->
        <div class="mb-4">
            <label for="debts" class="block text-sm font-medium">Existing Debts:</label>
            <input 
                type="number" 
                id="debts" 
                name="debts" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required>
        </div>
        
        <!-- Loan Amount -->
        <div class="mb-4">
            <label for="loan_request" class="block text-sm font-medium">Loan Amount:</label>
            <input 
                type="number" 
                id="loan_request" 
                name="loan_request" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required>
        </div>
        
        <!-- Repayment Period -->
        <div class="mb-4">
            <label for="repayment_years" class="block text-sm font-medium">Repayment Period (in years):</label>
            <input 
                type="number" 
                id="repayment_years" 
                name="repayment_years" 
                class="w-full mt-1 border-gray-300 rounded-md shadow-sm" 
                required>
        </div>
        
        <!-- Submit Button -->
        <div class="text-center">
            <button 
                type="submit" 
                class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection
