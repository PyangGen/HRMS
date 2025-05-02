@php
    use Illuminate\Support\Facades\DB;
    use Carbon\Carbon;

    $today = Carbon::today()->toDateString();

    $totalEmployees = DB::table('users')->where('usertype', 'user')->count();
    $present = DB::table('attendances')->whereDate('created_at', $today)->where('status', 'Present')->count();
    $absent = DB::table('attendances')->whereDate('created_at', $today)->where('status', 'Absent')->count();
    $earlyOut = DB::table('attendances')->whereDate('created_at', $today)->where('request', 'early_out')->count();
    $lateIn = DB::table('attendances')->whereDate('created_at', $today)->where('request', 'late_in')->count();
    $overtime = DB::table('attendances')->whereDate('created_at', $today)->where('request', 'overtime')->count();

    $departments = DB::table('departments')
        ->select('dept_name', DB::raw('count(*) as total'))
        ->groupBy('dept_name')
        ->get();
@endphp

<x-app-layout>
    @auth
        @if (auth()->user()->usertype === 'admin')
            <div class="main-content">
                    <!-- Header -->
                    <div class="dashboard-header">
                        <img src="{{ asset('images/dashboard_blue.png') }}" alt="Product Icon" class="dashboard-icon-img">
                        <h1 class="dashboard-title">Dashboard</h1>
                    </div>
                    <div class="dashboard-container">
                    <!-- Dashboard Cards -->
                    <!-- Horizontal Card Row -->
                    <div class="dashboard-row">
                        <!-- Total Employees -->
                        <div class="dashboard-card">
                    <div class="dashboard-content">
                        <div class="dashboard-value text-2xl">{{ $totalEmployees }}</div>
                        <div class="dashboard-label">Employees</div>
                    </div>
                    <svg class="dashboard-icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-3-3h-2m-4 5v-2a3 3 0 00-3-3H7a3 3 0 00-3 3v2h5m4-5a3 3 0 100-6 3 3 0 000 6zm6 0a3 3 0 100-6 3 3 0 000 6zM7 10a3 3 0 100-6 3 3 0 000 6z"/>
                    </svg>
                </div>


                <div class="dashboard-card card-dual-status">
                <div class="status-row">
                    <div class="status-block present">
                        <span class="status-label">Present</span>
                        <span class="status-value">{{ $present }}</span>
                    </div>
                    <div class="status-block absent">
                        <span class="status-label">Absent</span>
                        <span class="status-value">{{ $absent }}</span>
                    </div>
                </div>
                <div class="dashboard-label text-gray-600 text-sm mt-2 text-center">Attendance Today</div>
            </div>

<div class="dashboard-card card-requests">
    <div class="request-row">
        <div class="request-block early">
            <span class="request-label">Early Out</span>
            <span class="request-value">{{ $earlyOut }}</span>
        </div>
        <div class="request-block late">
            <span class="request-label">Late In</span>
            <span class="request-value">{{ $lateIn }}</span>
        </div>
        <div class="request-block ot">
            <span class="request-label">Overtime</span>
            <span class="request-value">{{ $overtime }}</span>
        </div>
    </div>
    <div class="dashboard-label text-gray-600 text-sm mt-3 text-center">Requests</div>
</div>


<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <div class="dashboard-cardd card-chart">
        <h3 class="chart-title">Departments</h3>
        <canvas id="departmentPieChart" class="chart-canvas"></canvas>
    </div>
