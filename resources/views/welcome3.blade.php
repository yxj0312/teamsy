<x-layout>
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <x-button class="bg-gray-400 hover:bg-gray-500" onClick="$modals.show('join-modal')">Join</x-button>
            <x-button class="bg-gray-400 hover:bg-gray-500" onClick="$modals.show('contact-modal')">Contact</x-button>
        </div>
    </div>

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


     <x-modal name="contact-modal">
        <x-slot name="title">
            <h1 class="text-lg font-bold">Contact</h1>
        </x-slot>


        <x-slot name="body">
            <p>Here are some details about our plans.</p>
        </x-slot>

        <x-slot name="footer">
            <x-button class="bg-blue-500 hover:bg-blue-600" @click="show = false">Close</x-button>
        </x-slot>

    </x-modal>
    
    <script>
        window.$modals = {
            show(name) {
                window.dispatchEvent(
                    new CustomEvent('modal', {
                        detail: name
                }))
            }
        }
    </script>
</x-layout>