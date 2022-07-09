@php   use \App\Http\Controllers\CategoriesController; @endphp
<div class="max-w-screen-xl p-5 mx-auto text-gray-100">
        <div class="grid justify-items-center">
            @forelse ($produits as $produit)
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="front flex items-center justify-center flex-col">
                                <span class="ribbon cr cr-top cr-right cr-sticky cr-blue">{{ (int) $produit->prix }}
                                    €</span>
                                <img class="icon h-[248px] w-auto" src="{{ $produit->image }}">
                                <div class="flex items-center justify-center p-2 flex-row">
                                    @if ($produit->note)
                                        @for ($i = 0; $i < round($produit->note); $i++)
                                            <i class="px-1 text-yellow-500 fa-solid fa-star"></i>
                                        @endfor
                                    @else
                                        <i class="text-gray-200 fa-regular fa-star"></i>
                                    @endif
                                </div>
                                <p class="mt-4 text-xl text-gray-200">{{ $produit->titre }}</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="back">
                                <div class="flex flex-col items-center content-center pt-6">
                                    <p class="mt-2 text-xl">{{ $produit->titre }}</p>
                                    <img class="w-auto h-20 pb-4 icon" src="{{ $produit->image }}">
                                    <span class="px-6 bg-blue-800">{{ (int) $produit->prix }} €</span>
                                    <span class="p-2 clamp">{{ $produit->description }}</span>

                                    <form @auth action="/addtocart/{{ $produit->id }}" method="post"
                                        onsubmit="myButton.disabled = true; return true;" @else
                                            onclick="document.getElementById('primaryButton').click()"
                                        onsubmit="return false" @endauth
                                        class="px-2 py-2 mt-4 mb-3 transition-colors duration-150 rounded w-36 bg-emerald-500 hover:bg-emerald-300 hover:text-gray-800">
                                        @csrf
                                        <input type="hidden" name="quantite" value="1">
                                        <button name="myButton" type="submit">Ajouter au panier</button>
                                    </form>

                                    <a href="/card/{{ $produit->id }}"
                                        class="transition-colors duration-150 bg-blue-600 rounded w-36 hover:bg-blue-400 hover:text-gray-800">Plus
                                        d'info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="mt-4">
                    <div class="front">
                        <i class="pt-20 fa-solid fa-ban fa-6x"></i>
                        <h2 class="pt-4 text-xl ">Aucun produit trouvé</h2>
                    </div>
                </div>

            @endforelse
        </div>
    </div>
