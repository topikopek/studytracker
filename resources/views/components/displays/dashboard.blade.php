<div class="m-auto bg-white p-4 rounded shadow-sm">
    <div class="">
        <div>
            <h1 class="text-4xl font-bold p-6 text-center">Welcome, {{ Auth::user()->username }}</h1>
        </div>
        <div class="mb-5">
            <h2 class="text-3xl font-semibold">My Books</h2>
        </div>
        <div class="mt-2 text-lg font-bold" x-data="{ open: false }">
            <div class="border-2 rounded-md p-2">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold ps-3">Basis Data</h2>
                    <span @click="open = !open" class="pr-2">open</span>
                </div>
                <div x-show="open" x-collapse>
                    <div class=" p-2 mt-1 overflow-hidden">
                        @php
                            $done = false;
                        @endphp
                        @if ($done)
                            <p class="border rounded-md p-1.5 ps-5 mt-2 flex justify-between items-center ">Modul 1
                                <span class="border px-1 rounded-md text-sm  bg-green-400">Done</span>
                            </p>
                        @else
                            <p class="border rounded-md p-1.5 ps-5 mt-2 flex justify-between items-center ">Modul 1
                                <span class="border px-1 rounded-md text-sm  hover:bg-green-400 transition">✔️</span>
                            </p>
                        @endif

                        <p class="border rounded-md p-1.5 ps-5 mt-2">Modul 2</p>
                        <p class="border rounded-md p-1.5 ps-5 mt-2">Modul 3</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-2 text-lg font-bold" x-data="{ open: false }">
            <div class="border-2 rounded-md p-2">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold ps-3">Struktur Data</h2>
                    <span @click="open = !open" class="pr-2">open</span>
                </div>
                <div x-show="open" x-collapse>
                    <div class=" p-2 mt-1 overflow-hidden">
                        <p class="border rounded-md p-1.5 ps-5 mt-2">Modul 1</p>
                        <p class="border rounded-md p-1.5 ps-5 mt-2">Modul 2</p>
                        <p class="border rounded-md p-1.5 ps-5 mt-2">Modul 3</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
