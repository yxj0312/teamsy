<div>
   <form
        id="delete-user-form"
        action="" 
        method="post" 
        x-data 
        @submit.prevent="
            
                location.hash = '#user-delete-modal'
            
        "
    >
        @csrf

        <p>
            <x-button class="bg-blue-400 hover:bg-blue-500">Yes, Delete</x-button>
            <!-- <a href="#user-delete-modal" class="underline text-blue-500">Delete</a> -->
            <a href="#something-else-modal" class="underline text-blue-500 font-semibold">Delete</a>
        </p>
    </form>
</div>
