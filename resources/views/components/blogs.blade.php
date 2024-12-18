<div class="max-w-sm rounded overflow-hidden shadow-lg  hover:shadow-xl" data-aos="{{ $fadeAnimation }}">
    <img class="object-fill h-48 w-96 transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-110"
        src="{{ $imageUrl }}" alt="Sunset in the mountains" />
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $title }}</div>
        <p class="text-gray-700 text-base">
        {{$message}}
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>

    </div>
</div>