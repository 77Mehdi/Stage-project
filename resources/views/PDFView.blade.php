@include('layouts.navigation')

@vite(['resources/css/app.css', 'resources/js/app.js'])

@if (empty($PDFdata))
    <p class="flex justify-center my-52 text-2xl uppercase font-bold">
        {{ __('no data to show in the pdf') }}
    </p>
@else
    <div class="my-12"></div>
    <div class=" flex justify-center  ">
        <div class="invoice-box border">
            <table class="w-full border-collapse">
                <tr >
                    <td colspan="2" class=" ">
                        <table class="w-full my-6">
                            <tr>
                                <td class="p-4 ">
                                    <img src="img/ospLogo.jpg" class="w-full max-w-xs" />
                                </td>
                                <td class="p-4 ">
                                    Invoice #: 123<br />
                                    Created: {{ $PDFdata[0]['created_at'] }} <br />
                                    {{ Auth::user()->name }}<br />
                                    {{ Auth::user()->email }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
              
                <tr class="bg-gray-100">
                    <td colspan="9" class="border">
                        <table class="w-full">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Mle</th>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Nome</th>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Prenom</th>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Sirves</th>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Theme</th>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Domaine</th>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Cataloge</th>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Specifique</th>
                                    <th class="p-3 text-left font-medium text-gray-500 uppercase">Days</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($PDFdata as $Exp)
                                    <tr>
                                        <td class="p-3 border">{{ $Exp['mle'] }}</td>
                                        <td class="p-3 border">{{ $Exp['nome'] }}</td>
                                        <td class="p-3 border">{{ $Exp['prenom'] }}</td>
                                        <td class="p-3 border">{{ $Exp['sirves'] }}</td>
                                        <td class="p-3 border">{{ $Exp['theme'] }}</td>
                                        <td class="p-3 border">{{ $Exp['domaine'] }}</td>
                                        <td class="p-3 border">{{ $Exp['cataloge'] }}</td>
                                        <td class="p-3 border">{{ $Exp['Specifique'] }}</td>
                                        <td class="p-3 border">{{ $Exp['days'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <div class="text-right mt-4">
                <a href="{{ route('DownlodPDF') }}"
                    class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-12">Download</a>
            </div>
        </div>
    </div>
    <div class=" my-12"></div>
@endif
