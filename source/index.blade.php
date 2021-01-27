@extends('_layouts.master')

@section('body')


<section>
    @foreach($articles->where('title','fetaure article') as $article)

        <img src="{{ $article->img_path }}" alt="{{ $article->title }}" class="border border-gray-400 p-1">

        <p class="text-xl">
            {{ $article->main_paragraph }}
        </p>
        <p>
            {{ $article->paragraph }}
        </p>

    @endforeach
</section>

<div class="border-t-2 border-gray-200 my-16"></div>

<section>
    @foreach($articles->where('category','tent_1') as $article)
        <h2 class="font-normal">{{ $article->title }}</h2>

        <p>{{ $article->paragraph }}</p>
    @endforeach

    <div x-data="{}" class="grid grid-cols-4 gap-10">
        @foreach($sator_1 as $img)
            <div>
                <a @click="$dispatch('img-modal', {  imgModalSrc: '{{ $img->img_path }}', imgModalDesc: '{{ $img->text }}' })" class="cursor-pointer">
                    <img src="{{ $img->img_path }}" alt="{{ $img->text }}" class="border border-gray-400 p-1">
                </a>
                <p class="text-sm m-0 mt-1">{{ $img->text }}</p>
            </div>
        @endforeach
    </div>
</section>


<div class="border-t-2 border-gray-200 my-16"></div>

<section>
    @foreach($articles->where('category','tent_2') as $article)
        <h2 class="font-normal">{{ $article->title }}</h2>

        <p>{{ $article->paragraph }}</p>
    @endforeach

    <div x-data="{}" class="grid grid-cols-4 gap-10">
        @foreach($sator_2 as $img)
            <div>
                <a @click="$dispatch('img-modal', {  imgModalSrc: '{{ $img->img_path }}', imgModalDesc: '{{ $img->text }}' })" class="cursor-pointer">
                    <img src="{{ $img->img_path }}" alt="{{ $img->text }}" class="border border-gray-400 p-1">
                </a>
                <p class="text-sm m-0 mt-1">{{ $img->text }}</p>
            </div>
        @endforeach
    </div>
</section>

<div class="border-t-2 border-gray-200 my-16"></div>

<section>
    @foreach($articles->where('category','tent_3') as $article)
        <h2 class="font-normal">{{ $article->title }}</h2>

        <p>{{ $article->paragraph }}</p>
    @endforeach

    <div x-data="{}" class="grid grid-cols-4 gap-10">
        @foreach($sator_3 as $img)
            <div>
                <a  @click="$dispatch('img-modal', {  imgModalSrc: '{{ $img->img_path }}', imgModalDesc: '{{ $img->text }}' })" class="cursor-pointer">
                    <img src="{{ $img->img_path }}" alt="{{ $img->text }}" class="border border-gray-400 p-1">
                </a>
                <p class="text-sm m-0 mt-1">{{ $img->text }}</p>
            </div>
        @endforeach
    </div>
</section>

<div class="border-t-2 border-gray-200 my-16"></div>

