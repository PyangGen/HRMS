<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
/* Add styling for the chart card */
.chart-card {
    background-color: #fff;
    border-radius: 1rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    padding: 1rem;
    margin-top: 2rem;
    max-width: 860px;  /* Set a max width for the chart card */
    width: 100%;
    max-height: 480px;
    margin-left: 60px;
}

/* Make sure the canvas fits within the card */
.chart-card canvas {
    max-width: 100%;
    height: auto;
}
/* Profile Card */
.profile-card-container {
    padding: 2rem 0.5rem;
    display: flex;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
}

.profile-card {
    background-color: #fff;
    border-radius: 1rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    max-width: 400px;  /* smaller width */
    width: 90%;
    overflow: hidden;
    padding: 1rem;     /* Adjust padding for compactness */
    margin-left: 275px;
    display: flex;
    flex-direction: column;
}

/* Profile Header */
.profile-header {
    padding: 1rem;
    border-bottom: 1px solid #eee;
}

.profile-header h1 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d3748;
}

/* Profile Content */
.profile-content {
    padding: 1rem;
    display: flex;
    flex-direction: column;
}

/* Profile Image Section */
.profile-image-section {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

/* Profile Image */
.profile-image {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #e2e8f0;
}

/* No Image Placeholder */
.no-image {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #94a3b8;
    font-size: 0.875rem;
}

/* User Name and Email */
.profile-basic-info .user-name {
    font-weight: 600;
    font-size: 1.125rem;
    color: #1e293b;
}

.profile-basic-info .user-email {
    color: #64748b;
    font-size: 0.875rem;
}

/* Profile Info */
.profile-info {
    border-top: 1px solid #e5e7eb;
    border-bottom: 1px solid #e5e7eb;
    padding: 1rem 0;
    display: grid;
    row-gap: 0.5rem;
    font-size: 0.95rem;
    color: #374151;
}

.profile-info span {
    font-weight: 500;
    color: #6b7280;
    margin-right: 0.5rem;
}

/* Profile Actions */
.profile-actions {
    margin-top: 1.5rem;
    display: flex;
    gap: 1rem;
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 0.5rem 1.25rem;
    border-radius: 0.5rem;
    font-weight: 500;
    text-align: center;
    transition: background-color 0.3s ease;
    text-decoration: none;
}

.btn-primary {
    background-color: #2563eb;
    color: #fff;
}

.btn-primary:hover {
    background-color: #1d4ed8;
}

.btn-secondary {
    background-color: #e5e7eb;
    color: #1f2937;
}

.btn-secondary:hover {
    background-color: #d1d5db;
}

/* Payroll Card */
.payroll-cards {
    display: grid;
    gap: 1rem;
    margin-top: -100px;
    margin-left: 310px;
}

.payroll-card {
    background-color: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 0.75rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    padding: 1rem 1.25rem;
    font-family: 'Poppins', sans-serif;
    font-size: 0.95rem;
    color: #1f2937;
    margin-top: 100px;
    transition: transform 0.2s ease;
}

.payroll-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

.payroll-card div {
    margin-bottom: 0.5rem;
}

.net-salary {
    font-weight: 600;
    color: #2563eb;
}

.profile-and-payroll-wrapper {
    display: flex;
    font-family: 'Poppins', sans-serif;
}

/* Ensure profile card stays as-is */
.profile-card-container {
    flex: 0 0 350px;
}

/* RESPONSIVE STYLES */

/* Make profile and chart cards responsive */
@media (max-width: 768px) {
    .profile-card-container {
        margin-left: 0;
        flex: 1;
    }

    .profile-card {
        margin-left: 0;
        margin-right: 0;
    }

    .chart-card {
        margin-left: 0;
        max-width: 100%;
    }

    .payroll-table-wrapper {
        margin-left: 0;
        padding: 1rem;
    }

    .payroll-table {
        width: 100%;
        overflow-x: auto;
    }

    .payroll-cards {
        margin-left: 0;
    }

    .payroll-card {
        margin-top: 1rem;
    }
}
</style>

<x-app-layout>
    @php
        $now = \Carbon\Carbon::now('Asia/Manila');
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $netSalaries = array_fill(0, 12, 0); // Initialize an array with 12 months set to 0

        // Loop through the payrolls and assign net salaries to their corresponding months based on created_at date
        foreach($payrolls as $payroll) {
            $month = \Carbon\Carbon::parse($payroll->created_at)->format('n') - 1; // Get the month from created_at (1-12) and adjust to 0-index
            $netSalaries[$month] += $payroll->net_salary; // Accumulate net salary for each month
        }
    @endphp

    <div class="profile-and-payroll-wrapper">
        <div class="profile-card-container">
            <div class="profile-card">
                <div class="profile-header">
                    <h1>Welcome, {{ $user->name }}</h1>
                </div>

                <div class="profile-content">
                    <div class="profile-image-section">
                        @if($user->image)
                            <img src="{{ asset('storage/' . $user->image) }}" alt="Profile" class="profile-image">
                        @else
                            <div class="no-image">No image</div>
                        @endif
                        <div class="profile-basic-info">
                            <p class="user-name">{{ $user->name }}</p>
                            <p class="user-email">{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="profile-info">
                        <div><span>Department:</span> {{ $user->department }}</div>
                        <div><span>Position:</span> {{ $user->position }}</div>
                        <div><span>Account Created:</span> {{ $user->created_at->format('F d, Y') }}</div>
                    </div>

                    <div class="profile-actions">
                        <a href="{{ route('profile.update') }}" class="btn btn-secondary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
         <!-- Chart Card -->
         <div class="chart-card">
                    <h2>Net Salary by Month</h2>
                    <canvas id="netSalaryChart"></canvas>
                    <script>
                        const ctx = document.getElementById('netSalaryChart').getContext('2d');
                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: @json($months), // Month labels (Jan-Dec)
                                datasets: [{
                                    label: 'Net Salary (₱)',
                                    data: @json($netSalaries), // Net salary data based on payroll's created_at month
                                    backgroundColor: '#2563eb', // Blue bars
                                    borderColor: '#1d4ed8',
                                    borderWidth: 1,
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            callback: function(value) {
                                                return '₱' + value.toLocaleString(); // Format y-axis as currency
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    </script>
                </div>
                </div>
        <!-- Payroll and Chart Section -->
        <div class="payroll-section">
    @if($payrolls->isEmpty())
        <p>No payroll records available.</p>
    @else
        <!-- Payroll Table -->
        <div class="payroll-table-wrapper overflow-x-auto p-4" style="margin-left: 260px;">
    <table class="payroll-table w-full table-auto border-collapse text-left bg-white shadow-md rounded-lg">
        <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-medium">
            <tr>
                <th class="py-1 px-2 border-b">Total Hours</th>
                <th class="py-1 px-2 border-b">SSS</th>
                <th class="py-1 px-2 border-b">Pag-IBIG</th>
                <th class="py-1 px-2 border-b">PhilHealth</th>
                <th class="py-1 px-2 border-b">Tax</th>
                <th class="py-1 px-2 border-b">Net Salary</th>
                <th class="py-1 px-2 border-b">Date Issued</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payrolls as $payroll)
                <tr class="bg-white hover:bg-gray-50 text-sm font-medium">
                    <td class="py-1 px-2 border-b">{{ number_format($payroll->total_hours, 2) }}</td>
                    <td class="py-1 px-2 border-b">{{ number_format($payroll->sss, 2) }}</td>
                    <td class="py-1 px-2 border-b">{{ number_format($payroll->pagibig, 2) }}</td>
                    <td class="py-1 px-2 border-b">{{ number_format($payroll->philhealth, 2) }}</td>
                    <td class="py-1 px-2 border-b">{{ number_format($payroll->tax, 2) }}</td>
                    <td class="py-1 px-2 border-b">{{ number_format($payroll->net_salary, 2) }}</td>
                    <td class="py-1 px-2 border-b">{{ $payroll->created_at->format('M d, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
</div>
    </div>


    

    <script>
        function updatePhilippineTime() {
            const options = {
                timeZone: 'Asia/Manila',
                hour: '2-digit',
                minute: '2-digit',
                hour12: true,
            };

            const dateOptions = {
                timeZone: 'Asia/Manila',
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
            };

            const now = new Date();

            const timeString = now.toLocaleTimeString('en-US', options);
            const dateString = now.toLocaleDateString('en-US', dateOptions);

            document.getElementById('ph-time').textContent = timeString;
            document.getElementById('ph-date').textContent = dateString;
        }

        // Update every second
        setInterval(updatePhilippineTime, 1000);
        // Initialize immediately
        updatePhilippineTime();
    </script>
</x-app-layout>
