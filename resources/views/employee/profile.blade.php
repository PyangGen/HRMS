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
    .profile-card-container {
    padding: 3rem 1rem;
    display: flex;
    justify-content: center;
    font-family: 'Poppins', sans-serif;
}

.profile-card {
    background-color: #fff;
    border-radius: 1rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    max-width: 720px;
    width: 100%;
    overflow: hidden;
}

.profile-header {
    padding: 2rem;
    border-bottom: 1px solid #eee;
}

.profile-header h1 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2d3748;
}

.profile-content {
    padding: 2rem;
}

.profile-image-section {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.profile-image {
    width: 96px;
    height: 96px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #e2e8f0;
}

.no-image {
    width: 96px;
    height: 96px;
    border-radius: 50%;
    background-color: #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #94a3b8;
    font-size: 0.875rem;
}

.profile-basic-info .user-name {
    font-weight: 600;
    font-size: 1.125rem;
    color: #1e293b;
}

.profile-basic-info .user-email {
    color: #64748b;
    font-size: 0.875rem;
}

.profile-info {
    border-top: 1px solid #e5e7eb;
    border-bottom: 1px solid #e5e7eb;
    padding: 1.5rem 0;
    display: grid;
    row-gap: 1rem;
    font-size: 0.95rem;
    color: #374151;
}

.profile-info span {
    font-weight: 500;
    color: #6b7280;
    margin-right: 0.5rem;
}

.profile-actions {
    margin-top: 1.5rem;
    display: flex;
    gap: 1rem;
}

.btn {
    display: inline-block;
    padding: 0.5rem 1.25rem;
    border-radius: 0.5rem;
    font-weight: 500;
    text-align: center;
    transition: background-color 0.3s ease;
    text-decoration: none;
}

.btn-primary {
    background-color: #2563eb;
    color: #fff;
}

.btn-primary:hover {
    background-color: #1d4ed8;
}

.btn-secondary {
    background-color: #e5e7eb;
    color: #1f2937;
}

.btn-secondary:hover {
    background-color: #d1d5db;
}
.philippine-time-card {
    text-align: center;
}

.time-display {
    font-size: 2rem;
    font-weight: bold;
    margin: 0;
}

.date-display {
    font-size: 1rem;
    color: #555;
}

</style>

<x-app-layout>
@php
    $now = \Carbon\Carbon::now('Asia/Manila');
@endphp


<div class="profile-card small">
    <div class="card-inner philippine-time-card">
        <p id="ph-time" class="time-display">--:-- --</p>
        <p id="ph-date" class="date-display">Loading date...</p>
    </div>
</div>


<div class="profile-card-container">
    <div class="profile-card">
        <div class="profile-header">
            <h1>Welcome, {{ $user->name }}</h1>
        </div>

        <div class="profile-content">
            <div class="profile-image-section">
                @if($user->image)
                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile" class="profile-image">
                @else
                    <div class="no-image">No image</div>
                @endif
                <div class="profile-basic-info">
                    <p class="user-name">{{ $user->name }}</p>
                    <p class="user-email">{{ $user->email }}</p>
                </div>
            </div>

            <div class="profile-info">
                <div><span>Department:</span> {{ $user->department }}</div>
                <div><span>Position:</span> {{ $user->position }}</div>
                <div><span>Account Created:</span> {{ $user->created_at->format('F d, Y') }}</div>
            </div>

            <div class="profile-actions">
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
                <a href="{{ route('profile.update') }}" class="btn btn-secondary">Edit Profile</a>
            </div>
        </div>
    </div>
</div>


<script>
    function updatePhilippineTime() {
        const options = {
            timeZone: 'Asia/Manila',
            hour: '2-digit',
            minute: '2-digit',
            hour12: true,
        };

        const dateOptions = {
            timeZone: 'Asia/Manila',
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
        };

        const now = new Date();

        const timeString = now.toLocaleTimeString('en-US', options);
        const dateString = now.toLocaleDateString('en-US', dateOptions);

        document.getElementById('ph-time').textContent = timeString;
        document.getElementById('ph-date').textContent = dateString;
    }

    // Update every second
    setInterval(updatePhilippineTime, 1000);
    // Initialize immediately
    updatePhilippineTime();
</script>

</x-app-layout>