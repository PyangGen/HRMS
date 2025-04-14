<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4">Welcome, {{ $employee->name }}</h1>
                    <hr/>

                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>Name</th>
                                <th>User Type</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">{{ $employee->name }}</td>
                                <td class="align-middle">{{ $employee->usertype }}</td>
                                <td class="align-middle">{{ $employee->department }}</td>
                                <td class="align-middle">{{ $employee->position }}</td>
                                <td class="align-middle">{{ $employee->email }}</td>
                                <td class="align-middle">{{ $employee->created_at }}</td>
                                <td class="align-middle">{{ $employee->updated_at }}</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('profile') }}" class="btn btn-secondary">Edit Profile</a>
                                        <button class="btn btn-danger">Change Password</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
