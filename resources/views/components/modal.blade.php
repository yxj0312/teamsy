@props(['name'])

<div 
    id="{{ $name }}"
    x-data="{ show: false, name: '{{ $name }}' }"
    x-show="show" 
    x-on:modal.window = "
        show =($event.detail === name);
    "
    @keydown.escape.window="show = false"
    style="display:none"
>
<!-- window.dispatchEvent(new CustomEvent('modal')) -->
    <div class="fixed inset-0 bg-gray-900 opacity-90" @click="show = false">
        <div class="bg-white shadow-md h-48 m-auto max-w-sm mx-auto rounded-md fixed inset-0" x-show.transition="show">
            <div class="flex flex-col h-full justify-between">
                <header class="p-6">
                    <h3 class="font-bold text-lg">
                        {{ $title }}
                    </h3>
                </header>

                <main class="p-6 mb-4">
                    {{ $body }}
                </main>

                <footer class="flex justify-end p-6 bg-gray-200 rou">
                    {{ $footer }}
                </footer>
            </div>
        </div>
    </div>
</div>