<section>
    <h2 class="mb-10 font-normal">Tehnički podaci</h2>

    <div class="overflow-x-auto">
        <table class="table-auto border">
            <thead class="bg-black text-white">
                <tr>
                    <th class="border">Raspon</th>
                    <th colspan="2" class="border">5,0</th>
                    <th colspan="2" class="border">7,5</th>
                    <th colspan="2" class="border">10,0</th>
                    <th colspan="3" class="border">12,5</th>
                    <th colspan="3" class="border">15,0</th>
                    <th colspan="2" class="border">17,5</th>
                    <th colspan="2" class="border">20,0</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-400 px-2 bg-gray-300 text-gray-700">
                        Postranična visina
                    </td>
                    <td class="border border-gray-400 px-3 py-2">3,50</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">4,20</td>
                    <td class="border border-gray-400 px-3 py-2">3,50</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">4,20</td>
                    <td class="border border-gray-400 px-3 py-2">3,50</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">4,20</td>
                    <td class="border border-gray-400 px-3 py-2">3,50</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">4,40</td>
                    <td class="border border-gray-400 px-3 py-2">5,00</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">3,50</td>
                    <td class="border border-gray-400 px-3 py-2">4,40</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">5,00</td>
                    <td class="border border-gray-400 px-3 py-2">3,50</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">4,40</td>
                    <td class="border border-gray-400 px-3 py-2">3,50</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">4,40</td>
                </tr>
                <tr class="bg-emerald-200"> 
                    <td class="border border-gray-400 px-2 bg-gray-300 text-gray-700">
                        Najviša visina
                    </td>
                    <td class="border border-gray-400 px-3 py-2">4,15</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">4,85</td>
                    <td class="border border-gray-400 px-3 py-2">4,50</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">5,20</td>
                    <td class="border border-gray-400 px-3 py-2">4,82</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">5,52</td>
                    <td class="border border-gray-400 px-3 py-2">5,16</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">6,05</td>
                    <td class="border border-gray-400 px-3 py-2">6,56</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">5,50</td>
                    <td class="border border-gray-400 px-3 py-2">6,40</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">7,00</td>
                    <td class="border border-gray-400 px-3 py-2">5,83</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">6,72</td>
                    <td class="border border-gray-400 px-3 py-2">6,17</td>
                    <td class="border border-gray-400 px-3 py-2 bg-gray-300">7,06</td>
                </tr>
            </tbody>
        </table>
    </div>

    <img class="w-full object-cover my-10" src="/assets/img/cover/tents-industrial.jpg" alt="">

    <div class="flex">
        <ul class="list-decimal list-inside m-0 mr-10 md:mr-40">
            <li class="mb-5">Prednja stranica od PVC cerade</li>
            <li class="mb-5">Pokrov od PVC cerade</li>
            <li class="mb-5">Stranica od trapeznog lima</li>
            <li class="mb-5">Stranica od izolacijskih panel ploča</li>
            <li class="mb-5">Stranica od PVC cerade</li>
        </ul>

        <ul class="list-decimal list-inside m-0">
            <li class="mb-5">Unutarnja protukondenzacijska cerada</li>
            <li class="mb-5">Vrata od PVC cerade, opcija: klizna, rolo ...</li>
            <li class="mb-5">Konstrukcija od alu profila</li>
            <li class="mb-5">Vruće pocinčani vezni čelični elementi</li>
            <li class="mb-5">Vruće pocinčane čelične bazne stope</li>
        </ul>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-6">
        <table class="table-auto mb-1 sm:mb-0">
            <tbody>
                <tr>
                    <td class="border border-gray-400 bg-gray-300 pl-2">Dužina:</td>
                    <td class="border border-gray-400 pl-2">neograničena, u segmentima po 2.50 m, 3.00 m</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 bg-gray-300 pl-2">Nosivost snijega:</td>
                    <td class="border border-gray-400 pl-2">od 75 kg/m2 do 125 kg/m2 </td>
                </tr>
                <tr>
                    <td class="border border-gray-400 bg-gray-300 pl-2">Konstrukcija:</td>
                    <td class="border border-gray-400 pl-2">hladno izvučeni strukturni aluminij europskih proizvođača</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 bg-gray-300 pl-2">Vezni elementi:</td>
                    <td class="border border-gray-400 pl-2">vruće pocinčani čelični elementi</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 bg-gray-300 pl-2">Dozvole:</td>
                    <td class="border border-gray-400 pl-2">pojednostavljeni postupci</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 bg-gray-300 pl-2">Isporuka:</td>
                    <td class="border border-gray-400 pl-2">od 2 do 4 tjedna, za velike narudžbe do 5 tjedna</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 bg-gray-300 pl-2">Montaža:</td>
                    <td class="border border-gray-400 pl-2">od 1 do 2 dana, za velike objekte do 3 tjedna </td>
                </tr>
            </tbody>
        </table>

        <img src="/assets/img/cover/tents-industrial.jpg" alt="">
    </div>

</section>

<div class="border-t-2 border-gray-200 my-10"></div>

<section>
    <h2 class="font-normal mb-10">Oprema</h2>

    <div x-data="{}" class="grid grid-cols-4 gap-8">
        @foreach($oprema as $o)

        <div>
            <a  @click="$dispatch('img-modal', {  imgModalSrc: '{{ $o->img_path }}', imgModalDesc: '{{ $o->text }}' })" class="cursor-pointer">
                <img src="{{ $o->img_path }}" alt="{{ $o->text }}" class="border border-gray-400 p-1">
            </a>
            <p class="text-sm m-0 mt-1">{{ $o->text }}</p>
        </div>

        @endforeach
    </div>
</section>

<div class="border-t-2 border-gray-200 my-16"></div>

<section>
    <h2 class="font-normal mb-10">Primeri upotrebe</h2>

    <div class="grid grid-cols-4 gap-8">
        @foreach($primer_upotrebe as $upotreba)

        <div x-data='{}'>
            <a  @click="$dispatch('img-modal', {  imgModalSrc: '{{ $upotreba->img_path }}', imgModalDesc: '{{ $upotreba->text }}' })" class="cursor-pointer">
                <img src="{{ $upotreba->img_path }}" alt="{{ $upotreba->text }}" class="border border-gray-400 p-1">
            </a>
            <p class="text-sm m-0 mt-1">{{ $upotreba->text }}</p>
        </div>

        @endforeach
    </div>
</section>

<div class="border-t-2 border-gray-200 my-10"></div>

