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
            <div class="w-1/5">01</div>
            {{-- center div --}}
            <div class="w-3/5">

          

            </div>

            {{-- right side div --}}
            <div class="w-1/5">
                <div class="card rounded-md shadow-md border-2  h-fit bg-blue-50">
                    <div class="mt-4 space-y-2">

                        <label for="google"
                            class="flex w-full justify-between text-center text-slate-700 has-[:checked]:ring-indigo-200 has-[:checked]:text-indigo-800 has-[:checked]:bg-indigo-50 items-center gap-6 rounded-lg p-4 ring-1 ring-transparent hover:bg-slate-100">

                            Single License
                            <input name="payment_method" id="google" value="apple" type="radio"
                                class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] border-white bg-white bg-clip-padding outline-none ring-1 ring-gray-950/10 checked:border-indigo-500 checked:ring-indigo-500">

                        </label>

                        <label for="credit-card"
                            class="flex w-full justify-between text-center text-slate-700 has-[:checked]:ring-indigo-200 has-[:checked]:text-indigo-800 has-[:checked]:bg-indigo-50 items-center gap-6 rounded-lg p-4 ring-1 ring-transparent hover:bg-slate-100">

                            Team License
                            <input name="payment_method" id="credit-card" value="credit-card" type="radio"
                                class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] border-white bg-white bg-clip-padding outline-none ring-1 ring-gray-950/10 checked:border-indigo-500 checked:ring-indigo-500">
                        </label>

                        <label for="corporate"
                            class="flex w-full justify-between text-center text-slate-700 has-[:checked]:ring-indigo-200 has-[:checked]:text-indigo-800 has-[:checked]:bg-indigo-50 items-center gap-6 rounded-lg p-4 ring-1 ring-transparent hover:bg-slate-100">

                            Enterprise/Corporate License
                            <input name="payment_method" id="corporate" value="credit-card" type="radio"
                                class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] border-white bg-white bg-clip-padding outline-none ring-1 ring-gray-950/10 checked:border-indigo-500 checked:ring-indigo-500">
                        </label>
                        <label for="platform"
                            class="flex w-full justify-between text-center text-slate-700 has-[:checked]:ring-indigo-200 has-[:checked]:text-indigo-800 has-[:checked]:bg-indigo-50 items-center gap-6 rounded-lg p-4 ring-1 ring-transparent hover:bg-slate-100">

                            Platform Access
                            <input name="payment_method" id="platform" value="credit-card" type="radio"
                                class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] border-white bg-white bg-clip-padding outline-none ring-1 ring-gray-950/10 checked:border-indigo-500 checked:ring-indigo-500">
                        </label>
                    </div>
                </div>
            </div>

        </div>

        {{-- releted reports --}}
        <div>
            <h3 class=" text-center justify-between  mt-10 py-5 text-gray-600 text-3xl max-tablet:text-2xl font-bold">Releted reports</h3>
        </div>
        <div class="flex justify-between gap-3 mb-16 mx-5">
            <x-releted-reports-card/>
            <x-releted-reports-card/>
            <x-releted-reports-card/>
            <x-releted-reports-card/>
            <x-releted-reports-card/>

        </div>
    </div>
@endsection
