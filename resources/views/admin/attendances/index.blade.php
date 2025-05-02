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
        margin-top: -50px;
        /* Adjust width to account for margin */
        background-color: #f0f0f5;
        overflow: hidden;
        /* Prevent content overflow */
    }

    /* Header */
    .header {
        display: flex;
        align-items: center;
        margin-top: 80px;
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
        width: 100.5%;
        box-sizing: border-box;
        margin: 10px 0;
        font-family: 'Poppins', sans-serif;
    }

    /* Card L Style (for profile and others) */
    .cardL {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 100.5%;
        display: grid;
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr 2fr auto auto;
        align-items: center;
        column-gap: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
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
/*     .add-button {
        background-color: #1E1E8F;
        color: white;
        border-radius: 10px;
        border: none;
        margin-left: 935px;
        margin-top: -50px;
        padding: 12px 21px;
        font-family: 'Poppins', sans-serif;
        display: flex;
        margin-bottom: 10px;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    } */
    .delete-btn {
    background-color: #1E1E8F;
    border: none;
    border-radius: 20px;
    color: white;
    width: 115%;
    height: 90%;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    text-align: center;
    display: inline-block;   /* Ensures it behaves like a button */
    line-height: 30px; /* Adjust this value to push the text vertically */
}


.request-btn {
    border: none;
    border-radius: 8px;
    color: white;
    padding: 6px;
    width: 55%;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    text-align: center;
    display: inline-block;
}

.request-btn.pending {
    background-color: #ffc107; /* Yellow */
}

.request-btn.approved {
    background-color: #18a74f; /* Green */
}

.request-btn.rejected {
    background-color: #dc3545; /* Red */
}

</style>
<x-app-layout>
<div class="main-content">
        <div class="dashboard-content">
        
            <!-- Header -->
            <div class="header">
                <img src="{{ asset('images/user_blue.png') }}" alt="Product Icon">
                <h1>Attendance Records</h1>
            </div>
        </div>
        
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                {{ implode(', ', $errors->all()) }}
            </div>
        @endif
        <div class="cardN">
            <label>Name</label>
            <label>Time</label>
            <label>Hours</label>
            <label>Status</label>
            <label>Request</label>
            <label>Date</label>
        </div>

        @foreach($attendances as $attendance)
    <div class="cardL">
        <label class="user-name">{{ $attendance->name ?? $attendance->user->name ?? '-' }}</label>

        @php
            $timeIn = $attendance->time_in ? \Carbon\Carbon::parse($attendance->time_in)->timezone('Asia/Manila') : null;
            $timeOut = $attendance->time_out ? \Carbon\Carbon::parse($attendance->time_out)->timezone('Asia/Manila') : null;
            $duration = $timeIn && $timeOut ? $timeIn->diff($timeOut)->format('%Hh %Im') : '-';
            $statusClass = match($attendance->request_approved) {
                'approved' => 'approved',
                'rejected' => 'rejected',
                default => 'pending',
            };
        @endphp

        <label>{{ $timeIn ? $timeIn->format('h:i A') : '-' }} - {{ $timeOut ? $timeOut->format('h:i A') : '-' }}</label>
        <label>
    {{ $duration }} / {{ $attendance->hours ?? '-' }} hrs
</label>

        <label>{{ $attendance->status }}</label>

        @if($attendance->request !== 'none')
            <!-- ✅ Show modal trigger button -->
            <button type="button"
                class="request-btn {{ $statusClass }}"
                data-bs-toggle="modal"
                data-bs-target="#requestDetailsModal{{ $attendance->id }}">
                {{ ucfirst($attendance->request) }}
            </button>
        @else
            <!-- ❌ Unclickable button for 'none' requests -->
            <button type="button" class="request-btn disabled" disabled>
                {{ ucfirst($attendance->request) }}
            </button>
        @endif

        <label>{{ $attendance->created_at->format('F j, Y') }}</label>

    </div>

    <!-- ✅ Modal rendered per user (must be outside the if condition to load even if hidden) -->
    @if($attendance->request !== 'none')
        <div class="modal fade" id="requestDetailsModal{{ $attendance->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('attendance.updateRequestStatus', $attendance->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="modal-header">
                            <h5 class="modal-title" id="requestDetailsModalLabel{{ $attendance->id }}">Request Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <p><strong>Request Type:</strong> {{ ucfirst($attendance->request) }}</p>
                            <p><strong>Reason:</strong> {{ $attendance->request_reason ?? 'N/A' }}</p>

                            <div class="mb-3">
                                <label for="request_approved{{ $attendance->id }}" class="form-label"><strong>Approval Status:</strong></label>
                                <select name="request_approved" id="request_approved{{ $attendance->id }}" class="form-select" required>
                                    <option value="pending" {{ $attendance->request_approved === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ $attendance->request_approved === 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ $attendance->request_approved === 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update Status</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    @endif
@endforeach
                    <div class="mt-2">
                        <p>Total Records: <strong>{{ $total }}</strong></p>
                    </div>
                    
                    <script>
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
<!-- <label>
                    @if ($attendance->schedule)
                        {{ \Carbon\Carbon::parse($attendance->schedule->shift_start)->format('h:i A') }}
                                                -
                        {{ \Carbon\Carbon::parse($attendance->schedule->shift_end)->format('h:i A') }}
                            @else
                                Not Set
                                @endif
                </label> -->
