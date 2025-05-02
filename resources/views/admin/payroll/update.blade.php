<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Payroll') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Payroll</h1>
                    <hr />
                    <form action="{{ route('admin/payrolls/update', $payrolls->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col mb-3">
                                <label for="name" class="form-label">Employee Name</label>
                                <select name="name" id="name" class="form-control" readonly>
                                    <option value="{{ $payrolls->name }}" selected>{{ $payrolls->name }}</option>
                                </select>
                                <input type="hidden" name="name" value="{{ $payrolls->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Salary</label>
                                <input type="number" name="salary" class="form-control" value="{{ $payrolls->salary }}"
                                    required>
                                @error('salary')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Bonus</label>
                                <input type="number" name="bonus" class="form-control" value="{{ $payrolls->bonus }}">
                                @error('bonus')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Pay Date</label>
                                <input type="date" name="pay_date" class="form-control" value="{{ $payrolls->pay_date }}"
                                    required>
                                @error('pay_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Update Payroll</button>
                            </div>
                            <a href="{{ route('admin/payrolls') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> -->