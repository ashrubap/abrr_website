@extends('website/layout.master')
@section('content')
    {{-- breade crum --}}

    <div class="mx-5">
        <div class="breadcrumb px-2 mb-4 py-2 ">
            <x-breadcrumb />
        </div>
        <div class=" grid grid-flow-row-dense grid-cols-5 gsp-5 justify-between gap-5 report_list">
            <div class=" h-screen sticky top-0 overflow-y-scroll no-scrollbar max-tablet:hidden ">
                <span class="text-lg font-medium text-center">Category</span>
                <div class="border-2 shadow-md rounded-md  ">
                    <ul class="tracking-wide text-md leading-tight font-small text-black px-1 g">

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/aerospace-defense" target="_blank">
                                Aerospace &amp; Defense</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/agriculture" target="_blank">
                                Agriculture</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/animal-nutrition" target="_blank">
                                Animal Nutrition &amp; Wellness</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/automotive" target="_blank">
                                Automotive</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/chemicals-materials"
                                target="_blank">
                                Chemicals &amp; Materials</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/consumer-goods-and-services"
                                target="_blank">
                                Consumer Goods and Services</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/energy-power" target="_blank">
                                Energy &amp; Power</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/financial-services-and-investment-intelligence"
                                target="_blank">
                                Financial Services and Investment Intelligence</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/food-beverage" target="_blank">
                                Food &amp; Beverage</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/healthcare" target="_blank">
                                Healthcare</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/home-property-improvement"
                                target="_blank">
                                Home and Property Improvement</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/hospitality-and-tourism"
                                target="_blank">
                                Hospitality and Tourism</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/logistics" target="_blank">
                                Logistics</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/manufacturing-products-and-services"
                                target="_blank">
                                Manufacturing Products and Services</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/packaging" target="_blank">
                                Packaging</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/professional-and-commercial-services"
                                target="_blank">
                                Professional and Commercial Services</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/real-estate-and-construction"
                                target="_blank">
                                Real Estate and Construction</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/retail" target="_blank">
                                Retail</a> </li>

                        <li class="my-1 px-2 py-1 hover:bg-gray-600 hover:text-white hover:rounded-md "> <a
                                href="https://www.mordorintelligence.com/market-analysis/technology-media-and-telecom"
                                target="_blank">
                                Technology, Media and Telecom</a> </li>

                    </ul>
                </div>
            </div>
            <div class="col-span-4 gap-5 max-tablet:col-span-5">
                <x-report-details-card />
                <x-report-details-card />
                <x-report-details-card />
                <x-report-details-card />
                <x-report-details-card />
            </div>
        </div>
    </div>
@endsection
