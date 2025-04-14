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
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attendance Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="text-2xl font-bold">Attendance Records</h1>
                        <a href="{{ route('admin/attendances') }}" class="btn btn-primary">+ Mark Attendance</a>
                    </div>

                    @if (Session::has('success'))
                        <div class="alert alert-success mb-3" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover text-center align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Employee Name</th>
                                    <th>Schedule</th>
                                    <th>Time In</th>
                                    <th>Time Out</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($attendances as $attendance)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $attendance->name ?? $attendance->user->name ?? '-' }}</td>
                                        <td>
                                            @if ($attendance->schedule)
                                                {{ \Carbon\Carbon::parse($attendance->schedule->shift_start)->format('h:i A') }}
                                                -
                                                {{ \Carbon\Carbon::parse($attendance->schedule->shift_end)->format('h:i A') }}
                                            @else
                                                Not Set
                                            @endif
                                        </td>
                                        <td>{{ $attendance->time_in ? \Carbon\Carbon::parse($attendance->time_in)->format('h:i A') : '-' }}</td>
                                        <td>{{ $attendance->time_out ? \Carbon\Carbon::parse($attendance->time_out)->format('h:i A') : '-' }}</td>
                                        <td>{{ $attendance->status }}</td>
                                        <td>{{ \Carbon\Carbon::parse($attendance->date)->format('F j, Y') }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin/attendances/edit', ['id' => $attendance->id]) }}" class="btn btn-sm btn-secondary">Edit</a>
                                                <a href="{{ route('admin/attendances/delete', ['id' => $attendance->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">No attendance records found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <p>Total Records: <strong>{{ $total }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
