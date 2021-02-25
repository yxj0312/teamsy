<div>
   <form
        id="delete-user-form"
        x-data 
    >
        @csrf

        <p>
            <x-button class="bg-blue-400 hover:bg-blue-500">Yes, Delete</x-button>
            <!-- <a href="#user-delete-modal" class="underline text-blue-500">Delete</a> -->
            <a href="#something-else-modal" class="underline text-blue-500 font-semibold">Delete</a>
        </p>

        <!-- Modal -->
        @if ($showModal)
            <x-confirmation-modal name="user-delete-modal">
                <x-slot name="title">
                    Are You Sure?
                </x-slot>

                <x-slot name="body">
                    Continuing will delete your account permanently.
                </x-slot>

                <x-slot name="footer">
                    <a href="# "class="bg-gray-400 hover:bg-gray-500 text-xs uppercase py-2 px-4 rounded-md text-white transition-all duration-200">Cancel</a>
                    <!-- <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button> -->
                    <x-button class="bg-blue-400 hover:bg-blue-500" @click="document.querySelector('#delete-user-form').submit()">Continue</x-button>
                </x-slot>
            </x-confirmation-modal>

            <x-confirmation-modal name="something-else-modal">
                <x-slot name="title">
                    Just Checking
                </x-slot>

                <x-slot name="body">
                    I am another modal.
                </x-slot>

                <x-slot name="footer">
                    <a href="#user-delete-modal "class="bg-gray-400 hover:bg-gray-500 text-xs uppercase py-2 px-4 rounded-md text-white transition-all duration-200">Retry</a>
                    <!-- <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button> -->
                    <x-button class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
                </x-slot>
            </x-confirmation-modal>
        @endif
    </form>

</div>
