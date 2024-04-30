@include('layouts.navigation')


@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class=" my-12">
    <form action="" method="POST" class="flex justify-center">
        @csrf

        <table class=" divide-y divide-gray-200 ">
            <thead class="bg-gray-100">
                <tr>

                    <th scope="col"
                        class=" px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Theme
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Domaine
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Days
                    </th>
                    <th scope="col"
                        class=" px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        Effectif inscrit
                    </th>
                    <th scope="col"
                        class="  px-3 py-3 text-left text-1xl  font-medium text-gray-500 uppercase tracking-wider">
                        J H F
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

             
              {{-- {{dd($ResoltData)}} --}}
            @foreach ( $ResoltData as $data )
                 <tr>
                    <td class="px-3 py-4 whitespace-nowrap text-[14px]">{{$data['theme']}}</td>
                    <td class="px-3 py-4 whitespace-nowrap text-[14px]">{{$data['domain']}}</td>
                    <td class="px-3 py-4 whitespace-nowrap text-[14px]">{{$data['days']}}</td>
                    <td class="px-3 py-4 whitespace-nowrap text-[14px] flex justify-center">{{$data['count']}}</td>
                    <td class="px-3 py-4 whitespace-nowrap text-[14px] ">{{$data['jht']}}</td>

                </tr>
            @endforeach
               
  

            </tbody>


        </table>


    </form>
</div>


@include('components.footer')
