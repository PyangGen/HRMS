<?php
use App\Models\Attendance;
Attendance::where('user_id', auth()->id())->whereDate('time_in', today())->first()
?>

    {{-- This is a test --}}
    <style>
    .card {
        margin-left: 320px;
        width: 75%;
    }

    .btn-lg {
        padding: 10px 25px;
        font-size: 1.1rem;
    }

    .time-out-btn {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .time-out-btn:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .time-out-btn.disabled {
        opacity: 0.65;
        cursor: not-allowed;
    }

    thead {}

    tr {
        text-align: center;
    }

    td span {
        display: inline-block;
        padding: 10px;
        border-radius: 20px;
        font-size: 0.8rem;
    }

    td {
        vertical-align: middle;
    }

    .status-badge {
        font-size: 0.8rem;
        padding: 7px 10px;
        border-radius: 20px;
    }

    .status-present {
        background-color: #28a745;
        color: white;
        font-family: 'Poppins', sans-serif;
    }

    .status-absent {
        background-color: #AF0000;
        color: white;
        font-family: 'Poppins', sans-serif;
    }

    .status-late {
        background-color: #ffc107;
        color: #212529;
        font-family: 'Poppins', sans-serif;
    }

    .request-badge {
        font-size: 0.8rem;
        padding: 5px 10px;
        border-radius: 20px;
        color: white;
        display: inline-block;
        font-family: 'Poppins', sans-serif;
    }

    .request-early_out {
        background-color: #17a2b8;
    }


    .request-none {
        background-color: #f8f9fa;
        color: #212529;
        border: 1px solid #dee2e6;
    }

    .approval-approved {
        background-color: #28a745 !important;
    }

    .approval-pending {
        background-color: #ffc107 !important;
        color: #000 !important;
    }

    .approval-rejected {
        background-color: #AF0000 !important;
    }

    .schedule-badge {
        font-size: 0.8rem;
        padding: 5px 10px;
        border-radius: 20px;
        background-color: #6610f2;
        color: white;
        font-family: 'Poppins', sans-serif;
    }

    .request-form {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-top: 20px;
        font-family: 'Poppins', sans-serif;
    }

    .out-btn {
        background-color: #AF0000;
        border: none;
        border-radius: 10px;
        color: white;
        padding: 15px 30px;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
        text-align: center;
        display: inline-block;
    }

    .in-btn {
        background-color: #18a74f;
        border: none;
        border-radius: 10px;
        color: white;
        padding: 15px 35px;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
        text-align: center;
        display: inline-block;
    }

    .in-btn:hover {
        background-color: #14813b;
    }

    .out-btn:hover {
        background-color: #8b0000;
    }

    .cardN {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: 2fr 2fr 2fr auto auto;
        align-items: center;
        column-gap: 10px;
        width: 75%;
        box-sizing: border-box;
        margin-left: 320px;
        margin-top: 20px;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
    }

    .schedule-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: darkblue;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .badge-schedule {
        background-color: #0dcaf0;
        color: #000;
        padding: 5px;
        border-radius: 20px;
        font-size: 1rem;
        text-align: center;
        width: 60%;
        display: inline-block;
        font-family: 'Poppins', sans-serif;
    }

    .badge-shift {
        background-color: #1E1E8F;
        color: #fff;
    }

    .schedule-text {
        font-size: 1rem;
        color: #333;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .custom-attendance-alert {
        background-color: #1E1E8F !important;
        color: #ffffff !important;
        border: none;
        font-family: 'Poppins', sans-serif;
    }

    .h4 {
        font-family: 'Poppins', sans-serif;
    }

    .sub-btn {
        background-color: #1E1E8F;
        border: none;
        border-radius: 10px;
        color: white;
        padding: 10px 25px;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
        text-align: center;
        display: inline-block;
        margin-top: 5px;
    }

    .sub-btn:hover {
        background-color: #18a74f;
    }

    /* ========== Responsive Styles ========== */
    @media (max-width: 768px) {
        .card,
        .cardN {
            width: 100%;
            margin-left: 0;
            padding: 10px;
            box-sizing: border-box;
        }

        .cardN {
            grid-template-columns: 1fr;
            row-gap: 10px;
            text-align: center;
        }

        .in-btn,
        .out-btn {
            width: 100%;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .badge-schedule {
            width: auto;
            font-size: 0.9rem;
        }

        .schedule-text {
            font-size: 0.95rem;
        }

        .request-form .form-row {
            display: block;
        }

        .request-form .form-group {
            width: 100% !important;
            margin-bottom: 10px;
        }

        .sub-btn {
            width: 100%;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table.table {
            font-size: 0.9rem;
        }

        .alert {
            font-size: 0.9rem;
        }
    }
  /* For screens smaller than 768px (like mobile/tablets) */
  @media (max-width: 767px) {
    .alert {
      margin-left: 0 !important; /* Remove left margin */
      width: 100% !important;    /* Ensure it takes full width */
      padding-left: 15px !important; /* Adjust padding */
      padding-right: 15px !important; /* Adjust padding */
    }
  }
</style>

<x-app-layout>
    <div>
        @if(auth()->user()->usertype === 'user')
            @php
                $user = auth()->user();
                $schedule = $user->schedule; // Assuming a relationship exists between User and Schedule
            @endphp

            @if($schedule)
                <div class="cardN"> 
                    <h4 class="schedule-title">Schedule</h4>

                    <span class="badge-schedule badge-shift">
                        {{ ucfirst($schedule->schedule ?? 'N/A') }} / {{ $schedule->shift }}
                    </span>

                    <p class="schedule-text">
                        <strong>Shift Start:</strong>
                        {{ \Carbon\Carbon::parse($schedule->shift_start)->format('h:i A') }}
                    </p>

                    <p class="schedule-text">
                        <strong>Shift End:</strong>
                        {{ \Carbon\Carbon::parse($schedule->shift_end)->format('h:i A') }}
                    </p>
                </div>
            @else

            @endif

            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        @php
                            $attendance = App\Models\Attendance::where('user_id', $user->id)
                                ->whereDate('time_in', today())
                                ->first();

                            $shiftStart = $schedule ? \Carbon\Carbon::parse($schedule->shift_start) : null;
                            $shiftEnd = $schedule ? \Carbon\Carbon::parse($schedule->shift_end) : null;
                            $currentTime = \Carbon\Carbon::now();

                            $canTimeIn = !$attendance && $shiftStart && $currentTime->greaterThanOrEqualTo($shiftStart);
                            $canTimeOut = false;
                            $timeOutMessage = '';

                            if ($attendance && $schedule && $attendance->time_in) {
                                // Check if the current time is greater than or equal to shift end
                                $canTimeOut = $currentTime->greaterThanOrEqualTo($shiftEnd);

                                if ($attendance->status === 'absent') {
                                    $timeOutMessage = "30 minutes late are considered as Absent.";
                                } else {
                                    $timeOutMessage = $canTimeOut ? "You may now time out" :
                                        sprintf(
                                            "You must work for at least %d hours and %d minutes before timing out. (Current: %02d:%02d hours)",
                                            floor($shiftStart->diffInMinutes($shiftEnd) / 60),
                                            $shiftStart->diffInMinutes($shiftEnd) % 60,
                                            floor($currentTime->diffInMinutes($attendance->time_in) / 60),
                                            $currentTime->diffInMinutes($attendance->time_in) % 60
                                        );
                                }
                            } else {
                                $timeOutMessage = "No attendance record for today.";
                            }
                        @endphp

                @if($attendance && !$canTimeOut && !$attendance->time_out)
                    <div class="alert alert-warning mt-3">
                        {{ $timeOutMessage }}
                    </div>
                @endif


                        <form method="POST" action="{{ route('attendance.timeIn') }}" class="d-inline-block me-4">
                            @csrf
                            <button type="submit" class="in-btn {{ $canTimeIn ? '' : 'disabled' }}" {{ $canTimeIn ? '' : 'disabled' }}
                                @if(!$canTimeIn) title="You can only time in once per day" @endif>
                                Time In
                            </button>
                        </form>

                        <form method="POST" action="{{ route('attendance.timeOut') }}" class="d-inline-block">
                            @csrf
                            <button type="submit" class="out-btn {{ $canTimeOut ? '' : 'disabled' }}"
                                {{ $canTimeOut ? '' : 'disabled' }}
                                @if(!$canTimeOut) title="{{ $timeOutMessage }}" @endif>
                                Time Out
                            </button>
                        </form>

                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger mb-4">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mt-4">
                        <h3 class="h4 mb-3">Today's Attendance</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Status</th>
                                        <th>Time In</th>
                                        <th>Time Out</th>
                                        <th>Reason</th>
                                        <th>Request</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($attendance && strtolower($attendance->status) === 'absent')
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">
                                                You are marked as Absent for today.
                                            </td>
                                        </tr>
                                    @elseif($attendance && !$attendance->time_out)
                                        <tr>
                                            <td>
                                                <span class="status-badge status-{{ $attendance->status }}">
                                                    {{ ucfirst($attendance->status) }}
                                                </span>
                                            </td>
                                            <td>{{ $attendance->time_in->format('h:i A') }}</td>
                                            <td>{{ $attendance->time_out ? $attendance->time_out->format('h:i A') : 'Not timed out yet' }}</td>
                                            <td>{{ $attendance->request_reason }}</td>
                                            <td>
                                                <span class="request-badge request-{{ $attendance->request }} approval-{{ $attendance->request_approved }}">
                                                    {{ str_replace('_', ' ', ucfirst($attendance->request)) }}
                                                    @if($attendance->request !== 'none' && $attendance->request_reason)
                                                        <i class="fas fa-info-circle ml-1" title="{{ $attendance->request_reason }}"></i>
                                                    @endif
                                                </span>
                                                @if($attendance->request !== 'none')
                                                    <br>
                                                    <small class="text-muted">
                                                        @if($attendance->request_approved === 'approved')
                                                            Approved
                                                        @elseif($attendance->request_approved === 'rejected')
                                                            Rejected
                                                        @else
                                                            Pending
                                                        @endif
                                                    </small>
                                                @endif
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">
                                                No attendance record for today
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @if($attendance && $attendance->request === 'none')
                        <div class="request-form">
                            <h4>Submit Request</h4>
                            <form method="POST" action="{{ route('attendance.submitRequest') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="request_type">Request Type</label>
                                        <select class="form-control" id="request_type" name="request_type">
                                            <option value="none">No Request</option>
                                            <option value="early_out" @if(strtolower($attendance->status) === 'absent') disabled @endif>
                                                Early Out
                                            </option>
                                            <option value="overtime" @if(!$attendance->time_out) disabled @endif>
                                                Overtime
                                            </option>
                                        </select>
                                        @if(!$attendance->time_out)
                                            <small class="text-muted">You must time out before requesting overtime.</small>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="request_reason">Reason</label>
                                        <textarea class="form-control" id="request_reason" name="request_reason" rows="2"
                                            placeholder="Please provide a reason for your request"></textarea>
                                    </div>
                                    <div class="form-group col-md-4" id="overtime-hours-field" style="display: none;">
                                        <label for="overtime_hours">Overtime Hours</label>
                                        <input type="number" class="form-control" id="overtime_hours" name="overtime_hours" 
                                            min="1" max="4" step="0.01"
                                            placeholder="Enter overtime hours (1 - 4)">
                                        <small class="text-muted">Allowed range: 1 to 4 hours only.</small>


                                    </div>
                                </div>
                                <button type="submit" class="sub-btn">Submit Request</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        @else
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                Attendance tracking is only available for regular employees.
            </div>
        @endif
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="h4">Attendance History</h4>
            <div class="table-responsive">
                @if($attendanceHistory->isEmpty())
                    <div class="alert alert-info text-center px-3 py-2" style="max-width: 1130px; width: 100%; ">
                        No attendance history available.
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Request</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attendanceHistory as $attendance)
                                @if(strtolower($attendance->status) === 'absent' || ($attendance->time_in && $attendance->time_out))
                                    <tr>
                                        <td>{{ $attendance->time_in ? $attendance->time_in->format('F d, Y') : 'N/A' }}</td>
                                        <td>
                                            <span class="status-badge status-{{ $attendance->status }} {{ $attendance->request_approved }}">
                                                {{ ucfirst($attendance->status) }}
                                                @if($attendance->request !== 'none' && $attendance->request_reason)
                                                    <i class="fas fa-info-circle ml-1" title="{{ $attendance->request_reason }}"></i>
                                                @endif
                                            </span>
                                        </td>
                                        <td>{{ $attendance->time_in ? $attendance->time_in->format('h:i A') : 'N/A' }}</td>
                                        <td>{{ $attendance->time_out ? $attendance->time_out->format('h:i A') : 'Not timed out yet' }}</td>
                                        <td>
                                            <span class="request-badge request-{{ $attendance->request }}"
                                                  @if($attendance->request_approved === 'approved')
                                                      style="background-color: #28a745; color: white;"
                                                  @elseif($attendance->request_approved === 'rejected')
                                                      style="background-color: #AF0000; color: white;"
                                                  @elseif($attendance->request_approved === 'pending')
                                                      style="background-color: #ffc107; color: black;"
                                                  @endif>
                                                {{ str_replace('_', ' ', ucfirst($attendance->request)) }}
                                            </span>
                                            @if($attendance->request !== 'none')
                                                <br>
                                                <small class="text-muted">
                                                    @if($attendance->request_approved === 'approved')
                                                        Approved
                                                    @elseif($attendance->request_approved === 'rejected')
                                                        Rejected
                                                    @else
                                                        Pending
                                                    @endif
                                                </small>
                                            @endif
                                        </td>
                                        <td>{{ $attendance->created_at -> format('F d, Y')}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $attendanceHistory->links() }}
    </div>



    <script>
            document.addEventListener('DOMContentLoaded', function () {
        const overtimeField = document.getElementById('overtime_hours');
        const form = overtimeField.closest('form');

        form.addEventListener('submit', function (e) {
            const value = parseFloat(overtimeField.value);
            if (value < 1 || value > 4) {
                e.preventDefault();
                alert("Overtime must be between 1 and 4 hours.");
            }
        });
    });
        document.getElementById('request_type').addEventListener('change', function () {
            var overtimeField = document.getElementById('overtime-hours-field');
            overtimeField.style.display = this.value === 'overtime' ? 'block' : 'none';
        });
        document.addEventListener("DOMContentLoaded", function () {
        function autoDismissAlert(selector) {
            const alertElement = document.querySelector(selector);
            if (alertElement) {
                setTimeout(() => {
                    alertElement.classList.remove("show");
                    alertElement.classList.add("fade");
                    setTimeout(() => {
                        alertElement.remove();
                    }, 500); // delay to allow fade animation
                }, 5000); // dismiss after 5 seconds
            }
        }

        // Apply to different alert types
        autoDismissAlert(".alert-success");
        autoDismissAlert(".alert-danger");
        autoDismissAlert(".alert-warning");
    });
            
    </script>
</x-app-layout>
