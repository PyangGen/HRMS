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
        margin-left: 960px;
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
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr 1fr auto auto;
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
    .offcanvas-end {
    width: 400px; /* Adjust width as needed */
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
}
.offcanvas-header {

    flex-direction: column;  /* Stack items vertically */
    align-items: flex-start; /* Align back button to the left */
    padding: 10px 15px;
    margin-left: -280px;
    margin-top: 5px;
    font-family: 'Poppins', sans-serif;
}
.offcanvas-body {
    margin-top: 20px;
    overflow-x: hidden; /* Prevents horizontal scrolling */
    overflow-y: auto; /* Allows vertical scrolling if needed */
    max-width: 100%; /* Ensures it doesn't exceed the container width */
    padding-right: 10px; /* Prevents content from touching the edge */
    padding-left: 10px; /* Prevents left overflow */
    box-sizing: border-box; /* Ensures padding is included in width calculations */
}



.offcanvas-title {
    margin-top: 20px; /* Add space between title and bottom */
    margin-left: 60px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    color: #1E1E8F;
    font-size: 1.5em; /* Increased font size for bolder appearance */

}
.back-add {
    display: flex;
    align-items: center; /* Align text and image */
    background: none;
    border: none;
    font-size: 16px;
    color: black;
    cursor: pointer;
    margin-bottom: 20px; /* Push title down */
}
.img-add {
    width: 16px;
    height: auto;
    margin-right: 5px; /* Space between icon and text */
}

.input-group {
    margin-left: 45px;
    position: relative; /* Create a positioning context for the label */
}

.input-group label {
    position: absolute;
    top: -10px;
    left: 12px; /* Adjust horizontal positioning */
    font-size: 14px;
    color: #b0b0b0;
    font-weight: bolder;
    background-color: white;
    padding: 0 5px;
    pointer-events: none; /* Prevent clicking on label */
    z-index: 1; /* Keep the label in front */
}

.input-group input,
.input-group select {
    width: 100%;
    max-width: 280px;
    padding: 10px;
    border: 2.5px solid #ccc;
    border-radius: 8px !important;
    font-size: 14px;
    color: #333;
    transition: border-color 0.3s, color 0.3s;
    outline: none;
    background-color: white;
    display: block;
    font-family: 'Poppins', sans-serif;
    box-shadow: none;
    padding-top: 18px; /* Add padding on top to make space for the label */
}

/* Focus state for input/select */
.input-group input:focus,
.input-group select:focus {
    border-color: #1E1E8F;
    outline: none;
}

/* Focus state for label (when input/select is focused) */
.input-group:focus-within label {
    color: #1E1E8F;
}

