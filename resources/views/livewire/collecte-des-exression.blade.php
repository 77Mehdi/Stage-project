<div>
    <form action="{{ route('collecte') }}" method="POST">

        <table class=" divide-y divide-gray-200">
            {{-- @foreach ($selectCheckbox as $item)
                {{ $item }}
            @endforeach --}}
            <thead class="bg-gray-100">
                <tr>
                    <th>
                        <input type="checkbox" wire:model="selectAll" name="allchcked" id="allchcked">
                    </th>
                    <th scope="col"
                        class="px-2 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Mle
                    </th>
                    <th scope="col"
                        class=" px-2 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Nome
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Prenom
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Sirves
                    </th>
                    <th scope="col"
                        class=" flex justify-center px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Theme
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Domaine
                    </th>
                    <th scope="col"
                        class="  py-1 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Ctlg
                    </th>
                    <th scope="col"
                        class=" px-2 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Spfq
                    </th>
                    <th scope="col"
                        class="  py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Days
                    </th>
                    <th scope="col"
                        class="  px-2 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        action
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @if (!is_null($Expression))
                    @foreach ($Expression as $Exp)
                        <tr>
                            <td>
                                <input wire:model="selectCheckbox.{{ $Exp->id }}" type="checkbox"
                                    name="checked_columns[]" value="{{ $Exp }}" id="checkedid" class="ml-2">
                            </td>
                            <td class="px-2 py-4 whitespace-nowrap text-[14px]">{{ $Exp['Mle'] }} </td>
                            <td class="px-2 py-4 whitespace-nowrap text-[14px]">{{ $Exp['nome'] }} </td>
                            <td class="px-3 py-4 whitespace-nowrap text-[14px]">{{ $Exp['prenom'] }}</td>
                            <td class="px-3 py-4 whitespace-nowrap text-[14px]">{{ $Exp['sirves'] }}</td>
                            <td class="px-3 py-4 whitespace-nowrap text-[14px]">{{ $Exp['theme'] }}</td>
                            <td class="px-3 py-4 whitespace-nowrap text-[14px]">{{ $Exp['domaine'] }}</td>
                            <td class=" py-2 whitespace-nowrap text-[14px] flex justify-center">{{ $Exp['cataloge'] }}
                            </td>
                            <td class="px-2 py-4 whitespace-nowrap text-[14px] ">{{ $Exp['Specifique'] }}</td>
                            <td class="px-2 py-4 whitespace-nowrap text-[14px] ">{{ $Exp['days'] }}</td>
                            <td class=" py-2 whitespace-nowrap text-[14px] ">
                                <form action="{{ route('delete', [$Exp['id']]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><img src="/img/trash-png.png" alt=""
                                            class=" w-6 h-6"></button>
                                </form>


                            </td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>
        @csrf
        @method('POST')

        <button type="submit"
            class="ml-4 px-4 py-2 mt-4 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>

    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>
    $(function() {
        $("#allchcked").click(function() {
            $('input[name="checked_columns[]"]').prop('checked', $(this).prop('checked'));
        });
    });
</script>
