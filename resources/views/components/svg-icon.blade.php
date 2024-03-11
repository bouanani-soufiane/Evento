@props(['name'])

@if ($name === 'down-arrow')
    <svg {{ $attributes(['class' => 'h-5 w-5 inline-block']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
@elseif($name === 'left-arrow')
    <div class="p-1 rounded-full bg-gray-200 w-fit">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
        </svg>
    </div>
@elseif($name === 'search')
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
    </svg>
@elseif($name === 'delete')
    <div
        class="w-10 h-10  flex items-center justify-center rounded-full hover:bg-red-600 transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
        </svg>

    </div>
@elseif($name === 'edit')
    <div
        class="rounded-full  flex items-center justify-center rounded-full hover:bg-green-600 transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
        </svg>

    </div>

@elseif($name === 'dashboard')
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
         class="w-5 h-5 text-inherit">
        <path
            d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
        </path>
        <path
            d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
        </path>
    </svg>

@elseif($name === "close")
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
    </svg>
@elseif($name === "add")
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>

@elseif($name === "more-details")
    <span
        class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-blye-500 group-hover:translate-x-0 ease">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </span>
@elseif($name === "user-remove")
    <span
        class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gradient-to-tl from-red-500 to-pink-500">
               <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h4M4 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1c0 .6-.4 1-1 1H5a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
          </svg>
</span>
@elseif($name === "user-deblock")
    <span
        class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gray-500">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
        </svg>

</span>
@elseif($name === "delete-forever")
    <span
        class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>


</span>
@elseif($name === "block")
    <span
        class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gradient-to-tl from-red-500 to-pink-500">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636"/>
         </svg>
</span>
@elseif($name === "restrict")
    <span
        class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gradient-to-tl from-red-500 to-pink-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="w-6 h-6"  stroke="currentColor" viewBox="0 0 32 32"><g data-name="no image"><path d="M24 2H8a6 6 0 0 0-6 6v16a6 6 0 0 0 6 6h3a1 1 0 0 0 0-2H8a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4h-9a1 1 0 0 0 0 2h9a6 6 0 0 0 6-6V8a6 6 0 0 0-6-6z"/><path d="M25.71 6.29a1 1 0 0 0-1.42 0l-18 18a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l18-18a1 1 0 0 0 0-1.42z"/></g></svg>
</span>
@elseif($name === "allow")
    <span
            class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gradient-to-tl from-red-500 to-pink-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="w-6 h-6"  stroke="currentColor" viewBox="0 0 32 32"><g data-name="no image"><path d="M24 2H8a6 6 0 0 0-6 6v16a6 6 0 0 0 6 6h3a1 1 0 0 0 0-2H8a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4h-9a1 1 0 0 0 0 2h9a6 6 0 0 0 6-6V8a6 6 0 0 0-6-6z"/><path d="M25.71 6.29a1 1 0 0 0-1.42 0l-18 18a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l18-18a1 1 0 0 0 0-1.42z"/></g></svg>
</span>
@elseif($name === "giveReservation")
    <span
            class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-green-700">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>
</span>
@elseif($name === "restoreUser")
    <span
            class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-green-700">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
          </svg>

</span>
@elseif($name === "validate")

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
    </svg>

@endif