</div>


                    </div>
                    </div>
                </div>
            </div>

            <!-- Chart.js Pie -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const pieCtx = document.getElementById('departmentPieChart').getContext('2d');
                new Chart(pieCtx, {
                    type: 'pie',
                    data: {
                        labels: {!! json_encode($departments->pluck('dept_name')) !!},
                        datasets: [{
                            data: {!! json_encode($departments->pluck('total')) !!},
                            backgroundColor: [
                                '#3B82F6', '#F59E0B', '#10B981', '#EF4444', '#8B5CF6', '#F472B6', '#0EA5E9'
                            ],
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }
                });
            </script>
        @endif
    @endauth
</x-app-layout>
<style>
    html, body {
    overflow: hidden;
    height: 100%;
}

.main-content {
    margin-left: 250px;
    padding-left: 70px;
    padding-right: 70px;
    width: calc(100% - 250px);
    min-height: 100vh;
    background-color: #f0f0f5;
    overflow: hidden;
}

.dashboard-header {
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.dashboard-title {
    margin-top: 30px;
    color: #1E1E8F;
    font-size: 1.5em;
    margin-left: 15px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    letter-spacing: -0.5px;
    text-shadow: 0.5px 0 0 currentColor;
}
.dashboard-container{
    
}

.dashboard-icon-img {
    width: 40px;
    margin-top: 20px;
}
.dashboard-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ebf8ff;
    color: #2b6cb0;
    padding: 1rem;
    border-radius: 0.5rem;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 220px;
    height: 100px;
    transition: transform 0.2s ease-in-out;
}

.dashboard-card:hover {
    transform: scale(1.05);
}

.dashboard-content {
    display: flex;
    flex-direction: column;
}

.dashboard-value {
    font-size: 1.5rem;
    font-weight: bold;
}

.dashboard-label {
    font-size: 0.875rem;
    margin-top: 0.5rem;
}

.dashboard-icon {
    width: 40px;
    height: 40px;
    color: #3182ce;
}
.dashboard-card.card-dual-status {
    background: rgba(240, 253, 244, 0.9); /* very light green */
    border: 1px solid rgba(203, 213, 225, 0.5); /* light border */
    border-radius: 1rem;
    padding: 1rem;
    width: 240px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    backdrop-filter: blur(6px);
    transition: transform 0.2s ease-in-out;
}

.dashboard-card.card-dual-status:hover {
    transform: translateY(-3px);
}

.status-row {
    display: flex;
    justify-content: space-between;
    width: 100%;
    gap: 1rem;
}

.status-block {
    flex: 1;
    text-align: center;
    border-radius: 0.75rem;
    padding: 0.5rem 0;
    background-color: rgba(255, 255, 255, 0.6);
    box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.04);
}

.status-block.present {
    color: #2f855a; /* green-700 */
    border: 1px solid #c6f6d5; /* green-100 */
}

.status-block.absent {
    color: #e53e3e; /* red-600 */
    border: 1px solid #fed7d7; /* red-100 */
}

.status-label {
    display: block;
    font-size: 0.85rem;
    font-weight: 500;
}

.status-value {
    font-size: 1.4rem;
    font-weight: 700;
    margin-top: 0.25rem;
}
.dashboard-card.card-requests {
    background: rgba(255, 251, 235, 0.9); /* yellow-50 */
    border: 1px solid rgba(251, 191, 36, 0.2); /* subtle yellow border */
    border-radius: 1rem;
    padding: 1rem;
    width: 280px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
    display: flex;
    flex-direction: column;
    align-items: center;
    backdrop-filter: blur(6px);
    transition: transform 0.2s ease-in-out;
}

.dashboard-card.card-requests:hover {
    transform: translateY(-3px);
}

.request-row {
    display: flex;
    justify-content: space-between;
    gap: 0.5rem;
    width: 100%;
}

.request-block {
    flex: 1;
    border-radius: 0.75rem;
    padding: 0.6rem 0.5rem;
    background-color: rgba(255, 255, 255, 0.6);
    text-align: center;
    box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.03);
}

.request-block.early {
    color: #b7791f; /* yellow-700 */
    border: 1px solid #fefcbf; /* yellow-100 */
}

.request-block.late {
    color: #dd6b20; /* orange-600 */
    border: 1px solid #fbd38d; /* orange-200 */
}

.request-block.ot {
    color: #6b46c1; /* purple-700 */
    border: 1px solid #e9d8fd; /* purple-100 */
}

.request-label {
    display: block;
    font-size: 0.85rem;
    font-weight: 500;
    margin-bottom: 0.2rem;
}

.request-value {
    font-size: 1.3rem;
    font-weight: 700;
}
.dashboard-cardd.card-chart {
    background-color: #ffffff;
    border-radius: 1rem;
    padding: 1.5rem 1.5rem 2rem;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
    border: 1px solid #e2e8f0; /* gray-200 */
    width: 100%;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* changed from center to left align */
    transition: transform 0.2s ease-in-out;
    margin-left: 0; /* remove auto centering */
    margin-top: 2rem;
}


.dashboard-cardd.card-chart:hover {
    transform: translateY(-4px);
}

.chart-title {
    text-align: left; /* changed from center */
    padding-left: 1rem;
}


.chart-canvas {
    width: 100% !important;
    height: 260px !important; /* Increased for better display */
}
.dashboard-row {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 2rem;
}



</style>