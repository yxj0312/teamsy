<div {{ $attributes }} 
    x-data="{ show: @entangle($attributes->wire('model')) }" 
    x-show="show" 
    @keydown.escape.window="show = false"
>
    <div class="fixed inset-0 bg-gray-900 opacity-90" @click="show = false">
        <div class="bg-white shadow-md p-4 h-48 m-auto max-w-sm mx-auto rounded-md fixed inset-0">
            <div class="flex flex-col h-full justify-between">
                <header>
                    <h3 class="font-bold text-lg">
                        {{ $title }}
                    </h3>
                </header>

                <main class="mb-4">
                    {{ $body }}
                </main>

                <footer>
                    {{ $footer }}
                </footer>
            </div>
        </div>
    </div>
</div>
