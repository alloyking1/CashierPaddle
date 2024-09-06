<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Choose a data plan") }}

                    <div class="mt-4">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="shadow-md border rounded-2xl p-8 w-full">
                                <div class="flex justify-between">
                                    <h2 class="font-bold text-2xl">Basic plan</h2>
                                    <h2>$17</h2>
                                </div>
                                <h2>Features</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni blanditiis officiis aliquid eligendi nesciunt deleniti, quis omnis consequuntur nisi alias provident, obcaecati quo reiciendis beatae ratione, necessitatibus earum quia pariatur.</p>
                                <br>
                                <div class="">
                                    <x-paddle-button :checkout="$checkout" class="p-4 w-full rounded-xl bg-sky-500 text-white">
                                        Subscribe
                                    </x-paddle-button>
                                </div>
                            </div>
                            <div class="shadow-md border rounded-2xl p-8 w-full">
                                <div class="flex justify-between">
                                    <h2 class="font-bold text-2xl">Premium plan</h2>
                                    <h2>$17</h2>
                                </div>
                                <h2>Features</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni blanditiis officiis aliquid eligendi nesciunt deleniti, quis omnis consequuntur nisi alias provident, obcaecati quo reiciendis beatae ratione, necessitatibus earum quia pariatur.</p>
                                <br>
                                <div class="">
                                    <x-paddle-button :checkout="$checkout" class="p-4 w-full rounded-xl bg-sky-500 text-white">
                                        Subscribe
                                    </x-paddle-button>
                                </div>
                            </div>
                            <div class="shadow-md border rounded-2xl p-8 w-full">
                                <div class="flex justify-between">
                                    <h2 class="font-bold text-2xl">Advanced plan</h2>
                                    <h2>$17</h2>
                                </div>
                                <h2>Features</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni blanditiis officiis aliquid eligendi nesciunt deleniti, quis omnis consequuntur nisi alias provident, obcaecati quo reiciendis beatae ratione, necessitatibus earum quia pariatur.</p>
                                <br>
                                <div class="">
                                    <x-paddle-button :checkout="$checkout" class="p-4 w-full rounded-xl bg-sky-500 text-white">
                                        Subscribe
                                    </x-paddle-button>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
