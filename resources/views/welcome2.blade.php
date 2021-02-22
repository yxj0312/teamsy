<x-layout>
<h1>
    Here we go
</h1>

<p>
    <a href="#user-delete-modal"></a>
</p>

<!-- Modal -->
<x-confirmation-modal>
    <x-slot name="title">
        Are You Sure?
    </x-slot>

    <x-slot name="body">
        Continuing will delete your account permanently.
    </x-slot>

    <x-slot name="footer">
        <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>
        <x-button class="bg-blue-400 hover:bg-blue-500">Continue</x-button>
    </x-slot>
</x-confirmation-modal>
</x-layout>