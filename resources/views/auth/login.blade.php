<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
       

        body, html {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #1E1E8F;
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
            background-color: #fff;
            padding-top: 40px;
            padding-bottom: 10px;
            border-radius: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-bottom: -70px;
            margin-top: 10px;
        }
        .container form{
            margin: 8%;
        }

        

        .container p {
            font-size: 16px;
            color: #444444;
            margin-bottom: 20px;
        }

        .input-group {
            position: relative;
            margin-bottom: 30px;
        }

        .input-group label {
            position: absolute;
            left: 15px;
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
            width: 100%;
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
        .remember-me {
            display: flex;
            font-size: 14px;
            
        }

        .remember-me input {
            transform: translateY(4px);
        }

        .remember-me input[type="checkbox"] {
            width: 20px;
            height: 18px;
            cursor: pointer;
            accent-color: #1E1E8F;
          
        }
        .forgot-password {
            color: #1E1E8F;
            font-size: 14px;
            text-decoration: none;
            font-weight: bolder;
            margin-top: 8px;
            
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
        .remember-forgot-container {
            display: flex;
            justify-content: space-between; /* Align left and right */
            align-items: center; /* Ensure vertical alignment */
          
        }

        .login-button {
            width: 100%;
            padding: 13px;
            background-color: #1E1E8F;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 24px;
            cursor: pointer;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            margin-top: 30px;
            
        }

        .login-button:hover {
            background-color: #2458A6;
        }


        .logo{
            margin-top: -10px;
        }
        .error{
            color: #D62828;
        }


    </style>
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container">
    <img src="{{ asset('images/logo.png') }}" width="120px" alt="Logo" class="logo" />
    <form method="POST" action="{{ route('login') }}">
    @csrf
        <!-- Email Address -->
        <x-input-error :messages="$errors->get('email')" class="mt-2 error " />
        <div class="input-group">
            <label for="email" :value="__('Email')" >Email</label>
            <input id="email" placeholder="Enter Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            
        </div>

        <!-- Password -->
        <x-input-error :messages="$errors->get('password')" class="mt-2 error" />
        <div class="mt-4 input-group">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" placeholder="Enter Password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            
        </div>
<div class="remember-forgot-container">
        <!-- Remember Me -->
        <div class="remember-me" >
            <label for="remember_me">
                <input id="remember_me" type="checkbox"  name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>

     
            @if (Route::has('password.request'))
                <a class="forgot-password" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </div>
            <x-primary-button class="login-button">
                {{ __('Log in') }}
            </x-primary-button>
            
       
    </form>
    </div>