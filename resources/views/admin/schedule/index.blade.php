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
        margin-top: -10px;
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
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr auto auto;
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
        grid-template-columns:  2fr 2fr 2fr 2fr 2fr auto auto;
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

.hide {
    display: none !important;
}
    /* Ensure labels and inputs are aligned properly */
    .input-groupedit {
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* Space between label & input */
        width: 100%;
        /* Take full width */
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
    .input-label {
        font-size: 14px;
        color: #333;
        font-weight: bold;
        white-space: nowrap;
        /* Prevent label from breaking */
        min-width: 100px;
        /* Give labels a consistent width */
        font-weight: bold;
        /* Bold labels for clarity */
        text-align: left;
        /* Align text to the left */
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
    }

    .edit-input:focus {
        border: 2px solid #1E1E8F !important;
        /* Apply red border on focus */
        outline: none !important;
        /* Remove default browser outline */
        box-shadow: none !important;
        /* Remove blue glow */
    }
    .button-container {
        display: flex;
        justify-content: space-between;
        /* Keeps the buttons aligned */
        align-items: center;
        /* Centers them vertically */
        gap: 10px;
        /* Adds space between the buttons */
        margin-top: 15px;
        /* Space from input fields */

    }
       /* Keeps original width */
       .update-button {
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
    .delete-buttonn {
        width: 63%;
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

    .cancell-button {
        width: 26%;
        padding: 10px;
        border: 1px solid black;
        /* Ensure black border */
        border-radius: 8px;
        font-size: 13px;
        color: black;
        margin-right: 15px;
        background-color: none;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover effects */
    .delete-buttonn:hover {
        background-color: #14813b;
    }
    .cancell-button:hover {
        background-color: #8b0000;
        color: white;
        border: none;
    }
    .total{
    margin-left: 10px;
}
.pagination a, 
.pagination span {
    color: #1E1E8F !important; /* Change text color */
    margin-left: 1020px;
    margin-top: -40px;
}

.pagination .active span {
    background-color: #1E1E8F !important; /* Active background */
    border-color: #1E1E8F !important;
    color: white !important; /* Active text color */
}

.pagination a:hover {
    background-color: #1E1E8F !important;
    color: white !important;
    border-color: #1E1E8F !important;
}
.search-bar {
    position: relative;
    width: 100%;
    max-width: 500px;
    
}

.search-bar input[type="text"] {
    width: 100%;
    padding: 14px 50px 14px 20px;
    border: none;
    border-radius: 50px;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    color: #333;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    outline: none;
}

.search-bar button {
    position: absolute;
    right: 4px;
    top: 4px;
    bottom: 4px;
    background: #a4a4a4;
    border: none;
    padding: 0 20px;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.3s;
}

.search-bar button:hover {
    background: #1E1E8F ;
}

.search-bar button svg {
    fill: white;
}


    
</style>
<x-app-layout>
<div class="main-content">
        <div class="dashboard-content">
        <form method="GET" action="{{ route('admin/schedules') }}">
    <div class="search-bar">
        <input type="text" name="search" id="searchInput" value="{{ request('search') }}" placeholder="Search...">
        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 
                1.415-1.414l-3.85-3.85zm-5.242 1.156a5 5 0 1 
                1 0-10 5 5 0 0 1 0 10z"/>
            </svg>
        </button>
    </div>
</form>

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
            <label>Schedule</label>
            <label>Action</label>
        </div>

        @forelse($schedules as $sched)
            <div class="cardL">
                
               <label class="user-name">{{ $sched->user->name }}</label>
               <label>{{ \Carbon\Carbon::parse($sched->shift_start)->timezone('Asia/Manila')->format('g:i A') }}</label>
                <label>{{ \Carbon\Carbon::parse($sched->shift_end)->timezone('Asia/Manila')->format('g:i A') }}</label>
                <label class="shift-info">{{ $sched->shift }} / {{ ucfirst($sched->schedule) }}</label> <!-- Add class here -->
                <div class="btn-group">
                <button class="edit-btn" 
                        data-bs-toggle="modal" 
                        data-bs-target="#editScheduleModal"
                        data-id="{{ $sched->id }}" 
                        data-user-id="{{ $sched->user_id }}" 
                        data-user-name="{{ $sched->user->name }}" {{-- 👈 Add this --}}
                        data-shift="{{ $sched->shift }}" 
                        data-shift-type="{{ $sched->schedule }}" 
                        data-shift-start="{{ $sched->shift_start }}" 
                        data-shift-end="{{ $sched->shift_end }}">
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
        <div class="total">
                        <p>Total Records: <strong>{{ $total }}</strong></p>
                    </div>
                    <div class="pagination">
    {{ $schedules->appends(request()->query())->links() }}
</div>

   
       
<!-- Add Schedule Off-Canvas Modal -->
<div class="offcanvas offcanvas-end @if (($errors->any() && session('form_error') === 'add') || session('form_error') === 'add') show @endif"
 tabindex="-1" id="addScheduleModal" aria-labelledby="addScheduleLabel" data-bs-backdrop="static">
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
                @if ($errors->has('duration'))
            <div class="alert alert-danger">
                {{ $errors->first('duration') }}
            </div>
        @endif
        <form action="{{ route('admin/schedules/store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_type" value="add"> <!-- Hidden input to identify this form -->
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
                                <input type="hidden" name="schedule" id="schedule">
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
                                <option value="evening">Evening Shift</option>
                            </select>
                            @error('shift_type')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 input-group">
                            <label for="shift_start">Start Time</label>
                            <input type="time" name="shift_start" id="shift_start" required>
                            @error('shift_start')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 input-group">
                            <label for="shift_end">End Time</label>
                            <input type="time" name="shift_end" id="shift_end" required>
                            @error('shift_end')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="submit-btn">Add Now</button>
                    </form>
    </div>
</div>

<!-- Edit Schedule Modal -->
<div class="modal fade @if ($errors->any() && session('form_error') === 'edit') show @endif"
     id="editScheduleModal"
     tabindex="-1"
     aria-labelledby="editScheduleModalLabel"
     aria-hidden="true"
     @if ($errors->any() && session('form_error') === 'edit') style="display:block;" @endif>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <form id="editScheduleForm" method="POST" action="{{ route('admin/schedules/update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="form_type" value="edit"> <!-- Hidden input to identify this form -->
                    <input type="hidden" name="id" id="editScheduleId" value="{{ old('id') }}">
                    <div class="mb-3 input-groupedit">
                        <label class="input-label">Employee</label>
                        <input type="text" id="editUserName" class="edit-input" disabled value="{{ session('user_name', old('user_name')) }}">
                        <input type="hidden" name="user_id" id="editUserId" value="{{ old('user_id') }}">
                    </div>
                    <div class="mb-3 input-groupedit">
                        <label for="editShift" class="input-label">Shift</label>
                        <select name="shift" id="editShift" class="edit-input">
                            <option value="full-time" @if (old('shift') == 'full-time') selected @endif>Full-time</option>
                            <option value="part-time" @if (old('shift') == 'part-time') selected @endif>Part-time</option>
                        </select>
                        @error('shift')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 input-groupedit hide">
                        <label for="editShiftType" class="input-label">Shift Type</label>
                        <select name="shift_type" id="editShiftType" class="edit-input">
                            <option value="morning" @if (old('shift_type') == 'morning') selected @endif>Morning Shift</option>
                            <option value="afternoon" @if (old('shift_type') == 'afternoon') selected @endif>Afternoon Shift</option>
                            <option value="evening" @if (old('shift_type') == 'evening') selected @endif>Evening Shift</option>
                        </select>
                        @error('shift_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 input-groupedit">
                        <label for="editShiftStart" class="input-label">Start Time</label>
                        <input type="time" name="shift_start" id="editShiftStart" class="edit-input" value="{{ old('shift_start') }}">
                        @error('shift_start')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 input-groupedit">
                        <label for="editShiftEnd" class="input-label">End Time</label>
                        <input type="time" name="shift_end" id="editShiftEnd" class="edit-input" value="{{ old('shift_end') }}">
                        @error('shift_end')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                <div class="button-container">
                    <button type="submit" class="update-button">Update Schedule</button>
                    <button type="button" class="cancel-button" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteScheduleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deletion</h5>
            </div>
            <div class="modal-body">
                <p id="deleteUserText"></p>
            </div>
            <div class="button-container">
                <a href="#" class="delete-buttonn" id="confirmDeleteUser">Yes, Delete</a>
                <button type="button" class="cancell-button" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

        
        <script>
document.addEventListener("DOMContentLoaded", function () {
    const shiftSelect = document.getElementById('shift');
    const shiftTypeSelect = document.getElementById('shift_type');
    const shiftStartInput = document.getElementById('shift_start');
    const shiftEndInput = document.getElementById('shift_end');
    const shiftTypeGroup = shiftTypeSelect.parentElement;

    // Function to apply min/max constraints based on shift_type
    function applyShiftTypeTimeConstraints() {
        const shiftType = shiftTypeSelect.value;

        if (shiftType === 'morning') {
            shiftStartInput.setAttribute('min', '06:00');
            shiftStartInput.setAttribute('max', '11:59');
            shiftEndInput.setAttribute('min', '06:00');
            shiftEndInput.setAttribute('max', '11:59');
        } else if (shiftType === 'afternoon' || shiftType === 'evening') {
            shiftStartInput.setAttribute('min', '12:00');
            shiftStartInput.setAttribute('max', '23:59');
            shiftEndInput.setAttribute('min', '12:00');
            shiftEndInput.setAttribute('max', '23:59');
        }
    }

    function autoSetShiftType() {
    if (shiftSelect.value === 'full-time') {
        const shiftStart = shiftStartInput.value;
        if (shiftStart) {
            const [hour, minute] = shiftStart.split(':').map(Number);
            const isMorning = hour < 12;
            const shiftType = isMorning ? 'morning' : 'afternoon';

            shiftTypeSelect.value = shiftType;
            document.getElementById('schedule').value = shiftType; // ✅ set hidden input

            applyShiftTypeTimeConstraints();
        }
    } else {
        // For part-time, use manually selected shift_type
        document.getElementById('schedule').value = shiftTypeSelect.value;
    }
}


shiftTypeSelect.addEventListener('change', function () {
    applyShiftTypeTimeConstraints();

    if (shiftSelect.value === 'part-time') {
        if (shiftTypeSelect.value === 'morning') {
            shiftStartInput.value = '06:00';
            document.getElementById('schedule').value = 'morning';
        } else if (shiftTypeSelect.value === 'afternoon') {
            shiftStartInput.value = '12:00';
            document.getElementById('schedule').value = 'afternoon';
        } else if (shiftTypeSelect.value === 'evening') {
            shiftStartInput.value = '18:00';
            document.getElementById('schedule').value = 'evening';
        }
    }
});
    // Function to enable/disable shift_type and optionally hide it
    function toggleShiftTypeAccess() {
        if (shiftSelect.value === 'full-time') {
            shiftTypeSelect.disabled = true;
            shiftTypeGroup.classList.add('hide'); // hide shift_type field
            autoSetShiftType(); // auto-set and apply constraints
        } else {
            shiftTypeSelect.disabled = false;
            shiftTypeGroup.classList.remove('hide');
            applyShiftTypeTimeConstraints(); // apply constraints manually
        }
    }

    // Function to set shift_end time constraints based on shift type
    function updateShiftEndRange() {
        const shiftType = shiftSelect.value;
        const shiftStart = shiftStartInput.value;

        if (!shiftStart) {
            shiftEndInput.removeAttribute('min');
            shiftEndInput.removeAttribute('max');
            return;
        }

        const [startHour, startMinute] = shiftStart.split(':').map(Number);
        let minEndHour, maxEndHour;

        if (shiftType === 'full-time') {
            minEndHour = startHour + 7;
            maxEndHour = startHour + 8;
        } else if (shiftType === 'part-time') {
            minEndHour = startHour + 4;
            maxEndHour = startHour + 6;
        }

        // Adjust for 24-hour overflow
        minEndHour = minEndHour > 23 ? minEndHour - 24 : minEndHour;
        maxEndHour = maxEndHour > 23 ? maxEndHour - 24 : maxEndHour;

        const minEndTime = `${String(minEndHour).padStart(2, '0')}:${String(startMinute).padStart(2, '0')}`;
        const maxEndTime = `${String(maxEndHour).padStart(2, '0')}:${String(startMinute).padStart(2, '0')}`;

        shiftEndInput.setAttribute('min', minEndTime);
        shiftEndInput.setAttribute('max', maxEndTime);
    }

    // Event listeners
    shiftSelect.addEventListener('change', () => {
        toggleShiftTypeAccess();
        updateShiftEndRange();
    });

    shiftStartInput.addEventListener('input', () => {
        autoSetShiftType();
        updateShiftEndRange();
    });

    shiftTypeSelect.addEventListener('change', applyShiftTypeTimeConstraints);

    // Initialize on page load
    toggleShiftTypeAccess();
    autoSetShiftType();
    updateShiftEndRange();
});



//Edit Schedule Modal
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-btn');
    const editScheduleModalEl = document.getElementById('editScheduleModal');
    const editScheduleForm = document.getElementById('editScheduleForm');

    const editScheduleId = document.getElementById('editScheduleId');
    const editUserId = document.getElementById('editUserId');
    const editUserName = document.getElementById('editUserName');
    const editShift = document.getElementById('editShift');
    const editShiftType = document.getElementById('editShiftType');
    const editShiftStart = document.getElementById('editShiftStart');
    const editShiftEnd = document.getElementById('editShiftEnd');

    const editShiftTypeGroup = editShiftType.parentElement;

    // Auto-fill modal on Edit button click
    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const shiftTypeValue = this.getAttribute('data-shift-type');

            editScheduleId.value = this.getAttribute('data-id');
            editUserId.value = this.getAttribute('data-user-id');
            editUserName.value = this.getAttribute('data-user-name');
            editShift.value = this.getAttribute('data-shift');

            // Set shift type from data
            [...editShiftType.options].forEach(option => {
                option.selected = option.value === shiftTypeValue;
            });

            editShiftStart.value = this.getAttribute('data-shift-start');
            editShiftEnd.value = this.getAttribute('data-shift-end');

            toggleEditShiftTypeAccess();

            // Only auto-set if shift type is empty (mostly for full-time)
            if (!shiftTypeValue) {
                autoSetEditShiftType();
            }

            updateEditShiftEndRange();
        });
    });

    // Show modal if there were validation errors from the edit form
    @if ($errors->has('id'))
        const editScheduleModal = new bootstrap.Modal(editScheduleModalEl);
        editScheduleModal.show();

        editUserId.value = "{{ old('user_id') }}";
        editUserName.value = "{{ old('user_name') }}";
        editShift.value = "{{ old('shift') }}";
        editShiftType.value = "{{ old('shift_type') }}";
        editShiftStart.value = "{{ old('shift_start') }}";
        editShiftEnd.value = "{{ old('shift_end') }}";

        toggleEditShiftTypeAccess();
        autoSetEditShiftType();
        updateEditShiftEndRange();
    @endif

    // Helper Functions
    function applyEditShiftTypeTimeConstraints() {
    const shift = editShift.value;
    const shiftType = editShiftType.value;

    // Don't apply time limits for full-time
    if (shift === "full-time") {
        editShiftStart.removeAttribute("min");
        editShiftStart.removeAttribute("max");
        editShiftEnd.removeAttribute("min");
        editShiftEnd.removeAttribute("max");
        return;
    }

    // Apply limits for part-time only
    if (shiftType === "morning") {
        editShiftStart.setAttribute("min", "06:00");
        editShiftStart.setAttribute("max", "11:59");
        editShiftEnd.setAttribute("min", "06:00");
        editShiftEnd.setAttribute("max", "11:59");
    } else if (shiftType === "afternoon" || shiftType === "evening") {
        editShiftStart.setAttribute("min", "12:00");
        editShiftStart.setAttribute("max", "23:59");
        editShiftEnd.setAttribute("min", "12:00");
        editShiftEnd.setAttribute("max", "23:59");
    }
}


    function autoSetEditShiftType() {
    if (editShift.value === "full-time") {
        const shiftStart = editShiftStart.value;
        if (shiftStart) {
            const [hour] = shiftStart.split(":").map(Number);

            // FORCING afternoon if start is in AM (less than 12), and it’s full-time
            if (hour >= 0 && hour < 12) {
                editShiftType.value = "afternoon"; // <- Schedule to update
            } else {
                editShiftType.value = "morning"; // <- Schedule to update
            }
        }
        editShiftType.disabled = true;
    } else {
        editShiftType.disabled = false;
    }
}


function toggleEditShiftTypeAccess() {
    if (editShift.value === "full-time") {
        editShiftType.disabled = true;
        editShiftTypeGroup.classList.add("hide");
        autoSetEditShiftType();

        // 🧼 Clear min/max time constraints
        editShiftStart.removeAttribute("min");
        editShiftStart.removeAttribute("max");
        editShiftEnd.removeAttribute("min");
        editShiftEnd.removeAttribute("max");
    } else {
        editShiftType.disabled = false;
        editShiftTypeGroup.classList.remove("hide");
        applyEditShiftTypeTimeConstraints(); // Only applies to part-time
    }
}


    function updateEditShiftEndRange() {
        const shiftType = editShift.value;
        const shiftStart = editShiftStart.value;

        if (!shiftStart) {
            editShiftEnd.removeAttribute("min");
            editShiftEnd.removeAttribute("max");
            return;
        }

        const [startHour, startMinute] = shiftStart.split(":").map(Number);
        let minEndHour, maxEndHour;

        if (shiftType === "full-time") {
            minEndHour = startHour + 7;
            maxEndHour = startHour + 8;
        } else if (shiftType === "part-time") {
            minEndHour = startHour + 4;
            maxEndHour = startHour + 6;
        }

        minEndHour = minEndHour > 23 ? minEndHour - 24 : minEndHour;
        maxEndHour = maxEndHour > 23 ? maxEndHour - 24 : maxEndHour;

        const minEndTime = `${String(minEndHour).padStart(2, "0")}:${String(startMinute).padStart(2, "0")}`;
        const maxEndTime = `${String(maxEndHour).padStart(2, "0")}:${String(startMinute).padStart(2, "0")}`;

        editShiftEnd.setAttribute("min", minEndTime);
        editShiftEnd.setAttribute("max", maxEndTime);
    }

    // Bind changes
    editShift.addEventListener("change", () => {
        toggleEditShiftTypeAccess();
        updateEditShiftEndRange();
    });

    editShiftStart.addEventListener("input", () => {
        autoSetEditShiftType();
        updateEditShiftEndRange();
    });

    editShiftType.addEventListener("change", () => {
    applyEditShiftTypeTimeConstraints();

    // If part-time, auto-fill start time based on selected shift type
    if (editShift.value === "part-time") {
        if (editShiftType.value === "morning") {
            editShiftStart.value = "06:00";
        } else if (editShiftType.value === "afternoon") {
            editShiftStart.value = "12:00";
        } else if (editShiftType.value === "evening") {
            editShiftStart.value = "18:00";
        }

        updateEditShiftEndRange(); // Update end range accordingly
    }
});


    // Initialize constraints
    toggleEditShiftTypeAccess();
    autoSetEditShiftType();
    updateEditShiftEndRange();
});

