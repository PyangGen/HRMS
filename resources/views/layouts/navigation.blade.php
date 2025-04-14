
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<style>


.sidebar {
    width: 16rem;
    height: 100vh;
    background-color: white;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    padding: 1.5rem 1rem;
    /* border-bottom-right-radius: 30px;
    border-top-right-radius: 30px; */
    box-shadow: 5px 0 10px rgba(0, 0, 0, 0.1);
    align-items: center; /* Center content horizontally */
}

.logo {
    width: 130px;
    margin: 0 auto 20px;
}

.nav-links {
    justify-content: center; /* Center text and icon */
    flex-direction: column;
    width: 100%; /* Ensures full width */
  
}

.nav-item {
    display: flex;
    align-items: center;
    justify-content: center; /* Center text and icon */
    gap: 10px; /* Spacing between icon and text */
    background-color: transparent;
    color: black;
    padding: 12px 18px;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: normal;
    text-decoration: none;
    width: 90%;
    margin: 10px auto;
    font-family: 'Poppins', sans-serif;
    height: 50px;
    border: none;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    text-align: center;
    position: relative;
}

/* New wrapper to keep text and image centered */
.nav-contentb {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    margin-right: 15px;
    gap: 10px;
}
.nav-contentu {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    margin-right: 20px;
    gap: 10px;
}
.nav-contentd {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    gap: 10px;
}
.nav-contenta {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    margin-right: 10px;
    gap: 10px;
}
.nav-contents {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    margin-right: 20px;
    gap: 10px;
}
.nav-contentp {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    margin-right: 40px;
    gap: 10px;
}
.nav-contentr {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    margin-right: 35px;
    gap: 10px;
}


/* Container to keep images stacked */
.nav-icon-container {
    width: 24px; /* Adjust based on your icon size */
    height: 24px;
    position: relative;
}

/* Both images must be in the same position */
.nav-icon {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

/* Hide the white image by default */
.nav-icon.white {
    display: none;
}

/* Active state */
.nav-item.active {
    background-color: #1E1E8F !important;
    color: white !important;
    font-weight: bold !important;
}

/* Show the white icon and hide the black one when active */
.nav-item.active .nav-icon.white {
    display: block;
}

.nav-item.active .nav-icon.black {
    display: none;
}

/* Remove unwanted focus outline and shadows */
.nav-item:focus,
.nav-item:active {
    outline: none !important;
    box-shadow: none !important;
}


.logout-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.logout-btn {
    display: flex;
    align-items: center;
    gap: 8px; /* Space between icon and text */
    background-color: #1E1E8F; /* Matches the blue color in the image */
    color: white;
    border: none;
    border-radius: 10px;
    padding: 10px 40px;
    font-size: 16px;
    font-weight: normal;
    cursor: pointer;
    transition: background 0.3s ease;
    margin-top: 230px;
}

.logout-btn:hover {
    background-color: #8b0000; /* Slightly darker blue on hover */
}

.logout-btnn {
    display: flex;
    align-items: center;
    gap: 8px; /* Space between icon and text */
    background-color: #1E1E8F; /* Matches the blue color in the image */
    color: white;
    border: none;
    border-radius: 10px;
    padding: 10px 40px;
    font-size: 16px;
    font-weight: normal;
    cursor: pointer;
    transition: background 0.3s ease;
    margin-top: 410px;
}

.logout-btnn:hover {
    background-color: #8b0000; /* Slightly darker blue on hover */
}

.logout-icon {
    width: 18px; /* Adjust based on the image size */
    height: auto;
}
.sett{
    background-color: #D62828;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Get all navigation items
    let navItems = document.querySelectorAll(".nav-item");

    // Check if any nav-item is already active
    let hasActive = Array.from(navItems).some(item => item.classList.contains("active"));

    // If none is active, set the first one (Dashboard) as active
    if (!hasActive && navItems.length > 0) {
        navItems[0].classList.add("active");
    }
});
</script>


<nav x-data="{ open: false }" class="border:none ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    @if (Auth::user()->usertype == 'admin')
                        <a href="{{ route('admin.dashboard') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    @endif
                </div>

                <!-- Navigation Links -->
          
