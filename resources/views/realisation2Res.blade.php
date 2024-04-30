@include('layouts.navigation')


@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class=" flex justify-center my-32">
   
    <form action="{{route('EmeilSend')}}" method="post">
      @csrf
        <table class=" divide-y divide-gray-200 w-[900px] ">
            <thead class="bg-gray-100">
                <tr>

                    <th scope="col"
                        class=" px-6 mx-16 py-6 text-left text-2xl  font-medium text-gray-500 uppercase tracking-wider">
                        Mle
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-2xl  font-medium text-gray-500 uppercase tracking-wider">
                        Nome
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-2xl  font-medium text-gray-500 uppercase tracking-wider">
                        Prenom
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-2xl  font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">


                  @if ($checkedData)
                 
                  <input type="hidden" name="email" value="{{ json_encode($checkedData) }}">

                 
                    @foreach ($checkedData as $check)
                        <tr>
                            <td class="px-6 py-6 whitespace-nowrap text-[20px]">{{ $check['Mle'] }}</td>
                            <td class="px-6 py-6 whitespace-nowrap text-[20px]">{{ $check['nome'] }}</td>
                            <td class="px-6 py-6 whitespace-nowrap text-[20px]">{{ $check['prenom'] }}</td>
                            <td class="px-6 py-6 whitespace-nowrap text-[20px]">{{ $check['email'] }}</td>
                            
                    @endforeach

               
                   

                @endif
            </tbody>


        </table>
        <div class=" flex  justify-around mt-12 border">
             <label for="emailDate" class=" font-bold pl-2 text-[20px]"> enter the time <span class=""> ==></span></label>
            <input type="text" name="emailDate" id="" class=" rounded-sm  max-h-8 ">
           
        </div>

        <div class=" flex justify-end mt-32">
            <button type="submit" class=" border p-2  bg-blue-500 hover:bg-blue-700 font-bold px-5 rounded-md  mr-16">
                click to send INV</button>
        </div>
    </form>

</div>

@include('components.footer')
