<div class="w-full px-4 rounded-lg">
    <!-- mobile menu -->

    <ul id="menu"
        class="hidden fixed top-0 right-0 px-10 py-16 bg-gray-800 z-50 md:z-0
        md:relative md:flex md:p-0 md:bg-transparent md:flex-row md:space-x-6">

        <li class="md:hidden z-10 fixed top-4 right-6">
            <a href="javascript:void(0)" class="text-right text-white text-4xl" onclick="toggleMenu()">&times;</a>
        </li>

        <li>
            <form action="{{ route('searchfilter') }}" method="get">

                <input type="text" name="q" placeholder="Recherche..." id="place-holder-center"
                    class="mx-2  w-[188px] my-2 btnmenu h-[43.99px] py-3 px-2 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500"
                    value="{{ request()->q ?? '' }}">


                <select name="categories"
                    class="mx-2  w-[188px] my-2 appearance-none btnmenu h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500">
                    <option value="" class="text-center">Catégories </option>

                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id_cat }}" class="text-center">{{ $categorie->label }}
                        </option>
                    @endforeach
                </select>

                <select name="note"
                    class="mx-2  w-[188px] my-2 appearance-none btnmenu  h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500">
                    <option value="" class="text-center">Notes</option>
                    <option value="1" class="text-center text-yellow-500">★</option>
                    <option value="2" class="text-center text-yellow-500">★★</option>
                    <option value="3" class="text-center text-yellow-500">★★★</option>
                    <option value="4" class="text-center text-yellow-500">★★★★</option>
                    <option value="5" class="text-center text-yellow-500">★★★★★</option>
                </select>

                <select name="prix"
                    class="mx-2  w-[188px] my-2 appearance-none btnmenu h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 ">
                    <option value="" class="text-center">Prix</option>
                    <option value="10" class="text-center">
                        - 10€</option> 10€
                    </option>
                    <option value="20" class="text-center">
                        - 20€</option>
                    <option value="30" class="text-center">
                        - 30€</option>
                    <option value="40" class="text-center">
                        - 40€</option>
                    <option value="50" class="text-center">
                        - 50€</option>
                    <option value="" class="text-center">Toutes</option>
                </select>

                <button
                    class="mx-2  w-[188px] my-2 h-[43.99px] text-sm text-center  text-gray-100 rounded-md btnmenu bg-violet-600 hover:bg-violet-400 focus:outline-none focus:bg-violet-500"><a
                        href="/">Effacer les filtres</a>
                </button>
                <button
                    class="mx-2  w-[188px] my-2 btnmenu h-[43.99px] text-sm text-center text-gray-100 transition-colors duration-200 bg-emerald-500 hover:bg-emerald-300 focus:outline-none focus:bg-emerald-500 rounded-md ">valider</button>




            </form>
        </li>
    </ul>

    <!-- This is used to open the menu on mobile devices -->
    <div class="flex items-center md:hidden">
        <button class="text-white text-4xl font-bold opacity-70 hover:opacity-100 duration-300" onclick="toggleMenu()">
            &#9776;
        </button>
        <script>
            var menu = document.getElementById('menu');

            function toggleMenu() {
                menu.classList.toggle('hidden');
                menu.classList.toggle('w-full');
                menu.classList.toggle('h-screen');
            }
        </script>
        {{-- <div class="flex flex-col md:flex-row">

        <form action="{{ route('searchfilter') }}" method="get">

            <input type="text" name="q" placeholder="Recherche..." id="place-holder-center"
                class="mx-2  w-[188px] my-2 btnmenu h-[43.99px] py-3 px-2 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500"
                value="{{ request()->q ?? '' }}">
      
            <select name="categories"
                class="mx-2  w-[188px] my-2 appearance-none btnmenu h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500">
                <option value="" class="text-center">Catégories </option>

                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id_cat }}" class="text-center">{{ $categorie->label }}</option>
                @endforeach
            </select>

            <select name="note"
                class="mx-2  w-[188px] my-2 appearance-none btnmenu  h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500">
                <option value="" class="text-center">Notes</option>
                <option value="1" class="text-center text-yellow-500">★</option>
                <option value="2" class="text-center text-yellow-500">★★</option>
                <option value="3" class="text-center text-yellow-500">★★★</option>
                <option value="4" class="text-center text-yellow-500">★★★★</option>
                <option value="5" class="text-center text-yellow-500">★★★★★</option>
            </select>

            <select name="prix"
                class="mx-2  w-[188px] my-2 appearance-none btnmenu h-[43.99px] py-3 text-sm text-white bg-gray-600 border-transparent rounded-md focus:border-gray-500 ">
                <option value="" class="text-center">Prix</option>
                <option value="10" class="text-center">
                    < 10€</option> 10€
                </option>
                <option value="20" class="text-center">
                    - 20€</option>
                <option value="30" class="text-center">
                    - 30€</option>
                <option value="40" class="text-center">
                    - 40€</option>
                <option value="50" class="text-center">
                    - 50€</option>
                <option value="" class="text-center">Toutes</option>
            </select>
            <button class="mx-2  w-[188px] my-2 btnmenu h-[43.99px] text-sm text-center text-gray-100 transition-colors duration-200 bg-emerald-500 hover:bg-emerald-300 focus:outline-none focus:bg-emerald-500 rounded-md ">valider</button>
            <button class="mx-2  w-[188px] my-2 h-[43.99px] text-sm text-center  text-gray-100 rounded-md btnmenu bg-violet-600 hover:bg-violet-400 focus:outline-none focus:bg-violet-500"><a href="/">Effacer les filtres</a>
            </button>



        </form>

    </div> --}}
    </div>
