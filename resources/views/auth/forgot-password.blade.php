<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        
        body, html {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            flex-direction: column;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-image: url('images/bg.png');
        }
        .container {
            width: 500px;
            height: 300px;
            background-color: #fff;
            padding: 40px 20px 10px; /* Adds left & right padding */
            border-radius: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 10px auto -70px; /* Center horizontally */
        }

        .t {
            font-size: 16px;
            color: #444444;
            margin-bottom: 20px;
            margin-left: auto;  /* Ensure auto spacing */
            margin-right: auto; /* Ensure auto spacing */
            max-width: 90%; /* Keep text inside container */
            text-align: justify; /* Optional: Makes text more readable */
        }

        .input-group {
            position: relative;
            margin-bottom: 30px;
        }

        .input-group label {
            position: absolute;
            left: 45px;
            top: -10px; /* Keep label above */
            font-size: 14px;
            color: #b0b0b0; /* Default label color */
            font-weight: bolder;
            background-color: white;
            padding: 0 5px;
            transition: color 0.3s ease-in-out; /* Smooth transition for color */
        }

        /* FIX: Change label color when input is focused */
        .input-group:focus-within label {
            color: #1E1E8F; /* Change label color on input focus */
        }

        .input-group input {
            width: 90%;
            padding: 18px 15px;
            border: 3px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            transition: border-color 0.3s, color 0.3s;
        }

        .input-group input::placeholder {
            color: #999;
            font-family: 'Poppins', sans-serif;
        }

        .input-group input:focus {
            border-color: #1E1E8F;
            outline: none;
        }
        .email-button {
            width: 60%;
            padding: 10px;
            background-color: #1E1E8F;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 20px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            margin-top: 10px;
            
        }

        .email-button:hover {
            background-color: #2458A6;
        }
        .error{
            color: #D62828;
        }
        .success{
            color: green;
        }

    </style>
    
    
    <div class="container">
    <div class="t">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-10 success" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="input-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input placeholder="Enter Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 error" />
        </div>

        <div >
            <x-primary-button class="email-button">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
    </div>
