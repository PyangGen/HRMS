<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Attendance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Attendance</h1>
                    <hr />
                    <form action="{{ route('admin/attendances/update', $attendances->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col mb-3">
                                <label for="name" class="form-label">Employee Name</label>
                                <select name="name" id="name" class="form-control" disabled>
                                    <option value="{{ $attendances->name }}" selected>{{ $attendances->name }}</option>
                                </select>
                                <input type="hidden" name="name" value="{{ $attendances->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="Present" {{ $attendances->status == 'Present' ? 'selected' : '' }}>
                                        Present</option>
                                    <option value="Absent" {{ $attendances->status == 'Absent' ? 'selected' : '' }}>Absent
                                    </option>
                                    <option value="Leave" {{ $attendances->status == 'Leave' ? 'selected' : '' }}>Leave
                                    </option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="date" class="form-label">Attendance Date:</label>
                            <input type="date" name="date" class="form-control" value="{{ $attendances->date }}">
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                </div>
                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-warning">Update Attendance</button>
                    </div>
                    <a href="{{ route('admin/attendances') }}" class="btn btn-secondary">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>