<section>

    <h2 class="bg-gray-200 text-yellow-600  text-4xl font-normal p-2 text-center rounded mt-10">
        Obratite se našem stručnom timu za najbolju ponudu.
    </h2>

    <div class=" my-10">
        <h3 class="text-normal text-center">Pošaljite upit</h3>
        <p class="text-justify text-xl italic">
            Za izradu najbolje ponude s optimalnim rješenjima, u skladu s vašim željama i zahtjevima, ljubazno Vas molimo da nam pošaljete što potpunije podatake. U slučaju, da trebamo dodatne informacije, kontaktirati ćemo Vas povratno.
        </p>
    </div>

    <div class="flex flex-col sm:flex-row">
        <div class="sm:w-2/3 mb-10 sm:mb-0">
            <form action="">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="">Vaše ime *</label>
                        <input type="text" name="" class="block w-full p-2 border border-gray-400 rounded-md text-sm" >
                    </div>
                    <div>
                        <label for="">Naziv tvrtke</label>
                        <input type="text" name="" class="block w-full p-2 border border-gray-400 rounded-md text-sm" >
                    </div>
                    <div>
                        <label for="">Vaša email adresa *</label>
                        <input type="text" name="" class="block w-full p-2 border border-gray-400 rounded-md text-sm">
                    </div>
                    <div>
                        <label for="">Telefon *</label>
                        <input type="text" name="" class="block w-full p-2 border border-gray-400 rounded-md text-sm">
                    </div>
                </div>
                <div class="mt-6">
                    <label for="">Poruka * </label>
                    <textarea name="" class="block w-full p-2 border border-gray-400 rounded-md text-sm" cols="30" rows="10"></textarea>
                </div>
                <div x-data="{ open: false }">
    
                    <div @click="open = !open" class="flex items-center justify-between bg-gray-300 text-yellow-600 border-l-4 border-yellow-600 p-2 my-6">
                        <span>Popunite obrazac za kupnju ili najam šatora i hala.</span>
                        <svg x-show="open === false" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <svg x-show="open === true" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
    
                    <div class="text-sm" x-show="open === true">
                        <div class="mt-6">
                            <label for="" >Zanima Vas</label>
                            <div class="flex mt-1">
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">kupnja</span>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">najam</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="">Priredbeni šator</label>
                            <div class="flex mt-1">
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">priredbeni</span>
                                </div>
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">sajamski </span>
                                </div>
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">pagoda / paviljon</span>
                                </div>
                                <div class="flex">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">ugostiteljski paviljon</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="">Industrijski šatori</label>
                            <div class="flex mt-1">
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">PVC/PVC (Tip 1)</span>
                                </div>
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">PVC/Lim (Tip 2)</span>
                                </div>
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">PVC/Panel (Tip 3) </span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="">Brzomontažne hale</label>
                            <div class="flex mt-1">
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">Panelne ploče (Tip 4)</span>
                                </div>
                                <div class="flex mr-2">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">Lim (Tip 5)</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="">Dimenzije</label>
                            <input type="text" name="" class="block w-full p-2 border border-gray-400 rounded-md text-sm">
                        </div>
                        <div class="mt-6">
                            <label for="">Namjena</label>
                            <input type="text" name="" class="block w-full p-2 border border-gray-400 rounded-md text-sm">
                        </div>
                        <div class="mt-6">
                            <label for="">Podloga</label>
                            <div class="flex mt-1">
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">asfalt</span>
                                </div>
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">	beton</span>
                                </div>
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">	pijesak</span>
                                </div>
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">trava</span>
                                </div>
                                <div class="flex mr-3">
                                    <input type="checkbox" name="" >
                                    <span class="ml-1">ostalo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <button type="submit" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-600">Pošalji</button>
                </div>

            </form>
        </div>
        <div class="sm:w-1/3 sm:ml-10">

            <h5>Kontakt</h5>

            <div class="flex items-center">
                <span>
                    <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                <span class="text-sm ml-2">Mišeluk III/10, Sremska kamenica</span>
            </div>
            <div class="flex items-center">
                <span>
                    <svg class="h-4" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </span>
                <span class="text-sm ml-2">+381 63/80-21-902</span>
            </div>
            <div class="flex items-center">
                <span>
                    <svg class="h-4" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </span>
                <span class="text-sm ml-2">+381 65/80-21-902</span>
            </div>

            <div class="border-t-2 border-gray-200 my-5"></div>

            <h5>Radno vrijeme</h5>

            <div class="flex items-center">
                <span>
                    <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span class="text-sm ml-3">Pon - Pet: 08:00h - 16:00h</span>
            </div>
            <div class="flex items-center">
                <span>
                    <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span class="text-sm ml-3">Pon - Pet: 08:00h - 16:00h</span>
            </div>
            <div class="flex items-center">
                <span>
                    <svg class="h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span class="text-sm ml-3">Pon - Pet: 08:00h - 16:00h</span>
            </div>
        </div>
    </div>

</section>

<!-- image modal -->
<div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
    <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
        <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
        <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
            <div class="z-50">
            <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
                </svg>
            </button>
            </div>
            <div class="p-2">
            <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
            <p x-text="imgModalDesc" class="text-center text-white"></p>
            </div>
        </div>
        </div>
    </template>
</div>
      
@stop
