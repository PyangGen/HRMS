<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attendance') }}
        </h2>
    </x-slot>
    {{-- This is a test --}}
    <style>
        .card {
            margin-left: 200px;
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

        .status-badge {
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .status-present {
            background-color: #28a745;
            color: white;
        }

        .status-absent {
            background-color: #dc3545;
            color: white;
        }

        .status-late {
            background-color: #ffc107;
            color: #212529;
        }

        .request-badge {
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .request-early_out {
            background-color: #17a2b8;
            color: white;
        }

        .request-late_in {
            background-color: #6c757d;
            color: white;
        }

        .request-none {
            background-color: #f8f9fa;
            color: #212529;
            border: 1px solid #dee2e6;
        }

        .schedule-badge {
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 20px;
            background-color: #6610f2;
            color: white;
        }

        .request-form {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .schedule-card {
            margin-left: 500px;
            @apply bg-white shadow-lg rounded-2xl p-6 max-w-md mx-auto mt-6;
        }

        .schedule-title {
            @apply text-2xl font-semibold text-gray-800 mb-4;
        }

        .schedule-badge {
            @apply inline-block bg-blue-100 text-blue-700 text-sm font-medium px-3 py-1 rounded-full mb-2;
        }

        .schedule-details {
            @apply text-gray-700;
        }

        .schedule-details .label {
            @apply font-semibold;
        }

        .schedule-alert {
            @apply bg-yellow-100 text-yellow-800 border border-yellow-300 rounded-xl p-4 max-w-md mx-auto mt-6 flex items-start space-x-3;
        }

        .schedule-alert .alert-icon {
            @apply text-xl mt-1;
        }
    </style>

    <div class="container py-4">
        @if(auth()->user()->usertype === 'user')
                @php
                    $user = auth()->user();
                    $schedule = $user->schedule; // Assuming a relationship exists between User and Schedule
                @endphp

                @if($schedule)
                    <div class="schedule-card"> 
                        <h4>Your Schedule</h4>
                        <p>
                            <span class="badge badge-schedule">{{ ucfirst($schedule->schedule ?? 'N/A') }}</span>
                        </p>
                        <p><strong>Shift Start:</strong> {{ \Carbon\Carbon::parse($schedule->shift_start)->format('h:i A')}}</p>
                        <p><strong>Shift End:</strong> {{ \Carbon\Carbon::parse($schedule->shift_end)->format('h:i A')}}</p>
                    </div>
                @else
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        No schedule assigned to you.
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <?php
                                $attendance = App\Models\Attendance::where('user_id', $user->id)
                                    ->whereDate('time_in', today())
                                    ->first();

                                $canTimeIn = !$attendance;
                                $canTimeOut = false;
                                $timeOutMessage = '';

                                if ($attendance && $schedule && $schedule->shift_start && $schedule->shift_end && $attendance->time_in) {
                                    $shiftStart = \Carbon\Carbon::parse($schedule->shift_start);
                                    $shiftEnd = \Carbon\Carbon::parse($schedule->shift_end);
                                
                                    $requiredMinutes = $shiftStart->diffInMinutes($shiftEnd);
                                    $totalMinutes = $attendance->time_in->diffInMinutes(now());
                                
                                    $hours = floor($totalMinutes / 60);
                                    $minutes = $totalMinutes % 60;
                                
                                    $canTimeOut = $totalMinutes >= $requiredMinutes;
                                
                                    if (strtolower($attendance->status) === 'absent') {
                                        $timeOutMessage = "30 minutes late or more are considered as Absent.";
                                    } else {
                                        $timeOutMessage = $canTimeOut ? "You may now time out" :
                                            sprintf(
                                                "You must work for at least %d hours and %d minutes before timing out. (Current: %02d:%02d hours)",
                                                floor($requiredMinutes / 60),
                                                $requiredMinutes % 60,
                                                $hours,
                                                $minutes
                                            );
                                    }
                                } else {
                                    $timeOutMessage = "Invalid schedule or attendance data.";
                                }
                                

                            ?>

                            @if($attendance && !$canTimeOut)
                                <div class="alert alert-warning mt-3">
                                    {{ $timeOutMessage }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('attendance.timeIn') }}" class="d-inline-block">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-lg mx-2 {{ $canTimeIn ? '' : 'disabled' }}" {{ $canTimeIn ? '' : 'disabled' }} @if(!$canTimeIn) title="You can only time in once per day"
                                @endif>
                                    Time In
                                </button>
                            </form>

                            <form method="POST" action="{{ route('attendance.timeOut') }}" class="d-inline-block">
                                @csrf
                                <button type="submit" class="btn time-out-btn btn-lg mx-2 {{ $canTimeOut ? '' : 'disabled' }}"
                                    {{ $canTimeOut ? '' : 'disabled' }} @if(!$canTimeOut) title="{{ $timeOutMessage }}" @endif>
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
                                            <th>Request</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($attendance)
                                            <tr>
                                                <td>
                                                    <span class="status-badge status-{{ $attendance->status }}">
                                                        {{ ucfirst($attendance->status) }}
                                                    </span>
                                                </td>
                                                <!-- <td>
                                                                                        <span class="schedule-badge">
                                                                                            {{ ucfirst($attendance->schedule) }}
                                                                                        </span>
                                                                                    </td> -->
                                                <td>{{ $attendance->time_in->format('h:i A') }}</td>
                                                <td>{{ $attendance->time_out ? $attendance->time_out->format('h:i A') : 'Not timed out yet' }}
                                                </td>
                                                <td>
                                                    <span class="request-badge request-{{ $attendance->request }}">
                                                        {{ str_replace('_', ' ', ucfirst($attendance->request)) }}
                                                        @if($attendance->request !== 'none' && $attendance->request_reason)
                                                            <i class="fas fa-info-circle ml-1"
                                                                title="{{ $attendance->request_reason }}"></i>
                                                        @endif
                                                    </span>
                                                    @if($attendance->request !== 'none')
                                                        <br>
                                                        <small class="text-muted">
                                                            {{ $attendance->request_approved ? 'Approved' : 'Pending' }}
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

                        @if($attendance && !$attendance->time_out)
                            <div class="request-form">
                                <h4 class="h5 mb-3">Submit Request</h4>
                                <form method="POST" action="{{ route('attendance.submitRequest') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="request_type">Request Type</label>
                                            <select class="form-control" id="request_type" name="request_type">
                                                <option value="none">No Request</option>
                                                <option value="early_out" 
                                                    @if(isset($attendance) && strtolower($attendance->status) === 'absent') disabled @endif>
                                                    Early Out
                                                </option>
                                                <option value="late_in">Late In (for tomorrow)</option>
                                            </select>

                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="request_reason">Reason</label>
                                            <textarea class="form-control" id="request_reason" name="request_reason" rows="2"
                                                placeholder="Please provide a reason for your request"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Request</button>
                                </form>
                              
                            </div>
                        @endif

                        @if($attendance && $attendance->time_out)
                            <div class="alert alert-info mt-4">
                                Your attendance for today is complete. Thank you!
                            </div>
                        @endif
                    </div>
                </div>
        @else
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle mr-2"></i>
                Attendance tracking is only available for regular employee.
            </div>
        @endif
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
            document.addEventListener("DOMContentLoaded", function () {
                function showSuccessMessage(message) {
                    var successMessage = document.createElement("div");
                    successMessage.className = "alert alert-danger fade show"; // Bootstrap alert classes
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
                let sessionSuccess = document.querySelector(".alert-danger");
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