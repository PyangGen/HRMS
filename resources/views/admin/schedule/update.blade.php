<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Schedule') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4">Update Schedule</h1>

                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin/schedules/update', $schedule->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="user_id" class="form-label">Select Employee</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" {{ $user->id == $schedule->user_id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="shift_type" class="form-label">Shift Type</label>
                            <select name="shift_type" id="shift_type" class="form-control">
                                <option value="morning" {{ $schedule->shift_type == 'morning' ? 'selected' : '' }}>Morning Shift</option>
                                <option value="afternoon" {{ $schedule->shift_type == 'afternoon' ? 'selected' : '' }}>Afternoon Shift</option>
                                <option value="night" {{ $schedule->shift_type == 'night' ? 'selected' : '' }}>Night Shift</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="shift_start" class="form-label">Shift Start Time</label>
                            <input type="time" name="shift_start" id="shift_start" class="form-control" value="{{ $schedule->shift_start }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="shift_end" class="form-label">Shift End Time</label>
                            <input type="time" name="shift_end" id="shift_end" class="form-control" value="{{ $schedule->shift_end }}" required>
                        </div>

                        <button type="submit" class="btn btn-success">Update Schedule</button>
                        <a href="{{ route('admin/schedules/index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 -->