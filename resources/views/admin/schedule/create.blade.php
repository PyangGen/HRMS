<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Schedule') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4">Create Schedule</h1>

                    <form action="{{ route('admin/schedules/store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="user_id" class="form-label">Select Employee</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="shift" class="form-label">Shift</label>
                            <select name="shift" id="shift" class="form-control">
                                <option value="full-time">Full-time</option>
                                <option value="part-time">Part-time</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="shift_type" class="form-label">Shift Type</label>
                            <select name="shift_type" id="shift_type" class="form-control">
                                <option value="morning">Morning Shift</option>
                                <option value="afternoon">Afternoon Shift</option>
                                <option value="night">Night Shift</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="shift_start" class="form-label">Shift Start Time</label>
                            <input type="time" name="shift_start" id="shift_start" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="shift_end" class="form-label">Shift End Time</label>
                            <input type="time" name="shift_end" id="shift_end" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Schedule</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 -->