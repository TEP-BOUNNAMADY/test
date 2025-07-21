@extends('project.layout')

@section('content')

    <h1 class="text-3xl font-semibold mb-10 text-center text-gray-800">{{ $title }}</h1>

    <!-- Grid container for products -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($projects as $item)
            <div class="bg-white shadow-sm rounded-lg overflow-hidden relative group">
                @if(isset($item['discount']) && $item['discount'])
                    <span class="absolute top-2 right-2 bg-red-500 text-white text-xs font-semibold px-2 py-1 rounded-full z-10">{{ $item['discount'] }}</span>
                @endif

                <div class="w-full h-50 bg-gray-200 flex items-center justify-center overflow-hidden">
                    <!-- Product image -->
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="object-cover w-full h-full transform transition-transform duration-300 group-hover:scale-105" onerror="this.onerror=null;this.src='https://placehold.co/200x250/E0E0E0/333333?text=No+Image';">
                </div>

                <!-- Product details -->
                <div class="p-4 text-center">
                    <!-- Product name as a link -->
                    <a href="#" class="text-lg text-gray-600 font-semibold hover:text-blue-600 transition-colors duration-200 block mb-1">
                        {{ $item['name'] }}
                    </a>
                    
                    <!-- Product price -->
                    <p class="text-base font-bold text-green-600">${{ number_format($item['price']) }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