// Show modal if edit form had errors
document.addEventListener('DOMContentLoaded', function () {
    @if ($errors->any() && session('form_error') === 'edit')
        const editScheduleModalEl = document.getElementById('editScheduleModal');
        const editModal = new bootstrap.Modal(editScheduleModalEl);
        editModal.show();
    @endif
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
        document.querySelectorAll(".delete-btn").forEach(function (button) {
            button.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent default link behavior

                const deleteUserId = this.getAttribute("data-schedule-id");
                const userName = this.getAttribute("data-schedule-name");

                // Update modal text
                document.getElementById("deleteUserText").innerHTML =
                    `Are you sure you want to delete <strong>${userName}</strong>? This action cannot be undone.`;

                // Update confirmation link
                const deleteUrl = "{{ url('/admin/schedules/delete') }}/" + deleteUserId;
                document.getElementById("confirmDeleteUser").setAttribute("href", deleteUrl);

                // Show modal
                const deleteScheduleModal = new bootstrap.Modal(document.getElementById("deleteScheduleModal"));
                deleteScheduleModal.show();
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const cards = document.querySelectorAll(".cardL");

    searchInput.addEventListener("input", function () {
        const searchTerm = this.value.toLowerCase();

        cards.forEach(card => {
            const name = card.querySelector(".user-name")?.textContent.toLowerCase() || "";
            const shiftInfo = card.querySelector(".shift-info")?.textContent.toLowerCase() || "";

            // Combine all searchable fields
            const fullText = `${name} ${shiftInfo}`;

            // Show/hide based on search match
            card.style.display = fullText.includes(searchTerm) ? "grid" : "none";

        });
    });
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