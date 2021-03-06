<x-layout>
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <x-button class="bg-gray-400 hover:bg-gray-500" onClick="$modals.show('join')">Join</x-button>
        </div>
    </div>

    <x-modal>
        <x-slot name="title">
            <h1>Join</h1>
        </x-slot>


        <x-slot name="body">
            <p>Here are some details about our plans.</p>
        </x-slot>

        <x-slot name="footer">
            <x-button @click="show = false">Close</x-button>
        </x-slot>

    </x-modal>
    
    <script>
        window.$modals = {
            show(name) {
                alert(
                    'show the modal named' +  name
                )
            }
        }
    </script>
</x-layout>