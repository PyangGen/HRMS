<style>
 /* Main Content */
 html,
    body {
        overflow: hidden;
        /* Disable scrolling */
        height: 100%;
        /* Ensure the body and html take up full height */
    }

    .main-content {
        margin-left: 250px;
        padding-left: 70px;
        padding-right: 70px;
        width: calc(100% - 250px);
        /* Adjust width to account for margin */
        min-height: 100vh;
        background-color: #f0f0f5;
        overflow: hidden;
        /* Prevent content overflow */
    }

    .dashboard-content {
        margin-top: 30px;

    }

    /* Header */
    .header {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .header h1 {
        margin-top: 30px;
        color: #1E1E8F;
        /* Blue color for the text */
        font-size: 1.5em;
        /* Increased font size for bolder appearance */
        margin-left: 15px;
        /* Adds spacing to the left */
        font-family: 'Poppins', sans-serif;
        font-weight: 900;
        /* Maximum font weight */
        letter-spacing: -0.5px;
        /* Tighter letter spacing for bolder look */
        text-shadow: 0.5px 0 0 currentColor;
        /* Text shadow for extra boldness */
    }

    .header img {
        width: 40px;
        margin-top: 20px;

    }

    .cardN {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr 2fr auto auto;
        align-items: center;
        column-gap: 10px;
        width: 100%;
        box-sizing: border-box;
        margin: 10px 0;
    }

    /* Card L Style (for profile and others) */
    .cardL {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 100%;
        display: grid;
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr 1fr auto auto;
        align-items: center;
        column-gap: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    /* Align content text inside cards */
    .cardN div,
    .cardL div,
    .cardN label,
    .cardL label {
        text-align: left;
    }

    /* Dropdown Styling */
    .cardL select {
        width: 100%;
        max-width: 150px;
        padding: 5px;
    }

    /* Profile Icon Styling */
    .cardL .product-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    /* Responsive Grid Adjustments */
    @media (max-width: 1200px) {

        .cardN,
        .cardL {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {

        .cardN,
        .cardL {
            grid-template-columns: repeat(2, 1fr);
        }

        .cardL select {
            width: 100%;
        }
    }

    @media (max-width: 480px) {

        .cardN,
        .cardL {
            grid-template-columns: 1fr;
        }
    }

</style>

<div class="main-content">
        <div class="dashboard-content">
            <!-- Header -->
            <div class="header">
                <img src="{{ asset('images/payroll_blue.png') }}" alt="Product Icon">
                <h1>Payroll</h1>
            </div>
        </div>

     

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif


        <div class="cardN">
            <label>Employee Name</label>
            <label>Salary</label>
            <label>Deduction</label>
            <label>Total Salary</label>
            <label>Action</label>
        </div>

        </div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payroll Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">Payroll Records</h1>
                        <a href="{{ route('admin/payrolls/create') }}" class="btn btn-primary">+ Add Payroll</a>
                    </div>
                    <hr/>
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Employee Name</th>
                            <th>Salary</th>
                            <th>Bonus</th>
                            <th>Pay Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @forelse($payrolls as $payroll)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $payroll->name }}</td>
                            <td class="align-middle">₱{{ number_format($payroll->salary, 2) }}</td>
                            <td class="align-middle">₱{{ number_format($payroll->bonus, 2) }}</td>
                            <td class="align-middle">{{ $payroll->pay_date }}</td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin/payrolls/edit', ['id'=>$payroll->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                                    <a href="{{ route('admin/payrolls/delete', ['id'=>$payroll->id]) }}" type="button" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <p class="text-center">Payroll records not found</p>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
