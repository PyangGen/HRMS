<x-app-layout>

    <style>
        body {
            background-color: #f0f0f5;
        }

        .card-container {
            display: flex;
            justify-content: flex-end; /* Align cards to the right */
            align-items: flex-start;
            gap: 1.5rem;
            padding: 3rem 2rem;
            font-family: 'Poppins', sans-serif;
            flex-wrap: wrap;
        }

        .profile-card {
            background: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            flex: 1 1 30%;
            max-width: 30%;
            min-width: 280px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 570px; /* Ensures a minimum height */
            height: 100%;
        }

        .profile-card.small {
            flex: 1 1 20%;
            max-width: 20%;
            min-width: 220px;
        }

        .card-inner {
            width: 100%;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: space-between; /* Ensures content fills the height */
        }

        /* To ensure profile cards have equal height */
        .card-container {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        /* Media Query for smaller screens */
        @media (max-width: 1024px) {
            .card-container {
                justify-content: center;
                flex-direction: column;
                gap: 1.5rem;
                padding: 2rem 1rem;
            }

            .profile-card,
            .profile-card.small {
                max-width: 100%;
                flex: 1 1 100%;
            }
        }
    </style>

    <div class="card-container">
        <div class="profile-card">
            <div class="card-inner">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="profile-card">
            <div class="card-inner">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="profile-card small">
            <div class="card-inner">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