.input-group select option:checked {
    background-color: #1E1E8F;
    color: white;
}
.submit-btn {
        width: 80%;
        padding: 10px;
        background-color: #1E1E8F;
        color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 0px;
        margin-left: 40px;
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        text-shadow: 0.5px 0 0 currentColor;
    }

    .submit-btn:hover {
        background-color: #18a74f;
    }
    .edit-btn {
    background-color: #18a74f;
    border: none;
    border-radius: 20px;
    color: white;
    padding: 6px 30px;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    text-align: center;
    display: inline-block;
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
.btn-group {
    gap: 10px; /* Space between Edit and Delete */
}



</style>
<x-app-layout>
<div class="main-content">
        <div class="dashboard-content">
            <!-- Header -->
            <div class="header">
                <img src="{{ asset('images/schedule_blue.png') }}" alt="Product Icon">
                <h1>Schedules</h1>
            </div>
        </div>

        <button class="add-button" data-bs-toggle="offcanvas" data-bs-target="#addScheduleModal">
            <img src="{{ asset('images/plus.png') }}" alt="Add Icon" style="margin-right: 8px; ">
            Add Schedule
        </button>

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif


        <div class="cardN">
            <label>Employee Name</label>
            <label>Time In</label>
            <label>Time Out</label>
            <label>Shift Type</label>
            <label>Status</label>
            <label>Request</label>
            <label>Action</label>
        </div>

        @forelse($schedules as $sched)
            <div class="cardL">
                
               <label>{{ $sched->user->name }}</label>
               <label>{{ \Carbon\Carbon::parse($sched->shift_start)->timezone('Asia/Manila')->format('g:i A') }}</label>
                <label>{{ \Carbon\Carbon::parse($sched->shift_end)->timezone('Asia/Manila')->format('g:i A') }}</label>

                <label>{{ucfirst($sched->shift_type) }}</label>
                <label>{{ $sched->shift }}</label>
               
                

                <div class="btn-group">
                    <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"
                        data-id="{{ $sched->id }}" 
                        data-name="{{ $sched->name }}" 
                        data-shift_start="{{ $sched->shift_start }}"
                        data-shift_end="{{ $sched->shift_end }}"
                        data-shift_type="{{ $sched->schedule }}"
                        data-shift="{{ $sched->shift }}" 
                        >
                        Edit
                    </button>

                    <a href="#" class="delete-btn" data-schedule-id="{{ $sched->id }}" data-schedule-name="{{ $sched->name }}">
                        Delete
                    </a>

                </div>
            </div>

        @empty
            <div class="text-center">No schedules found</div>
        @endforelse
   
       
<!-- Add Schedule Off-Canvas Modal -->
<div class="offcanvas offcanvas-end @if ($errors->any() || session()->has('error')) show @endif" tabindex="-1" id="addScheduleModal" aria-labelledby="addScheduleLabel" data-bs-backdrop="static">
    <div class="offcanvas-header">
        <button type="button" class="back-add" data-bs-dismiss="offcanvas">
            <img src="{{ asset('images/back_arrow.png') }}" class="img-add" alt="Back Arrow"/>
            Back
        </button>
    </div>
    <h5 class="offcanvas-title" id="addScheduleLabel">Add Schedule</h5>
    <div class="offcanvas-body">
    
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin/schedules/store') }}" method="POST">
                        @csrf

                        <div class="mb-4 input-group" >
                            <label for="user_id" >Select Employee</label>
                            <select name="user_id" id="user_id" >
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="mb-4 input-group">
                                <label for="shift">Shift</label>
                                <select name="shift" id="shift">
                                    <option value="full-time">Full-time</option>
                                    <option value="part-time">Part-time</option>
                                </select>
                                @error('shift')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        <div class="mb-4 input-group hide">
                            <label for="shift_type">Shift Type</label>
                            <select name="shift_type" id="shift_type">
                                <option value="morning">Morning Shift</option>
                                <option value="afternoon">Afternoon Shift</option>
                                <option value="night">Night Shift</option>
                            </select>
                            @error('shift_type')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 input-group">
                            <label for="shift_start">Shift Start Time</label>
                            <input type="time" name="shift_start" id="shift_start" required>
                            @error('shift_start')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 input-group">
                            <label for="shift_end">Shift End Time</label>
                            <input type="time" name="shift_end" id="shift_end" required>
                            @error('shift_end')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="submit-btn">Add Now</button>
                    </form>
    </div>
</div>

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

             // Function to handle shift type change and adjust time ranges for start and end times
    document.getElementById('shift_type').addEventListener('change', function() {
        var shiftType = this.value;
        var startTimeInput = document.getElementById('shift_start');
        var endTimeInput = document.getElementById('shift_end');
        
        if (shiftType === 'morning') {
            // Morning shift: Only AM times allowed
            startTimeInput.setAttribute('min', '06:00'); // Start from 6:00 AM
            startTimeInput.setAttribute('max', '11:59'); // End at 11:59 AM
            endTimeInput.setAttribute('min', '06:00'); // Ensure shift end is after start
            endTimeInput.setAttribute('max', '11:59'); // End at 11:59 AM
        } else if (shiftType === 'afternoon' || shiftType === 'night') {
            // Afternoon & Night shifts: Only PM times allowed
            startTimeInput.setAttribute('min', '12:00'); // Start from 12:00 PM
            startTimeInput.setAttribute('max', '23:59'); // End at 11:59 PM
            endTimeInput.setAttribute('min', '12:00'); // Ensure shift end is after start
            endTimeInput.setAttribute('max', '23:59'); // End at 11:59 PM
        }
    });

    // Trigger the change event to set the initial time range when the page loads
    document.getElementById('shift_type').dispatchEvent(new Event('change'));

    // Ensure that the shift end time is always after the shift start time
    document.getElementById('shift_start').addEventListener('input', function() {
        var startTime = this.value;
        var endTimeInput = document.getElementById('shift_end');
        var minEndTime = (startTime === '23:59') ? '23:59' : (parseInt(startTime.split(':')[0]) + 1) + ':00'; // Ensure end time is at least 1 hour after start time

        endTimeInput.setAttribute('min', minEndTime);
    });

    document.addEventListener("DOMContentLoaded", function () {
        const shiftTypeSelect = document.getElementById('shift');
        const shiftStartInput = document.getElementById('shift_start');
        const shiftEndInput = document.getElementById('shift_end');

        // Function to update the shift_end range based on shift type and shift_start
        function updateShiftEndRange() {
            const shiftType = shiftTypeSelect.value;
            const shiftStart = shiftStartInput.value;

            if (!shiftStart) {
                shiftEndInput.removeAttribute('min');
                shiftEndInput.removeAttribute('max');
                return;
            }

            const [startHour, startMinute] = shiftStart.split(':').map(Number);
            let minEndHour, maxEndHour;

            if (shiftType === 'full-time') {
                // Full-time: 7-8 hours range
                minEndHour = startHour + 7;
                maxEndHour = startHour + 8;
            } else if (shiftType === 'part-time') {
                // Part-time: 4-6 hours range
                minEndHour = startHour + 4;
                maxEndHour = startHour + 6;
            }

            // Ensure the hours don't exceed 24 (midnight)
            minEndHour = minEndHour > 24 ? minEndHour - 24 : minEndHour;
            maxEndHour = maxEndHour > 24 ? maxEndHour - 24 : maxEndHour;

            // Format the min and max times for the shift_end input
            const minEndTime = `${String(minEndHour).padStart(2, '0')}:${String(startMinute).padStart(2, '0')}`;
            const maxEndTime = `${String(maxEndHour).padStart(2, '0')}:${String(startMinute).padStart(2, '0')}`;

            shiftEndInput.setAttribute('min', minEndTime);
            shiftEndInput.setAttribute('max', maxEndTime);
        }

        // Event listeners for shift type and shift_start changes
        shiftTypeSelect.addEventListener('change', updateShiftEndRange);
        shiftStartInput.addEventListener('input', updateShiftEndRange);

        // Trigger the update on page load
        updateShiftEndRange();
    });

    document.addEventListener("DOMContentLoaded", function () {
        const shiftSelect = document.getElementById('shift');
        const shiftTypeSelect = document.getElementById('shift_type');

        // Function to toggle the shift_type dropdown
        function toggleShiftType() {
            if (shiftSelect.value === 'full-time') {
                shiftTypeSelect.disabled = true; // Disable shift_type
            } else {
                shiftTypeSelect.disabled = false; // Enable shift_type
            }
        }

        // Add event listener to the shift dropdown
        shiftSelect.addEventListener('change', toggleShiftType);

        // Trigger the toggle function on page load
        toggleShiftType();
    });


        </script>



</x-app-layout>
<!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">Schedule Records</h1>
                        <a href="{{ route('admin/schedules/create') }}" class="btn btn-primary">+ Add Schedule</a>
                    </div>
                    <hr />

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
                                <th>Shift</th>
                                <th>Shift Type</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($schedules as $schedule)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $schedule->name }}</td>
                                    <td class="align-middle">{{ $schedule->shift }}</td>
                                    <td class="align-middle">{{ ucfirst($schedule->shift_type) }}</td>
                                    <td class="align-middle">{{ $schedule->shift_start }}</td>
                                    <td class="align-middle">{{ $schedule->shift_end }}</td>
                                    <td class="align-middle">
                                        <span
                                            class="badge bg-{{ $schedule->status == 'approved' ? 'success' : ($schedule->status == 'rejected' ? 'danger' : 'warning') }}">
                                            {{ ucfirst($schedule->status) }}
                                        </span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group">
                                            @if($schedule->status == 'pending')
                                                <a href="{{ route('admin/schedules/approve', ['id' => $schedule->id]) }}"
                                                    class="btn btn-success">Approve</a>
                                                <a href="{{ route('admin/schedules/reject', ['id' => $schedule->id]) }}"
                                                    class="btn btn-danger">Reject</a>

                                            @else
                                                <button class="btn btn-secondary"
                                                    disabled>{{ ucfirst($schedule->status) }}</button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No schedule records found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> -->