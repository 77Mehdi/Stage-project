{{-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js" integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


<div>
    <form action="{{ route('expresion.store') }}" method="POST" class="text-center ">
        @csrf
        <div class="flex flex-row flex-nowrap ">
            <div class="flex-shrink-0 mr-1">
                <label for="Mle" class="block mb-1">Mle</label>
            
                <select wire:model.live="selectCollaborateure" name="Mle" id="searchSelect"
                    class="block p-2 border border-gray-300 rounded text-xs">
                    <option value="" selected class="text-xs">Choose mle</option>
                    @foreach ($Collaborateure as $collab)
                        <option value="{{ $collab->id }}" class="text-xs">{{ $collab->mle }}</option>
                    @endforeach
                </select>
            
                
            </div>
            
            @if (!is_null($dataCollaborateure))

                @foreach ($dataCollaborateure as $item)
                    <div class="flex-shrink-0 mr-1">
                        <label for="nom" class="block mb-1">Nom</label>
                        <input type="text" value="{{ $item->nome }}" name="nom"
                            class="block p-2 border border-gray-300 rounded  text-xs">
                    </div>
                    <div class="flex-shrink-0 mr-1">
                        <label for="prenom" class="block mb-1">Prenom</label>
                        <input type="text" value="{{ $item->prenom }}" name="prenom"
                            class="block p-2 border border-gray-300 rounded text-xs">
                    </div>
                    <div class="flex-shrink-0 mr-2">
                        <label for="service" class="block mb-1">Sirves</label>
                        <input type="text" value="{{ $item->service }}" name="service"
                            class="block p-2 border border-gray-300 rounded  text-xs">
                    </div>
                @endforeach
            @else
                <div class="flex-shrink-0 mr-1">
                    <label for="nome" class="block mb-1">Nome</label>
                    <input type="text" name="nome" class="block p-2 border border-gray-300 rounded  text-xs">
                </div>
                <div class="flex-shrink-0 mr-1">
                    <label for="prenom" class="block mb-1">Prenom</label>
                    <input type="text" name="prenom" class="block p-2 border border-gray-300 rounded text-xs">
                </div>
                <div class="flex-shrink-0 mr-2">
                    <label for="service" class="block mb-1">Sirves</label>
                    <input type="text" name="service" class="block p-2 border border-gray-300 rounded w-22 text-xs">
                </div>
            @endif

            <div class="flex-shrink-0 mr-1">
                <label for="sirves" class="block mb-1">Theme</label>
                <select wire:model.live="selectedValeu" name="theme" id="themeForm"
                    class="block p-2 border border-gray-300 rounded text-xs">
                    <option value="" selected class=" text-xs">Choose Theme</option>
                    @foreach ($theme as $thm)
                        <option value="{{ $thm->id }}" class=" text-xs">{{ $thm->theme }}</option>
                    @endforeach
                </select>


            </div>
            @if (!is_null($data))

                @foreach ($data as $item)
                    <div class="flex-shrink-0 mr-1">
                        <label for="domaine" class="block mb-1">Domaine</label>
                        <input type="text" value="{{ $item->domaine }}" name="domaine"
                            class="block p-2 border border-gray-300 rounded text-xs">
                    </div>
                    <div class="flex-shrink-0 mr-1">
                        <label for="cataloge" class="block mb-1">Cataloge</label>
                        <input type="text" value="{{ $item->cataloge }}" name="cataloge"
                            class="block p-2 border border-gray-300 rounded w-20 text-xs">
                    </div>
                    <div class="flex-shrink-0 mr-1">
                        <label for="Specifique" class="block mb-1">Spécifique</label>
                        <input type="text" value="{{ $item->Specifique }}" name="Specifique"
                            class="block p-2 border border-gray-300 rounded w-20 text-xs">
                    </div>
                @endforeach
            @else
                <div class="flex-shrink-0 mr-1">
                    <label for="domaine" class="block mb-1">Domaine</label>
                    <input type="text" name="domaine" class="block p-2 border border-gray-300 rounded text-xs">
                </div>
                <div class="flex-shrink-0 mr-1">
                    <label for="cataloge" class="block mb-1">Cataloge</label>
                    <input type="text" name="cataloge" class="block p-2 border border-gray-300 rounded w-20 text-xs">
                </div>
                <div class="flex-shrink-0 mr-1">
                    <label for="Specifique" class="block mb-1">Spécifique</label>
                    <input type="text" name="Specifique"
                        class="block p-2 border border-gray-300 rounded w-20 text-xs">
                </div>
            @endif
        </div>
        <button type="submit"
            class="ml-4 px-4 py-2 mt-4 bg-blue-500 text-white rounded hover:bg-blue-600">suivant</button>


    </form>

    <div class=" flex float-end  m-4">
        <a href="{{ route('expresions') }}" class=" hover:text-green-600  font-bold border-2  rounded-lg p-1" >Views</a>
    </div>

</div>

{{-- <script>
    $(document).ready(function(){
        $("#searchSelect").chosen();
    })
</script> --}}
