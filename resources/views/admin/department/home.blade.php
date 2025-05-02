<style>
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

        .dashboard-content{
            margin-top: 30px;
           
        }
        .header {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .header h1 {
            margin-top: 30px;
            color: #1E1E8F; /* Blue color for the text */
            font-size: 1.5em; /* Increased font size for bolder appearance */
            margin-left: 15px; /* Adds spacing to the left */
            font-family: 'Poppins', sans-serif;
            font-weight: 900; /* Maximum font weight */
            letter-spacing: -0.5px; /* Tighter letter spacing for bolder look */
            text-shadow: 0.5px 0 0 currentColor; /* Text shadow for extra boldness */
        }
        .header img{
            width: 40px;
            margin-top: 20px;
            
        }
        .add-button {
            background-color: #1E1E8F;
            color: white;
            border-radius: 10px;
            border: none;
            margin-left: 935px; /* Increased margin to move button right */
            margin-top: -50px; /* Match Filter button's margin-top */
            padding: 12px 21px;
            font-family: 'Poppins', sans-serif;
            display: flex;
            width: 205px;
            margin-bottom: 10px;
            justify-content: center; /* Horizontal alignment */
            align-items: center; /* Vertical alignment */
            text-decoration: none;
        }
/* General Reset for full width and no extra space */
body, .container {
    margin: 0;
    padding: 0;
    width: 100%;
    box-sizing: border-box;
}

    /* Card N Style */
    .cardN {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: 1fr 1fr 2fr 1fr auto auto;
        align-items: center;
        column-gap: 10px;
        width: 100.5%;
        box-sizing: border-box;
        margin: 10px 0;
        font-family: 'Poppins', sans-serif;
    }

    /* Card L Style (for profile and others) */
    .cardL {
        background-color: #ffffff;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 100.5%;
        display: grid;
        grid-template-columns: 1fr 1fr 2fr 1fr  auto auto;
        align-items: center;
        column-gap: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
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
        .cardN, .cardL {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {
        .cardN, .cardL {
            grid-template-columns: repeat(2, 1fr);
        }

        .cardL select {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .cardN, .cardL {
            grid-template-columns: 1fr;
        }
    }

/* User Actions */
.btn-group {
 
    gap: 0px;
}
.edit-btn {
  background-color: #18a74f;
  border: 0px solid #18a74f;
  border-radius: 20px;
  color: white;
  padding: 5px 30px;
  margin-top: -3px;
  margin-left: -35px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}
.delete-btn {
  background-color: #AF0000;
  border: 0px solid #AF0000;
  border-radius: 20px;
  color: white;
  padding: 5px 20px;
  margin-top: -3px;
  margin-left: 8px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}
.input-groupedit {
    margin-top: 20px;
    align-items: center; /* Align label and input vertically */
 
}
.input-groupeditn {
    align-items: center; /* Align label and input vertically */
 
}

.input-label {
    font-size: 14px;
    color: #333;
    font-weight: bold;
    white-space: nowrap; /* Prevent label from breaking */
    min-width: 100px; /* Give labels a consistent width */
    font-weight: bold; /* Bold labels for clarity */
    text-align: left; /* Align text to the left */
}

.edit-input {
    width: 100% !important; /* Ensure all inputs have the same width */
    max-width: 100% !important; /* Prevent any shrinking */
    margin-top: 5px;
    border: 2px solid #ccc !important; /* Default gray border */
    border-radius: 8px !important; /* Rounded corners */
    padding: 10px !important; /* Consistent padding */
    font-size: 14px !important; /* Maintain uniform text size */
    transition: border 0.2s ease-in-out; /* Smooth transition */
    display: block; /* Ensures it takes full width */
}

.edit-input:focus {
    border: 2px solid #1E1E8F !important; /* Apply red border on focus */
    outline: none !important; /* Remove default browser outline */
    box-shadow: none !important; /* Remove blue glow */
}
.edit-inputd {
    width: 100% !important; /* Full width */
    margin-top: 5px;
    border: 2px solid #ccc !important; /* Default gray border */
    border-radius: 8px !important; /* Rounded corners */
    padding: 10px !important; /* Adjust padding */
    font-size: 14px !important; /* Maintain uniform text size */
    transition: border 0.2s ease-in-out; /* Smooth transition */
    text-align: left; /* Align text to the left */
    height: 100px; /* Set a height for the textarea */
    line-height: normal; /* Prevent vertical centering */
    vertical-align: top; /* Align text to the top */
    resize: vertical; /* Allow resizing */
}

/* Force text to start from the top inside textarea */
.edit-inputd::placeholder {
    vertical-align: top;
}


.edit-inputd:focus {
    border: 2px solid #1E1E8F !important; /* Apply red border on focus */
    outline: none !important; /* Remove default browser outline */
    box-shadow: none !important; /* Remove blue glow */
}
.depart-form {
    margin: 40px; /* Equal margin on all sides */
    padding: 20px; /* Optional: Adds inner spacing */
    background-color: #fff; /* Optional: To make the form visually distinct */
 
}
.modal-content {
    border-radius: 20px !important; /* Smooth rounded corners */
    overflow: hidden; /* Prevents content from overflowing */
    max-width: 800px; /* Adjust this value to match your image size */
}

.button-container {
    display: flex;
    justify-content: space-between; /* Keeps the buttons aligned */
    align-items: center; /* Centers them vertically */
    gap: 10px; /* Adds space between the buttons */
    margin-top: 15px; /* Space from input fields */
    
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

.button-containerr {
    display: flex;
    justify-content: center;
    gap: 16px;
    margin-bottom: 20px;
}

.delete-button {
    padding: 10px 110px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    color: white;
    background-color: #18a74f;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration: none;
    text-align: center;
}

.delete-button:hover {
    background-color: #14813b;
}

.cancell-button {
    padding: 10px 24px;
    border: 1px solid black;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    color: black;
    background-color: white;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    transition: all 0.3s;
}

.cancell-button:hover {
    background-color: #8b0000;
    color: white;
    border: none;
}


.input-group {
    margin-left: 45px;
    margin-bottom: 30px;
    
    
    
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
    pointer-events: none; /* Prevent clicking on label */
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
    border-radius: 8px !important; /* Force border radius */
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
.offcanvas-end {
    width: 400px; /* Adjust width as needed */
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
}
.offcanvas-header {

    flex-direction: column;  /* Stack items vertically */
    align-items: flex-start; /* Align back button to the left */
    padding: 10px 15px;
    margin-left: -280px;
    margin-top: 5px;
    font-family: 'Poppins', sans-serif;
}
.offcanvas-body {
    margin-top: 20px;
    overflow-x: hidden; /* Prevents horizontal scrolling */
    overflow-y: auto; /* Allows vertical scrolling if needed */
    max-width: 100%; /* Ensures it doesn't exceed the container width */
    padding-right: 10px; /* Prevents content from touching the edge */
    padding-left: 10px; /* Prevents left overflow */
    box-sizing: border-box; /* Ensures padding is included in width calculations */
}



.offcanvas-title {
    margin-top: 20px; /* Add space between title and bottom */
    margin-left: 60px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    color: #1E1E8F;
    font-size: 1.5em; /* Increased font size for bolder appearance */

}
.back-add {
    display: flex;
    align-items: center; /* Align text and image */
    background: none;
    border: none;
    font-size: 16px;
    color: black;
    cursor: pointer;
    margin-bottom: 20px; /* Push title down */
}
.img-add {
    width: 16px;
    height: auto;
    margin-right: 5px; /* Space between icon and text */
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
.modal-header h5,
.modal-body p {
    padding-left: 25px;
}
.edit-inputdd {
    width: 100%;
    max-width: 280px;
    padding: 10px;
    border: none;
    border-radius: 5px !important; /* Force it if needed */
    font-size: 14px;
    color: #333;
    background-color: white;
    display: block;
    resize: vertical;
    outline: none;
    box-shadow: 0 0 0 2.5px #ccc; /* Subtle thick border */
    transition: box-shadow 0.3s ease;
}

.edit-inputdd:focus {
    border: 3px solid darkblue !important; /* Thicker focus border with dark blue (#00008B) */
    outline: none;
}


.edit-inputdd::placeholder {
    color: #999;
}
.total{
    margin-left: 10px;
}

</style>
<x-app-layout>
    <div class="main-content">
        <div class="dashboard-content">
            <div class="header">
                <img src="{{ asset('images/department_blue.png') }}" alt="Product Icon">
                <h1>Department List</h1>
            </div>
        </div>
        <button class="add-button" data-bs-toggle="offcanvas" data-bs-target="#addDepartmentModal">
            <img src="{{ asset('images/plus.png') }}" alt="Add Icon" style="margin-right: 8px;">
            Add Department
        </button>

                        @if (Session::has('success'))
    <div class="alert alert-success" role="alert" id="successMessage">
        {{ Session::get('success') }}
    </div>
@endif

        <div class="cardN">
            <label>Name</label>
            <label >Head</label>
            <label >Description</label>
            <label>Action</label>
        </div>
        @forelse($departments as $department)
            <div class="cardL">
                <label >{{ $department->dept_name }}</label>
                <label >{{ $department->dept_head }}</label>
                <label >{{ $department->dept_desc }}</label>
             
                <div class="btn-group">
                    <button class="edit-btn" 
                        data-bs-toggle="modal" 
                        data-bs-target="#editDepartmentModal"
                        data-id="{{ $department->id }}"
                        data-dept_name="{{ $department->dept_name }}"
                        data-dept_head="{{ $department->dept_head }}"
                        data-dept_desc="{{ $department->dept_desc }}">
                        Edit
                    </button>
                    <a href="#" class="delete-btn" data-department-id="{{ $department->id }}" data-department-name="{{ $department->dept_name }}">Delete</a>
                </div>
            </div>
        @empty
            <tr>
                <p class="text-center">Department not found</p>
            </tr>
        @endforelse
        <div class="total">
                        <p>Total Records: <strong>{{ $total }}</strong></p>
                    </div>
        <div class="pagination">
            {{ $departments->links() }}
        </div>

        
<!-- Add Department Off-Canvas Modal -->
<div class="offcanvas offcanvas-end @if ($errors->any() || session()->has('error')) show @endif" tabindex="-1" id="addDepartmentModal" aria-labelledby="addDepartmentLabel" data-bs-backdrop="static">
    <div class="offcanvas-header">
        <button type="button" class="back-add" data-bs-dismiss="offcanvas">
            <img src="{{ asset('images/back_arrow.png') }}" class="img-add" alt="Back Arrow"/>
            Back
        </button>
    </div>
    <h5 class="offcanvas-title" id="addDepartmentLabel">Add Department</h5>
    <div class="offcanvas-body">
    
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin/departments/save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="dept_name" value="{{ old('dept_name') }}" placeholder="Department Name" required autofocus autocomplete="name"/>
                @error('dept_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label>Head</label>
                <input type="text" name="dept_head" value="{{ old('dept_head') }}" placeholder="Department Head" required autocomplete="head"/>
                @error('dept_head')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label>Description</label>
                <textarea type="text" name="dept_desc" value="{{ old('dept_desc') }}" placeholder="Description" class="edit-inputdd" required autocomplete="description"></textarea>
                @error('dept_desc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="submit-btn">Add Now</button>
        </form>
    </div>
</div>
        <!-- Edit Department Modal -->
    </div>
    <div class="modal fade" id="editDepartmentModal" tabindex="-1" aria-labelledby="editDepartmentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="">
                    <form id="editDepartmentForm" method="POST" class="depart-form">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="dept_id">
                        <div class="mb-3 input-groupeditn" >
                            <label class="input-label">Department Name</label>
                            <input type="text" name="dept_name" id="dept_name" class=" edit-input" required>
                        </div>
                        <div class="mb-3 input-groupedit">
                            <label class="input-label">Department Head</label>
                            <input type="text" name="dept_head" id="dept_head" class=" edit-input" placeholder="feaf" required>
                        </div>
                        <div class="mb-3 input-groupedit">
                            <label class="input-label">Department Description</label>
                            <textarea name="dept_desc" id="dept_desc" class="edit-inputd" required></textarea>
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
<div class="modal fade" id="deleteDepartmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deletion</h5>
            </div>
            <div class="modal-body">
                <p id="deleteDepartmentText"></p>
            </div>
            <div class="button-containerr">
                <a href="#" class="delete-button" id="confirmDeleteDepartment">Yes, Delete</a>
                <button type="button" class="cancell-button" data-bs-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>


    <script>
document.addEventListener("DOMContentLoaded", function () {
    var editButtons = document.querySelectorAll(".edit-btn");
    var editModalElement = document.getElementById("editDepartmentModal");
    var editModal = new bootstrap.Modal(editModalElement);
    var editDepartmentForm = document.getElementById("editDepartmentForm");

    // Attach click event to all edit buttons
    editButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var id = this.getAttribute("data-id");
            var name = this.getAttribute("data-dept_name");
            var head = this.getAttribute("data-dept_head");
            var desc = this.getAttribute("data-dept_desc");

            document.getElementById("dept_id").value = id;
            document.getElementById("dept_name").value = name;
            document.getElementById("dept_head").value = head;
            document.getElementById("dept_desc").value = desc;

            document.getElementById("editDepartmentForm").action = "/admin/departments/update/" + id;
            
            editModal.show();
        });
    });

    // Handle form submission for updating department
    if (editDepartmentForm) {
        editDepartmentForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent default form submission

            var formData = new FormData(editDepartmentForm);
            formData.append("_method", "PUT"); // Ensure Laravel understands it's a PUT request

            var actionUrl = editDepartmentForm.action;

            fetch(actionUrl, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    editModal.hide(); // 🔴 **Close Modal**
                    document.body.classList.remove("modal-open"); // 🔴 **Remove modal-open class**
                    document.querySelectorAll(".modal-backdrop").forEach(el => el.remove()); // 🔴 **Remove backdrop**

                    showSuccessMessage(data.message); // ✅ Show success message above `.cardN`
                    
                    setTimeout(() => {
                        location.reload(); // 🔄 Reload after 1 second
                    }, 5000);
                } else {
                    alert("Error updating department. Please try again.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred while updating.");
            });
        });
    }

    // Function to show success message above .cardN
    function showSuccessMessage(message) {
        var successMessage = document.createElement("div");
        successMessage.className = "alert alert-success";
        successMessage.innerText = message;

        document.querySelector(".main-content").insertBefore(successMessage, document.querySelector(".cardN"));

        setTimeout(() => {
            successMessage.style.display = "none";
        }, 5000);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // DELETE MODAL FUNCTIONALITY
    const deleteButtons = document.querySelectorAll(".delete-btn");
    const deleteModal = new bootstrap.Modal(document.getElementById("deleteDepartmentModal"));
    const deleteUserText = document.getElementById("deleteDepartmentText");
    const confirmDeleteDepartment = document.getElementById("confirmDeleteDepartment");

    let departmentToDeleteId = null;

    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent default anchor click
            const departmentId = this.getAttribute("data-department-id");
            const departmentName = this.getAttribute("data-department-name");

            departmentToDeleteId = departmentId;
            deleteUserText.innerText = `Are you sure you want to delete the department "${departmentName}"?`;

            confirmDeleteDepartment.setAttribute("href", "#"); // reset any previous link
            deleteModal.show();
        });
    });

    confirmDeleteDepartment.addEventListener("click", function (e) {
        e.preventDefault();

        if (!departmentToDeleteId) return;

        fetch(`/admin/departments/delete/${departmentToDeleteId}`, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                "Accept": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                deleteModal.hide();
                document.body.classList.remove("modal-open");
                document.querySelectorAll(".modal-backdrop").forEach(el => el.remove());

                // Show success message
                showSuccessMessage(data.message);

                // Refresh the page after a short delay
                setTimeout(() => {
                    location.reload();
                }, 2000);
            } else {
                // Show an alert for failure
                alert("Failed to delete department: " + data.message);
            }
        })
        .catch(error => {
            // Handle only network-related or unexpected errors
            console.error("Delete Error:", error);
            alert("An error occurred while deleting the department. Please try again.");
        });
    });

    // Check for success message from the session and apply fade-out
    const successMessage = document.getElementById("successMessage");
    if (successMessage) {
        setTimeout(() => {
            successMessage.style.transition = "opacity 0.5s ease-out";  // Smooth transition for fading out
            successMessage.style.opacity = 0;  // Fade out
            setTimeout(() => {
                successMessage.remove();  // Remove after fade-out completes
            }, 500);  // Wait for fade-out to finish
        }, 5000);  // Keep visible for 5 seconds
    }
});

function showSuccessMessage(message) {
    var successMessage = document.createElement("div");
    successMessage.className = "alert alert-success";
    successMessage.innerText = message;

    // Insert the success message at the top of the content
    document.querySelector(".main-content").insertBefore(successMessage, document.querySelector(".cardN"));

    setTimeout(() => {
        successMessage.style.transition = "opacity 0.5s ease-out";  // Smooth transition for fading out
        successMessage.style.opacity = 0;  // Fade out
        setTimeout(() => {
            successMessage.remove();  // Remove the message from DOM after fading out
        }, 500);  // Wait for the fade-out to finish
    }, 5000);  // Show for 5 seconds
}




</script>


</x-app-layout>
