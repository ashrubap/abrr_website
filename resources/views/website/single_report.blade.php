@extends('website/layout.master')
@section('content')
    <div class="mx-5">
        <div class="breadcrumb px-2 mb-4 py-2 ">
            <x-breadcrumb />
        </div>
        <div class="w-full flex mx-auto bg-white overflow-hidden  h-52  shadow-lg pb-4  ">
            <div class="shrink-0 ">
                <img class="h-48  object-cover w-80 max-tablet:w-24 rounded-md"
                    src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="Modern building architecture">
            </div>
            <div class="p-8 cursor-pointer">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Company retreats</div>
                <a href="{{ url('reports/report-url') }}"
                    class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible
                    accommodation for your team</a>
                <p class="mt-2 text-slate-500">Looking to take your team away on a retreat to enjoy awesome food and
                    take in
                    some sunshine? We have a list of places to do just that.</p>

            </div>
            <div class=" w-72  justify-between text-center ">
                <button
                    class="border-2 rounded-md  font-semibold  border-blue-500 hover:shadow-lg hover:bg-blue-700 hover:text-white w-full py-2 my-2  ">Buy
                    New</button>
                <button
                    class="border-2 rounded-md font-semibold  border-blue-500 hover:shadow-lg hover:bg-blue-700 hover:text-white w-full py-2 my-2">Download
                    Sample</button>
            </div>
        </div>
        {{-- deport desc --}}
        <div class="flex flex-wrap my-3">
            {{-- center div --}}
            <div class="w-4/5">
                <div class="flex justify-center w-full">
                    <ul class="flex justify-center gap-5 ">
                        <li class="border shadow-sm hover:shadow-lg hover:bg-blue-600 hover:text-white px-4 py-1">Descriotion</li>
                        <li class="border shadow-sm hover:shadow-lg hover:bg-blue-600 hover:text-white px-4 py-1">TOC</li>
                        <li class="border shadow-sm hover:shadow-lg hover:bg-blue-600 hover:text-white px-4 py-1">Methodology</li>
                        <li class="border shadow-sm hover:shadow-lg hover:bg-blue-600 hover:text-white px-4 py-1">Segmentation</li>
                        <li class="border shadow-sm hover:shadow-lg hover:bg-blue-600 hover:text-white px-4 py-1">Sample PDF</li>
                    </ul>
                </div>


            </div>

            {{-- right side div --}}
            <div class="w-1/5">
                <div class="sticky">
                    <div class="card rounded-md shadow-md border-2  h-fit  flex flex-col-reverse gap-5 px-5 py-3">
                        <button
                            class="py-1 text-md font-semibold border-2 border-blue-400 hover:bg-blue-800 hover:text-white rounded-md hover:shadow-md">Buy
                            New </button>
                        <button
                            class="py-1 text-md font-semibold border-2 border-blue-400 hover:bg-blue-800 hover:text-white rounded-md hover:shadow-md">
                            Request Sample </button>
                        <button
                            class="py-1 text-md font-semibold border-2 border-blue-400 hover:bg-blue-800 hover:text-white rounded-md hover:shadow-md">
                            Ask For Customization </button>
                        <button
                            class="py-1 text-md font-semibold border-2 border-blue-400 hover:bg-blue-800 hover:text-white rounded-md hover:shadow-md">
                            Get a Quote </button>
                    </div>

                    <div class="card rounded-md shadow-md border-2  h-fit  px-5 py-3 mt-5 justify-between ">
                        <h2 class="text-lg font-semibold">
                            Multi-report Purchase Plan
                        </h2>

                        <p> A Customized Plan Will be Created Based on the number of reports you wish to purchase </p>
                        <a href="#">
                            <button type="button"
                                class="text-md w-full m-2 py-1 font-semibold border-2 border-blue-400 hover:bg-blue-800 hover:text-white rounded-md hover:shadow-md">Inquire
                            </button>
                        </a>

                    </div>
                </div>

            </div>

        </div>

        {{-- releted reports --}}
        <div>
            <h3 class=" text-center justify-between  mt-10 py-5 text-gray-600 text-3xl max-tablet:text-2xl font-bold">
                Releted reports</h3>
        </div>
        <div class="flex justify-between gap-3 mb-16 mx-5">
            <x-releted-reports-card />
            <x-releted-reports-card />
            <x-releted-reports-card />
            <x-releted-reports-card />
            <x-releted-reports-card />

        </div>
    </div>
@endsection
