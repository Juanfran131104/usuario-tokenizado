<div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg border border-gray-700 transition transform hover:-translate-y-1 flex flex-col">
    <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
    
    <div class="p-6 flex flex-col justify-between flex-grow">
        <div>
            <h3 class="text-xl font-bold mb-2 text-red-500">{{ $product->name }}</h3>
            <p class="text-gray-400 text-sm mb-4">{{ \Illuminate\Support\Str::limit($product->description, 80) }}</p> 
        </div>
        
        <div class="flex justify-between items-center mt-4 border-t border-gray-700 pt-4">
            <span class="text-2xl font-bold text-white">{{ number_format($product->price, 2) }}€</span>
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition">Comprar</button>
        </div>
    </div>
</div>