<x-layout>
    <p class="mb-6">
        Would you like to delete your account?
    </p>

    @livewire('delete-user')

    <!-- Modal -->
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
</x-layout>