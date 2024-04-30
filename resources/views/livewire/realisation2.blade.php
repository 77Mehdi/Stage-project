
{{-- @php
     function sortArrayBySirves($array)
    {
        usort($array, function ($a, $b) {
            return strcmp($a['sirves'], $b['sirves']);
        });

        return $array;
    }

    $sortedArray = sortArrayBySirves($unqMle);
@endphp --}}
<div class=" ">
    
{{-- {{dd($sortedArray)}} --}}
    <form action="{{ route('updateReslisationName') }}" method="post">
        @csrf


        <select wire:model.live="selectThem" class="block p-2 border border-gray-300 rounded text-xs">
            <option value="" selected class="text-xs">Choose mle</option>
            @foreach ($uniqueArray as $Ex)
                <option value="{{ $Ex->id }}" class="text-xs">{{ $Ex->theme }}</option>
            @endforeach
        </select>

       
   
    

        <table>
            @if (!is_null($unqMle))

               
                    @foreach ($unqMle as $therm)
                    <tr>

                        <td class=" pr-2">

                            <input wire:model="chekeddd" type="checkbox" name="checked_columns[]"
                                value="{{ $therm }}" id="checkedid" class="ml-2">
                        </td>
                        <td class=" px-2">
                            {{ $therm['Mle'] }}
                        </td>
                        <td class="mx-5" style="">
                            {{ $therm['sirves'] }}
                        </td>

                    </tr>
    
            @endforeach
           
            


            @endif
        </table>

        



        <div class=" flex justify-end">

            <button type="submit" class=" border p-2  bg-blue-500 hover:bg-blue-700 font-bold px-5 rounded-md  mr-16">
                click</button>
        </div>
    </form>
</div>
