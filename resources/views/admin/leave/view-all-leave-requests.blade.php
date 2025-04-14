<style>
    /* Main Content */
    html, body {
    overflow: hidden; /* Disable scrolling */
    height: 100%; /* Ensure the body and html take up full height */
}

.main-content {
    margin-left: 250px;
    padding-left: 70px;
    padding-right: 70px;
    width: calc(100% - 250px);
    /* Adjust width to account for margin */
    min-height: 100vh;
    background-color: #f0f0f5;
    overflow: hidden; /* Prevent content overflow */
}
    .dashboard-content{
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
            color: #1E1E8F; /* Blue color for the text */
            font-size: 1.5em; /* Increased font size for bolder appearance */
            margin-left: 15px; /* Adds spacing to the left */
            font-family: 'Poppins', sans-serif;
            font-weight: 900; /* Maximum font weight */
            letter-spacing: -0.5px; /* Tighter letter spacing for bolder look */
            text-shadow: 0.5px 0 0 currentColor; /* Text shadow for extra boldness */
        }
        .header img{
            width: 40px;
            margin-top: 20px;
            
        }
        .cardN {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr  auto auto auto;
        align-items: center;
        column-gap: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        margin: 10px 0;
    }

    /* Card L Style (for profile and others) */
    .cardL {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr  auto auto auto;
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
        .cardN, .cardL {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {
        .cardN, .cardL {
            grid-template-columns: repeat(2, 1fr);
        }

        .cardL select {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .cardN, .cardL {
            grid-template-columns: 1fr;
        }
    }

    .modal-content {
        border-radius: 20px !important;
        /* Smooth rounded corners */
        overflow: hidden;
        /* Prevents content from overflowing */
        padding: 20px;
        width: 100%;
        max-width: 400px;
        /* Adjust this value to match your image size */
    }
        
    .hide-arrow {
        -webkit-appearance: none;  /* Safari/Chrome */
        -moz-appearance: none;     /* Firefox */
        appearance: none;
        background-image: none !important;
        background-color: white;
        padding-right: 1rem;
    }

    /* Optional: hide in Edge */
    select::-ms-expand {
        display: none;
    }
    .leaveStatusChange {
    color: white !important;
    font-weight: bold;
    text-align: center;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 100px !important;
    height: 40px !important;
    border: none !important;
    padding: 0 !important; /* ensure padding is reset */
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
}


    .leaveStatusChange option {
        color: black; /* fallback inside dropdown menu */
    }

    .status-pending {
        background-color: #facc15 !important; /* Yellow */
        color: white !important;
    }

    .status-approved {
        background-color: #18a74f !important; /* Green */
        color: white !important;
    }

    .status-rejected {
        background-color: #ef4444 !important; /* Red */
        color: white !important;
    }

    .hide-arrow {
        background-image: none !important;
    }
    .delete-btn {
    background-color: #AF0000;
    border: none;
    border-radius: 20px;
    color: white;
    padding: 6px 20px;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    text-align: center;
    display: inline-block;
   
}

.button-container {
    display: flex;
    
}
.delete-button {
    width: 223%; /* Ensure it's relative to the parent container */
    padding: 10px;
    border: none;
    border-radius: 8px;
    font-size: 13px;
    color: white;
    margin-left: 13px;
    background-color: #18a74f;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
    text-align: center; /* Ensure the text inside is centered */
    display: inline-block; /* Ensures button behaves like a block but does not take up full width */
    box-sizing: border-box; /* Ensures padding does not affect the width calculation */
}

/* Optionally, limit the max-width of the button */

    .cancell-button {
        width: 26%;
        height: 40px;
        border: 1px solid black;
        /* Ensure black border */
        border-radius: 8px;
        font-size: 13px;
        color: black;
        margin-left: 148px;
        background-color: none;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover effects */
    .delete-button:hover {
        background-color: #14813b;
    }

    .cancell-button:hover {
        background-color: #8b0000;
        color: white;
        border: none;
    }
    .delete-buttonn {
        width: 69%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 13px;
        color: white;
        margin-left: 15PX;
        margin-right: -10px;
        background-color: #18a74f;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
        text-align: center;

    }

    .cancell-buttonn {
        width: 26%;
        padding: 10px;
        border: 1px solid white;
        /* Ensure black border */
        border-radius: 8px;
        font-size: 13px;
        color: white;
        margin-right: 15px;
        background-color: #8b0000;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover effects */
    .delete-buttonn:hover {
        background-color: #14813b;
    }

</style>
<!-- Bootstrap CSS (in <head>) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (before </body>) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<x-app-layout>
<div class="main-content">
        <div class="dashboard-content">
            <div class="header">
                <img src="{{ asset('images/leave_blue.png') }}" alt="Product Icon">
                <h1>Request List</h1>
            </div>
        </div>


        @if (Session::has('success'))
            <div class="alert alert-success" role="alert" id="successMessage">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="cardN">
            <label>Name</label>
            <label >Leave Type</label>
            <label >Start Date</label>
            <label>End Date</label>
            <label>Reason</label>
            <label>Status</label>
            <label>Action</label>
        </div>
        @forelse($leaveRequests as $leave)
        <div class="cardL" data-leave-id="{{ $leave->id }}">
                <label >{{ $leave->user->name }}</label>
                <label >{{ $leave->leave_type }}</label>
                <label>{{ \Carbon\Carbon::parse($leave->created_at)->timezone('Asia/Manila')->format('F j, Y') }}</label>
                <label>{{ \Carbon\Carbon::parse($leave->updated_at)->timezone('Asia/Manila')->format('F j, Y') }}</label>

                <label >{{ $leave->reason }}</label>
                <select class="form-select leaveStatusChange hide-arrow"
                        data-current-status="{{ $leave->status }}">
                    <option value="Pending" {{ $leave->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Approved" {{ $leave->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                    <option value="Rejected" {{ $leave->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
                <div class="btn-group">
                    <a href="#" class="delete-btn" data-leave-id="{{ $leave->id }}" data-leave-name="{{  $leave->user->name }}">Delete</a>
                </div>
            </div>
        @empty
            <tr>
                <p class="text-center">Request not found</p>
            </tr>
        @endforelse
      


    <!-- Leave Status Update Modal -->
    <div class="modal fade" id="updateStatusModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Leave Status Change</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p id="leaveStatusChangeText"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="delete-buttonn" id="confirmLeaveStatusChange">Yes, Change</button>
                    <button type="button" class="cancell-buttonn" data-bs-dismiss="modal">Cancel</button>
                    
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deletion</h5>
            </div>
            <div class="modal-body">
                <p id="deleteUserText"></p>
            </div>
            <div class="button-container">
                <!-- Form for DELETE request -->
                <form id="deleteLeaveForm" action="#" method="POST">
                    @csrf
                    @method('DELETE') <!-- Spoof DELETE method -->
                    <button type="submit" class="delete-button" id="confirmDeleteUser">Yes, Delete</button>
                </form>
                <button type="button" class="cancell-button" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

    <script>
    let selectedLeaveId = null;
    let selectedLeaveStatus = null;

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".leaveStatusChange").forEach(function (select) {
            select.addEventListener("change", function () {
                const card = this.closest(".cardL"); // <-- corrected from tr to .cardL
                selectedLeaveStatus = this.value;
                
                // You must add data-leave-id to .cardL like below:
                selectedLeaveId = card.getAttribute("data-leave-id");
                const userName = card.querySelector("label")?.innerText || "this user";

                // Fill modal text
                document.getElementById("leaveStatusChangeText").innerHTML =
                    `Are you sure you want to change the leave request status for <strong>${userName}</strong> to <strong>${selectedLeaveStatus}</strong>?`;

                // Show modal
                const modal = new bootstrap.Modal(document.getElementById("updateStatusModal"));
                modal.show();
            });
        });

        // Handle confirm
        document.getElementById("confirmLeaveStatusChange").addEventListener("click", function () {
            if (selectedLeaveId && selectedLeaveStatus) {
                fetch("{{ route('admin.leave.update-leave-status') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        leave_id: selectedLeaveId,
                        status: selectedLeaveStatus
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert("Failed to update leave request status.");
                    }
                })
                .catch(error => {
                    console.error("Error updating leave status:", error);
                });
            }
        });
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
            document.addEventListener("DOMContentLoaded", function () {
        const selects = document.querySelectorAll(".leaveStatusChange");

        selects.forEach(select => {
            function updateColor(selectEl) {
                selectEl.classList.remove("status-pending", "status-approved", "status-rejected");

                switch (selectEl.value) {
                    case "Pending":
                        selectEl.classList.add("status-pending");
                        break;
                    case "Approved":
                        selectEl.classList.add("status-approved");
                        break;
                    case "Rejected":
                        selectEl.classList.add("status-rejected");
                        break;
                }
            }

            // Initial load
            updateColor(select);

            // On change
            select.addEventListener("change", function () {
                updateColor(this);
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(function (button) {
        button.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default anchor action

            // Get the leave ID and name from the data attributes
            let leaveId = this.getAttribute("data-leave-id");
            let leaveName = this.getAttribute("data-leave-name");

            // Set the modal text, using the name passed from the data attribute
            document.getElementById("deleteUserText").innerHTML =
                `Are you sure you want to delete the leave request for <strong>${leaveName}</strong>? This action cannot be undone.`;

            // Set the action for the form to the delete route with the leave ID
            const deleteForm = document.getElementById("deleteLeaveForm");
            deleteForm.setAttribute("action", `{{ route('admin.leave.delete', ['id' => '__LEAVE_ID__']) }}`.replace("__LEAVE_ID__", leaveId));

            // Show the modal
            let deleteUserModal = new bootstrap.Modal(document.getElementById("deleteUserModal"));
            deleteUserModal.show();
        });
    });
});


    
    
</script>


</x-app-layout>

<!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4">All Leave Requests</h1>

                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Leave Type</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Reason</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($leaveRequests as $leave)
                                <tr data-leave-id="{{ $leave->id }}">
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle user-name">{{ $leave->user->name }}</td>
                                    <td class="align-middle">{{ $leave->leave_type }}</td>
                                    <td class="align-middle">{{ $leave->start_date }}</td>
                                    <td class="align-middle">{{ $leave->end_date }}</td>
                                    <td class="align-middle">{{ $leave->reason }}</td>
                                    <td class="align-middle">
                                        <select class="form-select leaveStatusChange">
                                            <option value="Pending" {{ $leave->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="Approved" {{ $leave->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="Rejected" {{ $leave->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                                        </select>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No leave requests found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> -->