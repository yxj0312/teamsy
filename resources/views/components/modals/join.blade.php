<x-modal name="join-modal">
        <x-slot name="title">
            <h1 class="text-lg font-bold">Join</h1>
        </x-slot>


        <x-slot name="body">
            <p>Here are some details about our plans.</p>
        </x-slot>

        <x-slot name="footer">
            <x-button class="bg-blue-500 hover:bg-blue-600" @click="show = false">Close</x-button>
        </x-slot>

    </x-modal>