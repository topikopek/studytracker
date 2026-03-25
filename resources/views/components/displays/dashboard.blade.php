<div class="m-auto bg-white p-4 rounded shadow-sm">
    <div class="">
        <div>
            <h1 class="text-4xl font-bold p-6 text-center">Welcome, {{ Auth::user()->username }}</h1>
        </div>
        <div class="mb-5">
            <h2 class="text-3xl font-semibold">My Books</h2>
        </div>
        @foreach ($books as $book)
            <div class="mt-2 text-lg font-bold" x-data="{
                open: localStorage.getItem('openBook' + {{ $book->id }}) == {{ $book->id }},
                toggle() {
                    this.open = !this.open;
                    if (this.open) {
                        localStorage.setItem('openBook' + {{ $book->id }}, {{ $book->id }});
                    } else {
                        localStorage.removeItem('openBook' + {{ $book->id }});
                    }
                }
            }">
                <div class="border-2 rounded-md p-2 mt-2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-bold ps-3">{{ $book->title }}</h2>
                        <span @click="toggle" class="pr-2">
                            <svg :class="open ? 'rotate-90' : ''" xmlns="http://www.w3.org/2000/svg"
                                class="transition-transform duration-200 ease-in-out" width="16" height="16"
                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </span>
                    </div>
                    <div x-show="open" x-collapse>
                        <div class=" p-2 mt-1 overflow-hidden">
                            @foreach ($book->modules as $module)
                                @if ($module->is_done == 1)
                                    <p class="border rounded-md p-1.5 ps-5 mt-2 flex justify-between items-center ">
                                        {{ $module->title }}<span
                                            class="border px-2 py-1.5 rounded-md text-sm  bg-green-400"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                                <path
                                                    d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                                            </svg></span>
                                    </p>
                                @else
                                    <p class="border rounded-md p-1.5 ps-5 mt-2 flex justify-between items-center ">
                                        {{ $module->title }}<a href="/module/{{ $module->id }}/done"
                                            class="border px-2 py-1.5 rounded-md text-sm  hover:bg-green-400 transition"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                            </svg></a>
                                    </p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