<aside class="sidebar">
   
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo" />
    <nav class="nav-links">
        @if(Auth::user()->usertype == 'admin')
            <x-nav-link :href="route('dashboard')" class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <div class="nav-contentb">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/dashboard_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/dashboard_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Dashboard') }}</span>
                </div>
    </x-nav-link>




        <x-nav-link :href="route('admin/users')" :active="request()->routeIs('admin/users')" class="nav-item {{ request()->routeIs('admin/users') ? 'active' : '' }}">
        <div class="nav-contentu">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/user_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/user_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Employee') }}</span>
                </div>
        </x-nav-link>

        <x-nav-link :href="route('admin/departments')" :active="request()->routeIs('admin/departments')" class="nav-item {{ request()->routeIs('admin/departments') ? 'active' : '' }}">
        <div class="nav-contentd">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/department_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/department_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Department') }}</span>
                </div>
        </x-nav-link>

        <x-nav-link :href="route('admin/attendances')" :active="request()->routeIs('admin/attendances')" class="nav-item {{ request()->routeIs('admin/attendances') ? 'active' : '' }}">
        <div class="nav-contenta">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/attendance_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/attendance_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Attendance') }}</span>
                </div>
        </x-nav-link>

        <x-nav-link :href="route('admin/schedules')" :active="request()->routeIs('admin/schedules')" class="nav-item {{ request()->routeIs('admin/schedules') ? 'active' : '' }}">
        <div class="nav-contents">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/schedule_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/schedule_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Schedule') }}</span>
                </div>
        </x-nav-link>

        <x-nav-link :href="route('admin/payrolls')" :active="request()->routeIs('admin/payrolls')" class="nav-item {{ request()->routeIs('admin/payrolls') ? 'active' : '' }}">
        <div class="nav-contentp">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/payroll_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/payroll_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Payroll') }}</span>
                </div>
        </x-nav-link>
        <x-nav-link :href="route('admin.leave.view-all-leave-requests')" :active="request()->routeIs('admin.leave.view-all-leave-requests')" class="nav-item {{ request()->routeIs('admin.leave.view-all-leave-requests') ? 'active' : '' }}">
        <div class="nav-contentr">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/leave_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/leave_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Request') }}</span>
                </div>
        </x-nav-link>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
            @csrf
            <button type="submit" class="logout-btn">
                <img src="{{ asset('images/logout.png') }}" alt="Logout Icon" class="logout-icon">
                Log Out
            </button>
        </form>

        @else
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-item {{ request()->routeIs('dashbboard') ? 'active' : '' }}">
            <div class="nav-contentb">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/dashboard_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/dashboard_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Dashboard') }}</span>
                </div>
            </x-nav-link>
            <x-nav-link :href="route('employee/profile')" :active="request()->routeIs('employee/profile')" class="nav-item {{ request()->routeIs('employee/profile') ? 'active' : '' }}">
                {{ __('Profile') }}
            </x-nav-link>

                <x-nav-link :href="route('attendance.index')" :active="request()->routeIs('attendance.index')" class="nav-item {{ request()->routeIs('attendance.index') ? 'active' : '' }}">
                <div class="nav-contentb">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/attendance_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/attendance_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Attendance') }}</span>
                </div>
                </x-nav-link>
               

            <x-nav-link :href="route('leave.create')" :active="request()->routeIs('leave.create')" class="nav-item {{ request()->routeIs('leave.create') ? 'active' : '' }}">
            <div class="nav-contentr">
                    <div class="nav-icon-container">
                        <img src="{{ asset('images/leave_blue.png') }}" class="nav-icon black" />
                        <img src="{{ asset('images/leave_white.png') }}" class="nav-icon white" />
                    </div>
                    <span>{{ __('Request') }}</span>
                </div>
            </x-nav-link>
            <!-- <x-nav-link :href="route('leave.index')" :active="request()->routeIs('leave.index')" class="nav-item {{ request()->routeIs('leave.index') ? 'active' : '' }}">
                {{ __('View Leave Request') }}
            </x-nav-link> -->
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
            @csrf
            <button type="submit" class="logout-btnn">
                <img src="{{ asset('images/logout.png') }}" alt="Logout Icon" class="logout-icon">
                Log Out
            </button>
        </form>
        @endif
       
    </nav>
</aside>

            </div>

           <!--  <div class="hidden sm:flex sm:items-center sm:ms-6 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border  border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                       
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div> -->

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 ">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

               <!--  <x-nav-link :href="route('attendance.index')" :active="request()->routeIs('attendance.index')" class="nav-iteml">
                {{ __('Attendance') }}
                </x-nav-link> -->

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
