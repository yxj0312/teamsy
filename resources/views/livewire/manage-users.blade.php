<!-- <div>
   <form id="delete-user-form">
        <p>
            <x-button class="bg-blue-400 hover:bg-blue-500" wire:click.prevent="$set('showModal', true)">Yes, Delete</x-button>
            <a href="#user-delete-modal" class="underline text-blue-500">Delete</a>
            <a href="#something-else-modal" class="underline text-blue-500 font-semibold">Delete</a>
        </p>

        <x-confirmation-modal wire:model.defer="showModal">
            <x-slot name="title">
                Are You Sure?
            </x-slot>

            <x-slot name="body">
                Continuing will delete your account permanently.
            </x-slot>

            <x-slot name="footer">
                <a href="# "class="bg-gray-400 hover:bg-gray-500 text-xs uppercase py-2 px-4 rounded-md text-white transition-all duration-200">Cancel</a>
                <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showModal', false)">Cancel</x-button>
                <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="handle">Continue</x-button>
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

                <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="handle">Continue</x-button>
            </x-slot>
        </x-confirmation-modal>
    </form>

</div> -->


<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Delete</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($users as $user)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div>
                    <div class="text-sm font-medium text-gray-900">
                      {{ $user->name }}
                    </div>
                    <div class="text-sm text-gray-500">
                      {{ $user->email }}
                    </div>
                  </div>
                </div>
              </td>
           
         
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
