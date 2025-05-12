<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Main Content */
    html,
    body {
        overflow: hidden;
        /* Disable scrolling */
       
        /* Ensure the body and html take up full height */
    }

    .main-content {
        margin-left: 250px;
        padding-left: 65px;
        padding-right: 55px;
        width: calc(100% - 250px);
        /* Adjust width to account for margin */
        min-height: 100vh;
        background-color: #f0f0f5;
        overflow: hidden;
        /* Prevent content overflow */
    }

   

    /* Header */
    .header {
        display: flex;
        align-items: center;
      
    }

    .header h1 {
        margin-top: 5px;
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
        margin-top: -5px;
        margin-left: 10px;

    }

    .search-bar {
    position: relative;
    width: 100%;
    max-width: 500px;
    margin-top: 20px;
    margin-left: 10px;
    
}

.search-bar input[type="text"] {
    width: 100%;
    padding: 14px 50px 14px 20px;
    border: none;
    border-radius: 50px;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    color: #333;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    outline: none;
}

.search-bar button {
    position: absolute;
    right: 4px;
    top: 4px;
    bottom: 4px;
    background: #a4a4a4;
    border: none;
    padding: 0 20px;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.3s;
}

.search-bar button:hover {
    background: #1E1E8F ;
}

.search-bar button svg {
    fill: white;
}


    .cardL {
    background-color: #fff;
    border-radius: 16px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    padding: 20px 15px;
    width: 265px; /* Static width */
    height: 300px; /* Static height for uniformity */
    margin: 10px;
    display: inline-block;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    position: relative;
    vertical-align: top;
    overflow: hidden;
}

.cardL::after {
    content: '⋮';
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 18px;
    color: #999;
    cursor: pointer;
}


.cardL-header img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin-left:75px;
    border: 3px solid #eee;
    margin-top: -10px;
}

label {
    display: block;
    margin: 4px 0;
    font-size: 14px;
    color: #333;
    word-wrap: break-word;
}

.user-name {
    font-weight: 600;
    font-size: 16px;
  
}

.relative select {
    width: 100%;
    padding: 6px 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 13px;
    margin-top: 4px;
}

label {
    display: block;
    margin: 4px 0;
    font-size: 14px;
    color: #333;
    word-wrap: break-word;
}
.napo {
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center;    /* Center horizontally */
    text-align: center;
    margin: 10px 0;
}

.napo label {
    font-size: 14px;
    color: #333;
    margin: 2px 0;
}

.napo .user-name {
    font-weight: 600;
    font-size: 16px;
    color: #222;
}


.dgc {
    display: flex;
    flex-direction: column;  /* Stack vertically */
    align-items: flex-start; /* Align text to the left */
    font-size: 14px;
    color: #333;
    margin-top: 10px;
    background-color: #d3d3d3;
    border-radius: 10px;
    padding: 6px 15px;      /* Add padding for nicer look */
                  /* Space between labels */
}

.dgc label {
    text-align: left;
    width: 100%;             /* Ensure full width for text-align */
}
.email-label {
    display: flex;
    align-items: center;
    gap: 6px; /* spacing between icon and text */
    font-size: 14px;
    color: #333;
}
.email-label svg {
    flex-shrink: 0; /* keeps icon from shrinking */
}
.phone-label {
    display: flex;
    align-items: center;
    gap: 6px; /* spacing between icon and number */
    font-size: 14px;
    color: #333;
}

.phone-label img {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
}

.relative select {
    width: 100%;
    padding: 6px 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 13px;
    margin-top: 4px;
}

label {
    display: block;
    margin: 4px 0;
    font-size: 14px;
    color: #333;
    word-wrap: break-word;
}

.relative select {
    width: 100%;
    padding: 6px 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 13px;
    margin-top: 4px;
}


/* Font Awesome icons */
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');


.edit-btn,
.delete-btn {
    width: 30px;
    height: 30px;
    border-radius: 50%; /* Perfect circle */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    padding: 0; /* Remove horizontal padding to maintain circle */
    color: #fff;
    border: none;
    transition: 0.3s ease;
    cursor: pointer;
}
.edit-btn:hover {
    background-color: #148c44;
}

