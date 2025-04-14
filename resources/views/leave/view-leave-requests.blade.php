<!-- <style>
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
    .add-button {
        background-color: #1E1E8F;
        color: white;
        border-radius: 10px;
        border: none;
        margin-left: 940px;
        /* Increased margin to move button right */
        margin-top: -50px;
        /* Match Filter button's margin-top */
        padding: 12px 21px;
        font-family: 'Poppins', sans-serif;
        display: flex;
        margin-bottom: 10px;
        justify-content: center;
        /* Horizontal alignment */
        align-items: center;
        /* Vertical alignment */
        text-decoration: none;
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


<x-app-layout>
<div class="main-content">
        <div class="dashboard-content">

            <div class="header">
                <img src="{{ asset('images/leave_blue.png') }}" alt="Leave Icon">
                <h1>Leave Request</h1>
            </div>
        </div>

        <button class="add-button" data-bs-toggle="offcanvas" data-bs-target="#addRequestModal">
            <img src="{{ asset('images/plus.png') }}" alt="Add Icon" style="margin-right: 8px; ">
            Add Request
        </button>

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="cardN">
            <label>Leave Type</label>
            <label>Start Date</label>
            <label>End Date</label>
            <label>Status</label>
        </div>
        @forelse($leaveRequests as $leave)
    <div class="cardL">
        <label>{{ $leave->leave_type }}</label>
        <label>{{ $leave->start_date }}</label>
        <label>{{ $leave->end_date }}</label>
        <label>{{ $leave->status }}</label>
    </div>
@empty
    <p>No request found.</p>
@endforelse
</div>

</x-app-layout> -->
   <!--  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4">My Leave Requests</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Leave Type</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leaveRequests as $leave)
                            <tr>
                                <td>{{ $leave->leave_type }}</td>
                                <td>{{ $leave->start_date }}</td>
                                <td>{{ $leave->end_date }}</td>
                                <td>{{ $leave->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div> -->

