<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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

    .search-bar {
        width: 100%;
        margin-top: -30px;
        position: relative;


    }

    .search-bar input[type="text"] {
        width: 50%;
        padding: 15px 20px 15px 70px;
        /* Increase left padding to accommodate the larger icon */
        border: 1px solid #ccc;
        border-radius: 50px;
        font-size: 1em;
        outline: none;
        color: #333;
        transition: border-color 0.3s, color 0.3s;
        font-family: 'Poppins', sans-serif;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);


        /* Icon Styling */
        background-image: url('{{ asset("images/search.gif") }}');
        background-size: 120px 80px;
        /* Increase the size of the icon */
        background-repeat: no-repeat;
        background-position: -10px;
        /* Position icon with some space from the left edge */
    }

    .cardN {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr auto  auto auto ;
        align-items: center;
        column-gap: 25px;
        width: 100.5%;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        margin: 10px 0;
    }

    /* Card L Style (for profile and others) */
    .cardL {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 100.5%;
        display: grid;
        grid-template-columns: repeat(8, 1fr) min-content;
        align-items: center;
        column-gap: 40px;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }
    .cardN div,
.cardL div {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.cardL select {
    width: 100%; /* Let it fill its column */
    max-width: 120px; /* Force it to behave like other columns */
    padding: 4px;
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

    .btn-group {
    gap: 10px; /* Space between Edit and Delete */
}


    .edit-btn {
    background-color: #18a74f;
    border: none;
    border-radius: 20px;
    color: white;
    padding: 6px 30px;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    text-align: center;
    display: inline-block;
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


    .add-button {
        background-color: #1E1E8F;
        color: white;
        border-radius: 10px;
        border: none;
        margin-left: 955px;
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

    .offcanvas-end {
        width: 400px;
        /* Adjust width as needed */
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
    }

    .offcanvas-header {

        flex-direction: column;
        /* Stack items vertically */
        align-items: flex-start;
        /* Align back button to the left */
        padding: 10px 15px;
        margin-left: -280px;
        margin-top: 5px;
        font-family: 'Poppins', sans-serif;
    }

    .back-add {
        display: flex;
        align-items: center;
        /* Align text and image */
        background: none;
        border: none;
        font-size: 16px;
        color: black;
        cursor: pointer;
        margin-bottom: 20px;
        /* Push title down */
    }

    .img-add {
        width: 16px;
        height: auto;
        margin-right: 5px;
        /* Space between icon and text */
    }

    .offcanvas-body {
        margin-top: 10px;
        overflow-x: hidden;
        /* Prevents horizontal scrolling */
        overflow-y: auto;
        /* Allows vertical scrolling if needed */
        max-width: 100%;
        /* Ensures it doesn't exceed the container width */
        padding-right: 10px;
        /* Prevents content from touching the edge */
        padding-left: 10px;
        /* Prevents left overflow */
        box-sizing: border-box;
        /* Ensures padding is included in width calculations */
    }



    .offcanvas-title {
        margin-top: 20px;
        /* Add space between title and bottom */
        margin-left: 60px;
        font-family: 'Poppins', sans-serif;
        font-weight: 900;
        color: #1E1E8F;
        font-size: 1.5em;
        /* Increased font size for bolder appearance */

    }

    .input-group {
        margin-left: 45px;


    }

    .input-group label {
        position: absolute;
        top: -5%;
        left: 12px;
        transform: translateY(-50%);
        font-size: 14px;
        color: #b0b0b0;
        font-weight: bolder;
        background-color: white;
        padding: 0 5px;
        transition: all 0.3s ease-in-out;
        pointer-events: none;
        /* Prevent clicking on label */
    }

    /* Ensuring label color changes on focus */
    .input-group:focus-within label {
        color: #1E1E8F;


    }

    .input-group input {
        width: 100%;
        max-width: 280px;
        padding: 10px;
        border: 2.5px solid #ccc;
        border-radius: 8px !important;
        /* Force border radius */
        font-size: 14px;
        color: #333;
        transition: border-color 0.3s, color 0.3s;
        outline: none;
        background-color: white;
        display: block;
        box-shadow: none;
    }

    /* Ensures the border-radius applies in all cases */
    .input-group input,
    .input-group input:focus,
    .input-group input:active {
        border-radius: 8px !important;

    }

    /* Placeholder styling */
    .input-group input::placeholder {
        color: #999;
        font-family: 'Poppins', sans-serif;
    }

    /* Focus state */
    .input-group input:focus {
        border-color: #1E1E8F;
        outline: none;

    }

    .input-group select {
        width: 100%;
        max-width: 280px;
        padding: 10px;
        border: 2.5px solid #ccc;
        border-radius: 8px !important;
        /* Force border radius */
        font-size: 14px;
        color: #333;
        transition: border-color 0.3s, color 0.3s;
        outline: none;
        background-color: white;
        display: block;
        font-family: 'Poppins', sans-serif;
        box-shadow: none;
    }

    /* Ensures the border-radius applies in all cases */
    .input-group select,
    .input-group select:focus,
    .input-group select:active {
        border-radius: 8px !important;

    }

    /* Placeholder styling */
    .input-group select::placeholder {
        color: #999;
        font-family: 'Poppins', sans-serif;
    }

    /* Focus state */
    .input-group select:focus {
        border-color: #1E1E8F;
        outline: none;

    }

    .input-group select option:checked {
        background-color: #1E1E8F;
        color: white;
    }


    .submit-btn {
        width: 80%;
        padding: 10px;
        background-color: #1E1E8F;
        color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 0px;
        margin-left: 40px;
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        text-shadow: 0.5px 0 0 currentColor;
    }

    .submit-btn:hover {
        background-color: #18a74f;
    }

    .input-groupedit {
        display: flex;
        align-items: center;
        /* Align label and input vertically */
        gap: 10px;
        /* Space between label and input */
    }

    .input-label {
        font-size: 14px;
        color: #333;
        font-weight: bold;
        white-space: nowrap;
        /* Prevent label from breaking */
        min-width: 100px;
        /* Give labels a consistent width */
        font-weight: bold;
        /* Bold labels for clarity */
        text-align: left;
        /* Align text to the left */
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

    .edit-input {
        width: 100% !important;
        /* Ensure all inputs have the same width */
        max-width: 100% !important;
        /* Prevent any shrinking */
        border: 2px solid #ccc !important;
        /* Default gray border */
        border-radius: 8px !important;
        /* Rounded corners */
        padding: 10px !important;
        /* Consistent padding */
        font-size: 14px !important;
        /* Maintain uniform text size */
        transition: border 0.2s ease-in-out;
        /* Smooth transition */
        display: block;
        /* Ensures it takes full width */
    }

    .edit-input:focus {
        border: 2px solid #1E1E8F !important;
        /* Apply red border on focus */
        outline: none !important;
        /* Remove default browser outline */
        box-shadow: none !important;
        /* Remove blue glow */
    }


    /* Ensure labels and inputs are aligned properly */
    .input-groupedit {
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* Space between label & input */
        width: 100%;
        /* Take full width */
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

    /* Keeps original width */
    .update-button {
        width: 70%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 12px;
        color: white;
        background-color: #18a74f;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .cancel-button {
        width: 30%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 12px;
        color: white;
        background-color: #af0000;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover effects */
    .update-button:hover {
        background-color: #14813b;
    }

    .cancel-button:hover {
        background-color: #8b0000;
    }

    .delete-button {
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
    .delete-button:hover {
        background-color: #14813b;
    }

    .cancell-button:hover {
        background-color: #8b0000;
        color: white;
        border: none;
    }

    .delete-buttonn {
        width: 69%;
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

    .cancell-buttonn {
        width: 26%;
        padding: 10px;
        border: 1px solid white;
        /* Ensure black border */
        border-radius: 8px;
        font-size: 13px;
        color: white;
        margin-right: 15px;
        background-color: #8b0000;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover effects */
    .delete-buttonn:hover {
        background-color: #14813b;
    }



    .pagination a,
    .pagination span {
        color: #1E1E8F !important;
        /* Change text color */
        margin-left: 1020px;
    }

    .pagination .active span {
        background-color: #1E1E8F !important;
        /* Active background */
        border-color: #1E1E8F !important;
        color: white !important;
        /* Active text color */
    }

    .pagination a:hover {
        background-color: #1E1E8F !important;
        color: white !important;
        border-color: #1E1E8F !important;
    }

/* Wraps both label and input group */
.input-container{
    margin-left: 45px;
    margin-top: -10px;
}
.input-container:focus-within .contact-label {
    color: #1E1E8F;
    
}

.contact-label {
    margin-bottom: -10px;
    margin-left: 15px;
    background-color: white;
    color: #b0b0b0;
    font-size: 14px;
    font-weight: bold;
    transition: color 0.3s;
   
}


.custom-input-wrapper {
    border: 2.5px solid #ccc;
    border-radius: 8px;
    max-width: 280px;
    transition: border-color 0.3s;
    background-color: white;
}

.custom-input-wrapper:focus-within {
    border-color: #1E1E8F;
}

.input-prefix {
    background-color: #eee;
    padding: 12px 15px;
    color: #333;
    font-size: 14px;
    pointer-events: none;
    background: transparent;
}

.input-groupp input {
    padding: 10px;
    font-size: 14px;
    color: #333;
    outline: none;           /* This already removes the default focus outline */
    box-shadow: none;        /* Removes shadow from focus (like in Chrome) */
    border: none;            /* Optional: if border appears inside the wrapper */
    background: transparent; /* Optional: if you want no background */
}
.input-groupp input:focus {
    outline: none !important;
    box-shadow: none !important;
}

.input-groupp input::placeholder {
    color: #999;
}
.custom-select {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: transparent;
}

/* Hide arrow for Internet Explorer */
.custom-select::-ms-expand {
  display: none;
}


</style>
<?php

use Illuminate\Support\Facades\Storage;
?>
<x-app-layout>
    <div class="main-content">
        <div class="dashboard-content">
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search employee">
        </div>

            <!-- Header -->
            <div class="header">
                <img src="{{ asset('images/user_blue.png') }}" alt="Product Icon">
                <h1>Employee List</h1>
            </div>
        </div>

        <button class="add-button" data-bs-toggle="offcanvas" data-bs-target="#addEmployeeModal">
            <img src="{{ asset('images/plus.png') }}" alt="Add Icon" style="margin-right: 8px; ">
            Add Employee
        </button>

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif



        <div class="cardN">
            <label>Profile</label>
            <label>Name</label>
            <label>Email</label>
            <label>Type</label>
            <label>Department</label>
            <label>Position</label>
            <label>Gender</label>
            <label>Contact #</label>
            <label>Action</label>
        </div>
        @forelse($users as $user)
            <div class="cardL">
            <label>
                    @if($user->image && Storage::disk('public')->exists($user->image))
            <img src="{{ asset('storage/' . $user->image) }}" width="80" alt="Profile Image">
        @else
            <img src="{{ asset('images/default.jpg') }}" width="80" alt="No Image">
        @endif

</label>

                <label class="user-name">{{ $user->name }}</label> <!-- Add a class to make it easy to select in JS -->
                <label>{{ $user->email }}</label>
                <label>
                <div class="relative w-full max-w-[150px]">
                    <select class="custom-select w-full border border-gray-300 rounded px-3 py-2 userTypeChange" data-user-id="{{ $user->id }}">
                        <option value="user" {{ $user->usertype == 'user' ? 'selected' : '' }}>Employee</option>
                        <option value="admin" {{ $user->usertype == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    </div>

                </label>
                <label>{{ $user->department }}</label>
                <label>{{ $user->position }}</label>
                <label>{{ $user->gender }}</label>
                <label>{{ $user->contact_number }}</label>

                <div class="btn-group">
                    <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"
                        data-id="{{ $user->id }}" 
                        data-name="{{ $user->name }}" 
                        data-email="{{ $user->email }}"
                        data-department="{{ $user->department }}" 
                        data-position="{{ $user->position }}"
                        data-gender="{{ $user->gender }}" 
                        data-contact-number="{{ $user->contact_number }}">
                        Edit
                    </button>

                    <a href="#" class="delete-btn" data-user-id="{{ $user->id }}" data-user-name="{{ $user->name }}">
                        Delete
                    </a>
                </div>
            </div>
        @empty
            <p>No users found.</p>
        @endforelse

        <div class="pagination">
            {{ $users->links() }}
        </div>

        <!-- User Type Change Modal -->
        <div class="modal fade" id="userTypeChangeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Role Change</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p id="userTypeChangeText"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="delete-buttonn" id="confirmUserTypeChange">Yes, Change</button>
                        <button type="button" class="cancell-buttonn" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            let selectedUserId = null;
            let selectedUserType = null;
            let selectedUserName = null; // Store the user's name

            document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll(".userTypeChange").forEach(function (select) {
                    select.addEventListener("change", function () {
                        selectedUserId = this.getAttribute("data-user-id");
                        selectedUserType = this.value;

                        // Fetch the user's name correctly from the label inside the same card
                        selectedUserName = this.closest(".cardL").querySelector(".user-name").innerText.trim();

                        // Update the modal content with the selected user name and type
                        document.getElementById("userTypeChangeText").innerHTML =
                            `Are you sure you want to change <strong>${selectedUserName}</strong> to <strong>${selectedUserType}</strong>?`;

                        // Show the modal
                        let userTypeChangeModal = new bootstrap.Modal(document.getElementById("userTypeChangeModal"));
                        userTypeChangeModal.show();
                    });
                });

                document.getElementById("confirmUserTypeChange").addEventListener("click", function () {
                    if (selectedUserId && selectedUserType) {
                        fetch("{{ route('admin/users/updateRole') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                            },
                            body: JSON.stringify({
                                user_id: selectedUserId,
                                usertype: selectedUserType
                            })
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    location.reload();
                                } else {
                                    alert("Failed to update user type.");
                                }
                            })
                            .catch(error => console.error("Error:", error));
                    }
                });
            });



            document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll(".edit-btn").forEach(button => {
                    button.addEventListener("click", function () {
                        let userId = this.getAttribute("data-id");
                        let userName = this.getAttribute("data-name");
                        let userEmail = this.getAttribute("data-email");
                        let userDepartment = this.getAttribute("data-department");
                        let userPosition = this.getAttribute("data-position");
                        let userGender = this.getAttribute("data-gender");
                        let userContactNumber = this.getAttribute("data-contact-number");
                        let userImage = this.getAttribute("data-image");

                        document.getElementById("editUserId").value = userId;
                        document.getElementById("editName").value = userName;
                        document.getElementById("editEmail").value = userEmail;
                        document.getElementById("editDepartment").value = userDepartment;
                        document.getElementById("editPosition").value = userPosition;
                        document.getElementById("editGender").value = userGender;
                        document.getElementById("editContactNumber").value = userContactNumber;
                        
                        document.getElementById("editEmployeeForm").action = `/admin/users/update/${userId}`;

                    });
                });
            });

            document.addEventListener("DOMContentLoaded", function () {
                let deleteUserId = null;

                document.querySelectorAll(".delete-btn").forEach(function (button) {
                    button.addEventListener("click", function (event) {
                        event.preventDefault(); // Prevent direct navigation

                        deleteUserId = this.getAttribute("data-user-id");
                        let userName = this.getAttribute("data-user-name");

                        // Update modal content
                        document.getElementById("deleteUserText").innerHTML =
                            `Are you sure you want to delete <strong>${userName}</strong>? This action cannot be undone.`;

                        // Update the delete confirmation link
                        document.getElementById("confirmDeleteUser").setAttribute(
                            "href",
                            `{{ route('admin/users/delete', ['id' => '__USER_ID__']) }}`.replace("__USER_ID__", deleteUserId)
                        );

                        // Show the modal
                        let deleteUserModal = new bootstrap.Modal(document.getElementById("deleteUserModal"));
                        deleteUserModal.show();
                    });
                });
            });
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
        const searchInput = document.getElementById("searchInput");
        const cards = document.querySelectorAll(".cardL");

        searchInput.addEventListener("keyup", function () {
            const searchTerm = searchInput.value.toLowerCase();

            cards.forEach(card => {
                const userName = card.querySelector(".user-name").textContent.toLowerCase();
                card.style.display = userName.includes(searchTerm) ? "grid" : "none";
            });
        });
    });



        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



        <!-- Edit Employee Modal -->
        <div class="modal fade " id="editEmployeeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form id="editEmployeeForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="editUserId" name="user_id">
                            <div class="mb-3 input-groupedit">
                                <label for="editName" class="input-label">Name</label>
                                <input type="text" id="editName" name="name" class=" edit-input" placeholder="Name">
                            </div>

                            <div class="mb-3 input-groupedit">
                                <label for="editName" class="input-label">Head</label>
                                <input type="text" id="editEmail" name="email" class=" edit-input" placeholder="Email">
                            </div>
                            <div class="mb-3 input-groupedit">
                                <label for="editName" class="input-label">Department</label>
                                <input type="text" id="editDepartment" name="department" class=" edit-input"
                                    placeholder="Department">
                            </div>
                            <div class="mb-3 input-groupedit">
                                <label for="editName" class="input-label">Position</label>
                                <input type="text" id="editPosition" name="position" class="edit-input"
                                    placeholder="Position">
                            </div>
                            <div class="mb-3 input-groupedit">
                                <label for="editName" class="input-label">Gender</label>
                                <select name="gender" id="editGender" class="edit-input">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3 input-groupedit">
                                <label for="editContactNumber" class="input-label">Contact #</label>
                                <input
                                    type="text"
                                    id="editContactNumber"
                                    name="contact_number"
                                    class="edit-input"
                                    placeholder="Contact Number"
                                    maxlength="9"
                                    pattern="\d{9}"
                                    inputmode="numeric"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 9)">
                            </div>

                            <div class="mb-3 input-groupedit">
                                <label for="editImage" class="input-label">Profile Image</label>
                                <input type="file" name="image" id="editImage" class="edit-input">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="button-container">
                                <button type="submit" class="update-button">Update</button>
                                <button type="button" class="cancel-button" data-bs-dismiss="modal">Cancel</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Deletion</h5>
                    </div>
                    <div class="modal-body">
                        <p id="deleteUserText"></p>
                    </div>
                    <div class="button-container">
                        <a href="#" class="delete-button" id="confirmDeleteUser">Yes, Delete</a>
                        <button type="button" class="cancell-button" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Employee Off-Canvas Modal -->
        <div class="offcanvas offcanvas-end @if ($errors->any() || session()->has('error')) show @endif" tabindex="-1"
            id="addEmployeeModal" aria-labelledby="addEmployeeLabel" data-bs-backdrop="static">
            <div class="offcanvas-header">
                <button type="button" class="back-add" data-bs-dismiss="offcanvas">
                    <img src="{{ asset('images/back_arrow.png') }}" class="img-add" alt="Back Arrow" />
                    Back
                </button>
            </div>
            <h5 class="offcanvas-title" id="addEmployeeLabel">Add Employee</h5>
            <div class="offcanvas-body">

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('admin/users/save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 input-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Name" required
                            autofocus autocomplete="name" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4 input-group">
                        <label>Department</label>
                        <select name="department" value="{{ old('department') }}" required autocomplete="department">
                            <option value="" disabled selected>Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->dept_name }}">{{ $department->dept_name }}</option>
                            @endforeach
                        </select>
                        @error('department')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-4 input-group">
                        <label>Position</label>
                        <input type="text" name="position" value="{{ old('position') }}" placeholder="Enter Position"
                            required autocomplete="position" />
                        @error('position')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4 input-group">
                        <label>Gender</label>
                        <select name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
                            <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-4 input-container">
                        <label for="contact_number" class="contact-label">Contact Number</label>
                        <div class="input-groupp custom-input-wrapper" onclick="document.getElementById('contact_number').focus()">
                            <span class="input-prefix">+639</span>
                            <input type="text" name="contact_number" id="contact_number"
                                value="{{ old('contact_number') }}"
                                placeholder="Enter 9-digit number"
                                maxlength="9"
                                pattern="\d{9}"
                                required
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 9)">
                        </div>
                        @error('contact_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mb-4 input-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter Email" required
                            autocomplete="username" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4 input-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter Password" required
                            autocomplete="new-password" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4 input-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                            autocomplete="new-password" />
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="submit-btn">Add Now</button>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                @if ($errors->any() || session()->has('error'))
                    var addEmployeeModal = new bootstrap.Offcanvas(document.getElementById('addEmployeeModal'));
                    addEmployeeModal.show();
                @endif
});


        </script>


</x-app-layout>