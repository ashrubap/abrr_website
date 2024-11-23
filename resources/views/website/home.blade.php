    @extends('website/layout.master')
    @section('content')
        <div
            class="h-[600px] z-50   max-w-full bg-cover bg-gray-200 bg-center bg-no-repeat flex justify-center items-center  tracking-wide">
            <div class="heading text-6xl max-tablet:text-2xl font-bold container grid gap-14">
                <h1>Precise <span class="text-blue-900"> market intelligence </span>and <span
                        class="text-blue-900">advisory</span>.</h1>
                <h3>
                    <span
                        class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
                        <span class="relative text-white">25000+</span>
                    </span> reports across 100+ industry segments exhaustively covered.
                </h3>

                <div class=" justify-between text-center">
                    <div class="relative max-tablet:w-full w-1/2 inline-flex h-16 ">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search"
                            class="block  w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300  rounded-full bg-white focus:outline-none focus:border-blue-500 focus:ring-skbluey-500 focus:ring-1 sm:text-sm"
                            placeholder="Search market name, category..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-3">Search</button>
                    </div>
                </div>

            </div>
        </div>


        {{-- Our clients --}}
        <div class=" text-center justify-between py-8 ">
            <h3 class="text-3xl font-bold text py-8 text-gray-700  ">Our clients</h3>

        </div>

        {{-- Our blogs --}}
        <div class="w-full py-8 ">
            <h3 class="text-3xl font-bold text py-8 uppercase text-center justify-between text-gray-700 ">Blogs</h3>
            <div class="  flex flex-wrap gap-10 justify-center">

                <div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl">
                    <img class="object-fill h-48 w-96 transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        src="{{ url('public/images/website/blogs/blog-1.jpeg') }}" alt="Sunset in the mountains" />
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl">
                    <img class="object-fill h-48 w-96 transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        src="{{ url('public/images/website/blogs/blog-2.jpeg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl">
                    <img class="object-fill h-48 w-96 transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        src="{{ url('public/images/website/blogs/blog-3.jpeg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>


            </div>

        </div>

        {{-- letest reports --}}
        <div class="">
            <h3 class=" text-center justify-between  py-8 text-gray-700 text-3xl max-tablet:text-2xl font-bold">Letest
                reports</h3>
            <div class="flex justify-between gap-3 mb-16 mx-5">
                {{-- <x-releted-reports-card/> --}}
                <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl">
                    <img class="object-fill h-48 w-96 transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        src="{{ url('public/images/website/blogs/blog-3.jpeg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl">
                    <img class="object-fill h-48 w-96 transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110" src="{{ url('public/images/website/blogs/blog-1.jpeg') }}"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>


                <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl">
                    <img class="object-fill h-48 w-96 transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110" src="{{ url('public/images/website/blogs/blog-2.jpeg') }}"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>

            </div>
        </div>
    @endsection
