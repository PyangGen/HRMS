<style>
.save {
    width: 30%;
    padding: 5px;
    border: none;
    border-radius: 5px;
    font-size: 15px;
    color: white;
    background-color: #18a74f;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    transition: background-color 0.3s;
    
    /* Centering text horizontally and vertically */
    display: flex;
    align-items: center;
    justify-content: center;
}

</style>

<section>
    <header>
        <h2 >
            {{ __('Update Password') }}
        </h2>

        <p >
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
           
            <label for="update_password_current_password" class="font-poppins">{{ __('Current Password') }}</label>
            <x-text-input id="update_password_current_password" name="current_password" type="password"  autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label for="update_password_password" class="font-poppins">{{ __('New Password') }}</label>
            <x-text-input id="update_password_password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label for="update_password_password_confirmation" class="font-poppins">{{ __('Confirm Password') }}</label>
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"  autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div >
            <button class="save">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
