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
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr auto auto;
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
        grid-template-columns:2fr 2fr 2fr 2fr 2fr auto auto;
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
    
    .form-modal {
    border-radius: 30px;
    padding: 20px;
    max-width: 500px;
    margin: auto;
    background-color: #fff;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    font-family: 'Poppins', sans-serif;
}

.form-label {
    font-weight: 600;
    color: #333;
}

.btn-success {
    background-color: #28a745;
    border: none;
    border-radius: 10px;
}

.btn-danger {
    background-color: #b30000;
    border: none;
    border-radius: 10px;
}

.edit-input {
        width: 100% !important;
        /* Ensure all inputs have the same width */
        max-width: 100% !important;
        /* Prevent any shrinking */
        border: 2px solid #ccc !important;
        /* Default gray border */
        border-radius: 8px !important;
        /* Rounded corners */
        padding: 10px !important;
        /* Consistent padding */
        font-size: 14px !important;
        /* Maintain uniform text size */
        transition: border 0.2s ease-in-out;
        /* Smooth transition */
        display: block;
        /* Ensures it takes full width */
        margin-bottom: 5px;
    }

    .edit-input:focus {
        border: 2px solid #1E1E8F !important;
        /* Apply red border on focus */
        outline: none !important;
        /* Remove default browser outline */
        box-shadow: none !important;
        /* Remove blue glow */
    }
  /* Keeps original width */
  .submit-button {
        width: 70%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 12px;
        color: white;
        background-color: #18a74f;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .cancel-button {
        width: 30%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 12px;
        color: white;
        background-color: #af0000;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover effects */
    .update-button:hover {
        background-color: #14813b;
    }

    .cancel-button:hover {
        background-color: #8b0000;
    }
    .leave-status {
    padding: 6px 20px;
    font-weight: 600;
    width: 100px;
    color: white;
    border-radius: 30px;
    text-align: center;
    
}

/* Specific status colors */
.leave-status.pending {
    background-color: #facc15; /* Tailwind yellow-400 */
    color: #000; /* Optional: for contrast */
}

.leave-status.approved {
    background-color: #16a34a; /* Tailwind green-600 */
}

.leave-status.rejected {
    background-color: #dc2626; /* Tailwind red-600 */
}

    
</style>

<x-app-layout>
<div class="main-content">
        <div class="dashboard-content">

            <!-- Header -->
            <div class="header">
                <img src="{{ asset('images/leave_blue.png') }}" alt="Leave Icon">
                <h1>Leave Request</h1>
            </div>
        </div>

        <button class="add-button" data-bs-toggle="modal" data-bs-target="#addRequestModal">
            <img src="{{ asset('images/plus.png') }}" alt="Add Icon" style="margin-right: 8px;">
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
            <label>Reason</label>
            <label>Status</label>
           
        </div>
        @forelse($leaveRequests as $leave)
    <div class="cardL">
        <label>{{ $leave->leave_type }}</label>
        <label>{{ \Carbon\Carbon::parse($leave->start_date)->format('F j, Y') }}</label>
        <label>{{ \Carbon\Carbon::parse($leave->end_date)->format('F j, Y') }}</label>

        <label>{{ $leave->reason }}</label>
        <label class="leave-status {{ strtolower($leave->status) }}">
                {{ $leave->status }}
            </label>


       
    </div>
@empty
    <p>No request found.</p>
@endforelse


<!-- Modal -->
<div class="modal fade" id="addRequestModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content form-modal">
            <form action="{{ route('leave.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div>
                        <label for="leave_type" class="form-label">Leave Type</label>
                        <select name="leave_type" id="leave_type" class="edit-input">
                            <option value="">Select leave type</option>
                            <option value="Sick Leave" {{ old('leave_type') == 'Sick Leave' ? 'selected' : '' }}>Sick Leave</option>
                            <option value="Casual Leave" {{ old('leave_type') == 'Casual Leave' ? 'selected' : '' }}>Casual Leave</option>
                            <option value="Vacation Leave" {{ old('leave_type') == 'Vacation Leave' ? 'selected' : '' }}>Vacation Leave</option>
                            <option value="Other" {{ old('leave_type') == 'Other' ? 'selected' : '' }}>Other(Please specify in reason)</option>
                        </select>
                        @error('leave_type') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div>
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="edit-input" value="{{ old('start_date') }}">
                        @error('start_date') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div>
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="edit-input" value="{{ old('end_date') }}">
                        @error('end_date') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div>
                        <label for="reason" class="form-label">Reason</label>
                        <textarea name="reason" class="edit-input" rows="3" placeholder="Brief reason for leave">{{ old('reason') }}</textarea>
                        @error('reason') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="d-flex justify-content-between gap-2 mt-4">
                        <button type="submit" class="submit-button">Submit</button>
                        <button type="button" class="cancel-button" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</div>

<script>
      document.addEventListener("DOMContentLoaded", function () {
        const modal = new bootstrap.Modal(document.getElementById('addRequestModal'));
        
        // Check if the modal is active (for validation errors after submission)
        if (@json($errors->any())) {
            modal.show(); // Show modal if there are errors
        }
    });
document.addEventListener("DOMContentLoaded", function () {
    const today = new Date().toISOString().split('T')[0];
    const startDate = document.getElementById('start_date');
    const endDate = document.getElementById('end_date');

    // Dates already used by the current user (from the controller)
    const usedLeaveDates = @json($leaveDates); // e.g., ['2025-04-05', '2025-04-06', ..., '2025-04-10']

    /**
     * Helper to check if a date is in the used list
     */
    function isUsedDate(dateStr) {
        return usedLeaveDates.includes(dateStr);
    }

    /**
     * Disable selecting used dates
     */
    function preventUsedDate(input) {
        input.addEventListener("input", function () {
            const selectedDate = this.value;
            if (isUsedDate(selectedDate)) {
                alert("This date has already been used for a previous leave request. Please choose another.");
                this.value = ''; // Clear the input if the selected date is already used
            }
        });
    }

    // Set minimum date as today
    if (startDate) {
        startDate.setAttribute('min', today);
        preventUsedDate(startDate); // Prevent used dates on start date
    }

    if (endDate) {
        endDate.setAttribute('min', today);
        preventUsedDate(endDate); // Prevent used dates on end date
    }

    // Adjust endDate's min when startDate changes
    startDate?.addEventListener('change', function () {
        if (endDate) {
            endDate.setAttribute('min', startDate.value);
        }
    });

    // Disable all dates between existing leave ranges (this assumes dates are stored in `usedLeaveDates`)
    function disableUsedDates() {
        const allInputs = [startDate, endDate];
        allInputs.forEach(input => {
            input.addEventListener("focus", function () {
                // Loop through all dates and disable the used ones
                usedLeaveDates.forEach(function(date) {
                    const dateOption = document.querySelector(`option[value="${date}"]`);
                    if (dateOption) {
                        dateOption.disabled = true;
                    }
                });
            });
        });
    }

    disableUsedDates();
});

    document.addEventListener("DOMContentLoaded", function () {
                function showSuccessMessage(message) {
                    var successMessage = document.createElement("div");
                    successMessage.className = "alert alert-success fade show"; // Bootstrap alert classes
                    successMessage.setAttribute("role", "alert");
                    successMessage.innerHTML = `<strong>Success!</strong> ${message}`;

                    let mainContent = document.querySelector(".main-content");
                    let cardN = document.querySelector(".cardN");

                    if (mainContent && cardN) {
                        mainContent.insertBefore(successMessage, cardN);
                    } else {
                        console.error("Error: .main-content or .cardN not found!");
                        return;
                    }

                    // Hide after 20 seconds (20,000 milliseconds)
                    setTimeout(() => {
                        successMessage.classList.remove("show");
                        successMessage.classList.add("fade"); // Smooth fade-out
                        setTimeout(() => {
                            successMessage.remove();
                        }, 500); // Remove after fade-out
                    }, 5000);
                }

                // Check if there's a success message from Laravel session
                let sessionSuccess = document.querySelector(".alert-success");
                if (sessionSuccess) {
                    setTimeout(() => {
                        sessionSuccess.classList.remove("show");
                        sessionSuccess.classList.add("fade");
                        setTimeout(() => {
                            sessionSuccess.remove();
                        }, 500);
                    }, 5000);
                }
            });
</script>

        </x-app-layout>
    
   <!--  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('leave.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="leave_type" class="form-label">Leave Type</label>
                            <select name="leave_type" id="leave_type" class="form-control">
                                <option value="">Select leave type</option>
                                <option value="Sick Leave">Sick Leave</option>
                                <option value="Casual Leave">Casual Leave</option>
                                <option value="Vacation Leave">Vacation Leave</option>
                            </select>
                            @error('leave_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control">
                            @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control">
                            @error('end_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="reason" class="form-label">Reason</label>
                            <textarea name="reason" class="form-control" rows="3"></textarea>
                            @error('reason') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Leave Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
