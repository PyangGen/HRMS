<style>
html,
body {
    overflow-x: hidden;
    height: 100%;
}

.main-content {
    margin-left: 250px;
    padding: 30px 70px;
    width: calc(100% - 250px);
    min-height: 100vh;
    background-color: #f0f0f5;
    overflow: hidden;
}

.header {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 20px;
}

.header h1 {
    color: #1E1E8F;
    font-size: 1.5em;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    letter-spacing: -0.5px;
    text-shadow: 0.5px 0 0 currentColor;
}

.header img {
    width: 40px;
}

/* Responsive Add Button */
.add-button {
    background-color: #1E1E8F;
    color: white;
    border-radius: 10px;
    border: none;
    padding: 12px 21px;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 20px 0;
    margin-left: auto;
    justify-content: center;
    text-decoration: none;
}

/* Responsive Card Grid */
.cardN,
.cardL {
    background-color: #ffffff;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    align-items: center;
    column-gap: 10px;
    width: 100%;
    box-sizing: border-box;
    margin: 10px 0;
    overflow-x: auto;
}

.cardL .product-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

/* Responsive Grid Breakpoints */
@media (max-width: 1200px) {
    .main-content {
        margin-left: 200px;
        width: calc(100% - 200px);
    }
    .cardN,
    .cardL {
        grid-template-columns: repeat(4, 1fr);
    }
}

@media (max-width: 768px) {
    .main-content {
        margin-left: 0;
        padding: 20px;
        width: 100%;
    }
    .add-button {
        width: 100%;
    }
    .cardN,
    .cardL {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .cardN,
    .cardL {
        grid-template-columns: 1fr;
    }
    .header h1 {
        font-size: 1.2em;
    }
}

.form-modal {
    border-radius: 20px;
    padding: 20px;
    max-width: 500px;
    margin: auto;
    background-color: #fff;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    font-family: 'Poppins', sans-serif;
    width: 100%;
}
.edit-input {
    width: 100%;
    border: 2px solid #ccc;
    border-radius: 8px;
    padding: 10px;
    font-size: 14px;
    margin-bottom: 5px;
    display: block;
}

.edit-input:focus {
    border-color: #1E1E8F;
    outline: none;
    box-shadow: none;
}
.edit-inputt {
    width: 100% !important;
    border: 2px solid #ccc !important;
    border-radius: 8px !important;
    padding: 10px !important;
    font-size: 14px !important;
    margin-bottom: 5px !important;
    display: block !important;
}

.edit-inputt:focus {
    border-color: #1E1E8F !important;
    outline: none !important;
    box-shadow: none !important;
}

.submit-button,
.cancel-button {
    padding: 10px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    flex: 1;
}

.submit-button {
    background-color: #18a74f;
    color: white;
    margin-right: 10px;
}

.cancel-button {
    background-color: #af0000;
    color: white;
}

.leave-status {
    padding: 6px 20px;
    font-weight: 600;
    width: 100px;
    color: white;
    border-radius: 30px;
    text-align: center;
}

.leave-status.pending {
    background-color: #facc15;
    color: #000;
}

.leave-status.approved {
    background-color: #16a34a;
}

.leave-status.rejected {
    background-color: #dc2626;
}

.button-group {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: space-between;
}

.button-group .submit-button,
.button-group .cancel-button {
    flex: 1;
    min-width: 120px;
    text-align: center;
}

@media (max-width: 480px) {
    .button-group {
        flex-direction: column;
    }

    .button-group .submit-button,
    .button-group .cancel-button {
        width: 100%;
        margin-right: 0 !important;
    }
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

    <div class="alert alert-info">
        <strong>Note:</strong> Max 3 leave requests per month. Each request can only 7 consecutive leave days.You can only select dates that are not already used for leave requests. If you select a date that has already been used, an alert will notify you to choose another date.
        <br> 
    </div>

    <div class="">
        <button class="add-button" data-bs-toggle="modal" data-bs-target="#addRequestModal">
            <img src="{{ asset('images/plus.png') }}" alt="Add Icon" style="">
            Add Request
        </button>
    </div>

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
        <p class="text-center">No request found.</p>
    @endforelse

    
</div>
<!-- Modal -->
<div class="modal fade" id="addRequestModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content form-modal">
                <form action="{{ route('leave.store') }}" method="POST" id="leaveForm">
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
                            <input type="date" name="start_date" id="start_date" class="edit-inputt" value="{{ old('start_date') }}">
                            @error('start_date') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div>
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="edit-inputt" value="{{ old('end_date') }}">
                            @error('end_date') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div>
                            <label for="reason" class="form-label">Reason</label>
                            <textarea name="reason" class="edit-input" rows="3" placeholder="Brief reason for leave">{{ old('reason') }}</textarea>
                            @error('reason') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="button-group mt-4">
                            <button type="submit" class="submit-button" id="submitBtn">
                                Submit
                            </button>
                            <button type="button" class="cancel-button" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- Scripts -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const modal = new bootstrap.Modal(document.getElementById('addRequestModal'));

    // Show modal again if validation errors exist
    if (@json($errors->any())) {
        modal.show();
    }

    const today = new Date().toISOString().split('T')[0];
    const startDate = document.getElementById('start_date');
    const endDate = document.getElementById('end_date');
    const usedLeaveDates = @json($leaveDates);

    function isUsedDate(dateStr) {
        return usedLeaveDates.includes(dateStr);
    }

    function preventUsedDate(input) {
        input.addEventListener("input", function () {
            const selectedDate = this.value;
            if (isUsedDate(selectedDate)) {
                alert("This date has already been used for a previous leave request. Please choose another.");
                this.value = '';
            }
        });
    }

    if (startDate) {
        startDate.setAttribute('min', today);
        preventUsedDate(startDate);
    }

    if (endDate) {
        endDate.setAttribute('min', today);
        preventUsedDate(endDate);
    }

    startDate?.addEventListener('change', function () {
        if (endDate) {
            endDate.setAttribute('min', startDate.value);
        }
    });

    // Success message fade-out
    let sessionSuccess = document.querySelector(".alert-success");
    if (sessionSuccess) {
        setTimeout(() => {
            sessionSuccess.classList.remove("show");
            sessionSuccess.classList.add("fade");
            setTimeout(() => sessionSuccess.remove(), 500);
        }, 5000);
    }

    // Submit button feedback
    const submitBtn = document.getElementById("submitBtn");
    const form = document.getElementById("leaveForm");
    form.addEventListener("submit", function () {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...`;
    });
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
