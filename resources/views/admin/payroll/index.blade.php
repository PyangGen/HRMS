<style>
    /* Main Content */
    html,
    body {
        overflow: hidden;
        /* Disable scrolling */
        height: 100%;
        /* Ensure the body and html take up full height */
    }

    .main-content {
        margin-left: 250px;
        padding-left: 70px;
        padding-right: 70px;
        width: calc(100% - 250px);
        /* Adjust width to account for margin */
        min-height: 100vh;
        background-color: #f0f0f5;
        overflow: hidden;
        /* Prevent content overflow */
    }

    .dashboard-content {
        margin-top: 30px;

    }

    /* Header */
    .header {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .header h1 {
        margin-top: 30px;
        color: #1E1E8F;
        /* Blue color for the text */
        font-size: 1.5em;
        /* Increased font size for bolder appearance */
        margin-left: 15px;
        /* Adds spacing to the left */
        font-family: 'Poppins', sans-serif;
        font-weight: 900;
        /* Maximum font weight */
        letter-spacing: -0.5px;
        /* Tighter letter spacing for bolder look */
        text-shadow: 0.5px 0 0 currentColor;
        /* Text shadow for extra boldness */
    }

    .header img {
        width: 40px;
        margin-top: 20px;

    }

    .cardN {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr 2fr 1fr auto auto;
        align-items: center;
        column-gap: 10px;
        width: 100%;
        box-sizing: border-box;
        margin: 10px 0;
    }

    /* Card L Style (for profile and others) */
    .cardL {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 100%;
        display: grid;
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr 2fr auto auto;
        align-items: center;
        column-gap: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    /* Align content text inside cards */
    .cardN div,
    .cardL div,
    .cardN label,
    .cardL label {
        text-align: left;
    }

    /* Dropdown Styling */
    .cardL select {
        width: 100%;
        max-width: 150px;
        padding: 5px;
    }

    /* Profile Icon Styling */
    .cardL .product-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    /* Responsive Grid Adjustments */
    @media (max-width: 1200px) {

        .cardN,
        .cardL {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {

        .cardN,
        .cardL {
            grid-template-columns: repeat(2, 1fr);
        }

        .cardL select {
            width: 100%;
        }
    }

    @media (max-width: 480px) {

        .cardN,
        .cardL {
            grid-template-columns: 1fr;
        }
    }

    .add-button {
        background-color: #1E1E8F;
        color: white;
        border-radius: 10px;
        border: none;
        margin-left: 990px;
        /* Increased margin to move button right */
        margin-top: -50px;
        /* Match Filter button's margin-top */
        padding: 12px 21px;
        font-family: 'Poppins', sans-serif;
        display: flex;
        margin-bottom: 10px;
        justify-content: center;
        /* Horizontal alignment */
        align-items: center;
        /* Vertical alignment */
        text-decoration: none;
    }

    .delete-btn {
        background-color: #AF0000;
        border: none;
        border-radius: 20px;
        color: white;
        padding: 6px 20px;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
        text-align: center;
        display: inline-block;

    }

    .modal-content {
        border-radius: 20px !important;
        /* Smooth rounded corners */
        overflow: hidden;
        /* Prevents content from overflowing */
        padding: 20px;
        width: 100%;
        max-width: 400px;
        /* Adjust this value to match your image size */
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        /* Keeps the buttons aligned */
        align-items: center;
        /* Centers them vertically */
        gap: 10px;
        /* Adds space between the buttons */
        margin-top: 15px;
        /* Space from input fields */

    }

    .delete-buttonn {
        width: 63%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 13px;
        color: white;
        margin-left: 15PX;
        margin-right: -10px;
        background-color: #18a74f;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none;
        text-align: center;

    }

    .cancell-button {
        width: 26%;
        padding: 10px;
        border: 1px solid black;
        /* Ensure black border */
        border-radius: 8px;
        font-size: 13px;
        color: black;
        margin-right: 15px;
        background-color: none;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover effects */
    .delete-buttonn:hover {
        background-color: #14813b;
    }

    .cancell-button:hover {
        background-color: #8b0000;
        color: white;
        border: none;
    }
    .pagination a, 
.pagination span {
    color: #1E1E8F !important; /* Change text color */
    margin-left: 1020px;
    margin-top: -40px;
}

.pagination .active span {
    background-color: #1E1E8F !important; /* Active background */
    border-color: #1E1E8F !important;
    color: white !important; /* Active text color */
}

.pagination a:hover {
    background-color: #1E1E8F !important;
    color: white !important;
    border-color: #1E1E8F !important;
}
</style>
<x-app-layout>
    <div class="main-content">
        <div class="dashboard-content">
            <!-- Header -->
            <div class="header">
                <img src="{{ asset('images/payroll_blue.png') }}" alt="Product Icon">
                <h1>Payroll</h1>
            </div>
        </div>

        <button class="add-button" data-bs-toggle="offcanvas" data-bs-target="#addPayModal">
            <img src="{{ asset('images/plus.png') }}" alt="Add Icon">
            Add To Pay
        </button>

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="cardN">
            <label>Employee Name</label>
            <label>Hours</label>
            <label>Salary</label>
            <label>Deduction</label>
            <label>Total Salary</label>
            <label>Date</label>
            <label>Action</label>
        </div>
        @forelse($payrolls as $payroll)
            <div class="cardL" id="payrollCard{{ $payroll->id }}" data-user-id="{{ $payroll->user_id }}">
                <label>{{ $payroll->user->name }}</label>
                <label>{{ $payroll->total_hours }}</label>
                <label>P {{ $payroll->salary }}</label>
                <label>P {{ $payroll->total_deductions }}</label>
                <label>P {{ $payroll->net_salary }}</label>
                <label>{{ $payroll->created_at->format('F j, Y') }}</label>


                <button type="button" class="btn-group">
                    <a href="#" class="delete-btn show-delete-modal" data-bs-toggle="modal"
                        data-bs-target="#deleteScheduleModal" data-card-id="payrollCard{{ $payroll->id }}"
                        data-user-id="{{ $payroll->user_id }}" data-user-name="{{ $payroll->user->name }}"
                        data-payroll-id="{{ $payroll->id }}">
                        Delete
                    </a>

                </button>
            </div>
        @empty
            <tr>
                <p class="text-center">Payroll not found</p>
            </tr>
        @endforelse
        <div class="mt-4">
            <p>Total Records: <strong>{{ $total }}</strong></p>
        </div>
        <div class="pagination">
            {{ $payrolls->links() }}
        </div>


    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="addPayModal">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add Payroll</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <form id="payrollForm" method="POST" action="{{ route('admin/payrolls/store') }}">
                @csrf
                <input type="hidden" name="user_id" id="user_id">
                <div class="mb-3">
                    <label>Employee</label>
                    <select name="user_id" id="employee_select" class="form-select">
                        <option value="">-- Select Employee --</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                <label for="month">Month</label>
                <input type="month" name="month" id="month" class="form-control">
            </div>

                <div class="mb-3">
                    <label>Total Hours</label>
                    <input type="text" name="total_hours" id="total_hours" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label>Salary per Hour</label>
                    <input type="number" name="salary_per_hour" id="salary_per_hour" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Total Salary</label>
                    <input type="text" id="salary" name="salary" class="form-control" readonly>
                </div>
                <label class="form-label">Deductions (Amount)</label>
                <div class="mb-2">
                    <div class="mb-0">
                        <label for="sss" class="form-label mb-0">SSS (₱)</label>
                        <input type="number" name="sss" id="sss" placeholder="SSS" value="900"
                            class="form-control form-control-sm">
                    </div>

                    <div class="mb-0">
                        <label for="pagibig" class="form-label mb-0">Pag-IBIG (₱)</label>
                        <input type="number" name="pagibig" id="pagibig" placeholder="Pag-IBIG" value="100"
                            class="form-control form-control-sm">
                    </div>

                    <div class="mb-0">
                        <label for="philhealth" class="form-label mb-0">PhilHealth (₱)</label>
                        <input type="number" name="philhealth" id="philhealth" placeholder="PhilHealth" value="500"
                            class="form-control form-control-sm">
                    </div>

                    <div class="mb-0">
                        <label for="other_deduction" class="form-label mb-0">Other Deduction (₱)</label>
                        <input type="number" name="other_deduction" id="other_deduction" placeholder="Other Deduction"
                            value="0" class="form-control form-control-sm">
                    </div>
                </div>



                <div class="mb-3">
                    <label>Total Deductions</label>
                    <input type="text" id="total_deductions" name="total_deductions" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label>Net Salary</label>
                    <input type="text" id="net_salary" name="net_salary" class="form-control" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Submit Payroll</button>
            </form>
        </div>
    </div>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteScheduleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                </div>
                <div class="modal-body">
                    <p id="deleteUserText"></p>
                </div>
                <div class="button-container">
                    <a href="#" class="delete-buttonn" id="confirmDeleteUser">Yes, Delete</a>
                    <button type="button" class="cancell-button" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.add-button').forEach(button => {
            button.addEventListener('click', async function () {
                const userId = this.dataset.userId;

                // Fetch user and attendance data
                const response = await fetch(`/get-user-data/${userId}`);
                const data = await response.json();

                // Fill form fields
                document.getElementById('user_id').value = userId;
                document.getElementById('employee_name').value = data.name;
                document.getElementById('total_hours').value = data.total_hours;

                // Clear salary and deduction fields
                document.getElementById('salary_per_hour').value = '';
                document.getElementById('salary').value = '';
                document.getElementById('sss').value = '';
                document.getElementById('pagibig').value = '';
                document.getElementById('philhealth').value = '';
                document.getElementById('other_deduction').value = '';
                document.getElementById('total_deductions').value = '';
                document.getElementById('net_salary').value = '';
            });
        });

        // Auto calculation logic
        const salaryPerHour = document.getElementById('salary_per_hour');

        [salaryPerHour, ...['sss', 'pagibig', 'philhealth', 'other_deduction'].map(id => document.getElementById(id))].forEach(input => {
            input.addEventListener('input', () => {
                const totalHours = parseFloat(document.getElementById('total_hours').value) || 0;
                const perHour = parseFloat(salaryPerHour.value) || 0;
                const baseSalary = totalHours * perHour;

                document.getElementById('salary').value = baseSalary.toFixed(2);

                // Get deduction values as fixed amounts
                const sss = parseFloat(document.getElementById('sss').value) || 0;
                const pagibig = parseFloat(document.getElementById('pagibig').value) || 0;
                const philhealth = parseFloat(document.getElementById('philhealth').value) || 0;
                const other = parseFloat(document.getElementById('other_deduction').value) || 0;

                const totalDeductions = sss + pagibig + philhealth + other;
                const netSalary = baseSalary - totalDeductions;

                document.getElementById('total_deductions').value = totalDeductions.toFixed(2);
                document.getElementById('net_salary').value = netSalary.toFixed(2);
            });
        });

        document.getElementById('employee_select').addEventListener('change', fetchTotalHours);
    document.getElementById('month').addEventListener('change', fetchTotalHours);

    function fetchTotalHours() {
        const userId = document.getElementById('employee_select').value;
        const month = document.getElementById('month').value; // format: YYYY-MM

        if (!userId || !month) {
            document.getElementById('total_hours').value = '';
            return;
        }

        fetch(`/admin/payrolls/fetch-hours?user_id=${userId}&month=${month}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('total_hours').value = data.total_hours;
                    // Trigger recalculation if salary/hour already set
                    document.getElementById('salary_per_hour').dispatchEvent(new Event('input'));
                } else {
                    alert('Failed to fetch hours.');
                }
            })
            .catch(err => {
                console.error('Error fetching hours:', err);
            });
    }
        document.addEventListener('DOMContentLoaded', function () {
            let cardToDeleteId = null;
            let payrollIdToDelete = null;

            document.querySelectorAll('.show-delete-modal').forEach(button => {
                button.addEventListener('click', function () {
                    cardToDeleteId = this.getAttribute('data-card-id');
                    payrollIdToDelete = this.getAttribute('data-payroll-id');
                    const userName = this.getAttribute('data-user-name');

                    document.getElementById('deleteUserText').textContent =
                        `Are you sure you want to remove ${userName}'s payroll card?`;
                });
            });

            document.getElementById('confirmDeleteUser').addEventListener('click', function (e) {
                e.preventDefault();

                if (cardToDeleteId && payrollIdToDelete) {
                    fetch(`admin/payroll/${payrollIdToDelete}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json'
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            // Remove card from DOM
                            const cardElement = document.getElementById(cardToDeleteId);
                            if (cardElement) cardElement.remove();

                            // Optional: store hidden card in localStorage
                            let hidden = JSON.parse(localStorage.getItem('hiddenPayrollCards')) || [];
                            if (!hidden.includes(cardToDeleteId)) {
                                hidden.push(cardToDeleteId);
                                localStorage.setItem('hiddenPayrollCards', JSON.stringify(hidden));
                            }

                            // Hide modal
                            const modal = bootstrap.Modal.getInstance(document.getElementById('deleteScheduleModal'));
                            modal.hide();
                        })
                        .catch(error => {
                            alert('Error deleting payroll. Please try again.');
                            console.error(error);
                        });
                }
            });
        });

    </script>



</x-app-layout>