.delete-btn:hover {
    background-color: #8d0000;
}
/* Keep individual colors */
.edit-btn {
    background-color: #18a74f;
}

.delete-btn {
    background-color: #AF0000;
}
.action-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    margin-top: 10px;
    flex-wrap: wrap; /* ensures responsiveness on small screens */
}

/* No need for big margin here anymore */
.usertypes {
    display: flex;
    align-items: center;
}

.usertypes select {
    padding: 8px 12px;
    border-radius: 20px;
    border: 1px solid #ccc;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
}

/* Adjust this only if needed */
.btn-group {
    display: flex;
    gap: 10px;
    align-items: center;
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
        margin-left: 1015px;
        margin-top: -40px;
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
.custom-select:hover {
    background-color: #1E1E8F;
    color: white;
}
.total{
    margin-left: 10px;
}
</style>
<?php

use Illuminate\Support\Facades\Storage;
?>
<x-app-layout>
    <div class="main-content">
        <div class="dashboard-content">
        <form method="GET" action="{{ route('admin/users') }}">
    <div class="search-bar">
        <input type="text" name="search" id="searchInput" value="{{ request('search') }}" placeholder="Search...">
        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 
                1.415-1.414l-3.85-3.85zm-5.242 1.156a5 5 0 1 
                1 0-10 5 5 0 0 1 0 10z"/>
            </svg>
        </button>
    </div>
</form>

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
        @forelse($users as $user)
            <div class="cardL">
            <div class="cardL-header">
                @if($user->image && Storage::disk('public')->exists($user->image))
                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image">
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="No Image">
                @endif
            </div>  
                <div class="napo">
                <label class="user-name">{{ $user->name }}</label> <!-- Add a class to make it easy to select in JS -->
                <label class="department">{{ $user->position }}, {{ $user->department }}</label>
                </div>
                <div class="dgc">
                <label class="email-label"><img src="{{ asset('images/envelope.svg') }}"/>{{ $user->email }}</label>
                <label class="phone-label">
                    <img src="{{ asset('images/telephone.svg') }}" />
                    <span>+63{{ $user->contact_number }}</span>
                </label>

                </div>
                <div class="action-row">
                <div class="usertypes">
                    <select class="custom-select border border-gray-300 rounded px-3 py-2 userTypeChange" data-user-id="{{ $user->id }}">
                        <option value="user" {{ $user->usertype == 'user' ? 'selected' : '' }}>Employee</option>
                        <option value="admin" {{ $user->usertype == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    </div>
                <div class="btn-group">
                    <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"
                        data-id="{{ $user->id }}" 
                        data-name="{{ $user->name }}" 
                        data-email="{{ $user->email }}"
                        data-department="{{ $user->department }}" 
                        data-position="{{ $user->position }}"
                        data-gender="{{ $user->gender }}" 
                        data-contact-number="{{ $user->contact_number }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </button>

                    <a href="#" class="delete-btn" data-user-id="{{ $user->id }}" data-user-name="{{ $user->name }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                    </a>
                </div>
                </div>
            </div>
        @empty
            <p>No users found.</p>
        @endforelse
  

        <div class="total">
            <p>Total Records: <strong>{{ $total }}</strong></p>
        </div>
        <div class="pagination">
            {{ $users->appends(request()->query())->links() }}
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

    searchInput.addEventListener("input", function () {
        const searchTerm = this.value.toLowerCase();

        cards.forEach(card => {
            const name = card.querySelector(".user-name")?.textContent.toLowerCase() || "";
            const shiftInfo = card.querySelector(".department")?.textContent.toLowerCase() || "";

            // Combine all searchable fields
            const fullText = `${name} ${shiftInfo}`;

            // Show/hide based on search match
            card.style.display = fullText.includes(searchTerm) ? "grid" : "none";

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
                                
                                    <select name="department" class=" edit-input" id="editDepartment" value="{{ old('department') }}" required autocomplete="department">
                            <option value="" disabled selected>Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->dept_name }}">{{ $department->dept_name }}</option>
                            @endforeach
                        </select>
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
                            <span class="input-prefix">+63</span>
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