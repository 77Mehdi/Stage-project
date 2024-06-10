<div class=" flex  text-center">
    <p>
        La compétence de développement, dans un sens plus large au-delà de la programmation, fait
        référence aux compétences, connaissances et capacités collectives requises pour concevoir,
        planifier, exécuter et gérer avec succès des projets ou des initiatives visant à réaliser la
        croissance, le progrès ou l'amélioration au sein d'une organisation ou d'un domaine
        spécifique. .
    </p>
</div>

@if (Auth::user()->is_admin === 1)
    <div class="my-20 flex justify-around ">
        <div class="text-center">


            <a href="/expresion"
                class="inline-flex items-center justify-center p-5 text-base font-medium text-gray-500 rounded-lg bg-gray-50 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                <img src="/img/7471685.png" class="w-5 h-5 " alt="">
                <span class="w-full">Expression des besoins</span>
                <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>

            {{-- <a href="/expresion" class="text-blue-500 hover:text-blue-700">Expression des besoins</a> --}}
        </div>
        <div class="text-center">
            <a href="/collecte"
                class="inline-flex items-center justify-center p-5 text-base font-medium text-gray-500 rounded-lg bg-gray-50 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                <img src="/img/7471685.png" class="w-5 h-5 " alt="">
                <span class="w-full">Collecte des Expressions des besoins</span>
                <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
            {{-- <a href="/collecte" class="text-blue-500 hover:text-blue-700">Collecte des Expressions des besoins</a> --}}
        </div>


        <div class=" text-center ">
            <a href="/realisation"
                class="inline-flex items-center justify-center p-5 text-base font-medium text-gray-500 rounded-lg bg-gray-50 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                <img src="/img/7471685.png" class="w-5 h-5 " alt="">
                <span class="w-full">Realisation</span>
                <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>

            {{-- <a href="/realisation" class="text-blue-500 hover:text-blue-700">Realisation</a> --}}
        </div>
    </div>
@else
    <div class="my-20 flex justify-around ">
        <div class="text-center">


            <a href="/expresion"
                class="inline-flex items-center justify-center p-5 text-base font-medium text-gray-500 rounded-lg bg-gray-50 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                <img src="/img/7471685.png" class="w-5 h-5 " alt="">
                <span class="w-full">Expression des besoins</span>
                <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
@endif
