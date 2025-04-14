<style>
/* Section Styles */
.space-y-6 {
    margin-bottom: 2rem;
    padding: 1rem;
    background-color: #f9fafb; /* Light background for contrast */
    border-radius: 0.75rem;
    
}

/* Header Styles */
header h2 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1f2937; /* Gray 900 */
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
    
}
h2 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1f2937; /* Gray 900 */
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
    
}

header p {
    margin-top: 0.5rem;
    font-size: 0.9rem;
    text-align: justify;
    color: #6b7280; /* Gray 500 */
    
}

/* Button Styles */
.x-danger-button {
    background-color: #ef4444; /* Red 500 */
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    text-transform: uppercase;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.x-danger-button:hover {
    background-color: #dc2626; /* Red 600 */
    transform: translateY(-2px); /* Button lift effect */
}

.x-danger-button:active {
    background-color: #b91c1c; /* Darker red on click */
    transform: translateY(0); /* Reset lift effect */
}

/* Modal Styles */
.x-modal {
    background-color: white;
    padding: 2rem;
    border-radius: 0.75rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: auto;
}

.x-modal h2 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1f2937; /* Gray 900 */
}

.x-modal p {
    margin-top: 0.75rem;
    font-size: 1rem;
    color: #6b7280; /* Gray 500 */
}

/* Input Styles */
.x-text-input {
    margin-top: 0.75rem;
    display: block;
    width: 100%;
    padding: 0.75rem;
    border-radius: 0.5rem;
    border: 1px solid #d1d5db; /* Gray 300 */
    background-color: #f3f4f6; /* Light background */
    transition: border 0.3s ease;
}

.x-text-input:focus {
    border-color: #60a5fa; /* Blue 400 */
    outline: none;
    background-color: #ffffff; /* White background on focus */
}

.x-input-error {
    margin-top: 0.5rem;
    color: #ef4444; /* Red 500 */
    font-size: 0.875rem;
}

/* Button Group (Cancel and Delete Account) */
.x-secondary-button {
    background-color: #e5e7eb; /* Gray 200 */
    color: #1f2937; /* Gray 900 */
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    text-transform: uppercase;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.x-secondary-button:hover {
    background-color: #d1d5db; /* Gray 300 */
    transform: translateY(-2px); /* Lift effect */
}

.x-secondary-button:active {
    background-color: #9ca3af; /* Gray 400 */
    transform: translateY(0); /* Reset lift effect */
}

/* Spacing for the buttons */
.x-secondary-button.ms-3 {
    margin-left: 1.25rem;
}

/* Modal Close Button */
.x-secondary-button[x-on\\:click] {
    cursor: pointer;
}

/* Responsive Layout for Mobile */
@media (max-width: 1024px) {
    .x-text-input {
        width: 100%;
    }
    .space-y-6 {
        padding: 1.5rem;
    }
}
.delete{
        width: 80%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        font-size: 15px;
        color: white;
        background-color: #af0000;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: background-color 0.3s;  
}

</style>

<section class="space-y-6">
    <header>
        <h2 >
            {{ __('Delete Account') }}
        </h2>

        <p>
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button class="delete"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2>
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p >
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
