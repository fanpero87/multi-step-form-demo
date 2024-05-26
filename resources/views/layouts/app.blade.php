<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- TailwindCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>



<body class="px-6 dark:bg-slate-500 max-w-screen-lg min-h-screen">
    <nav class="flex w-full p-4 justify-center md:py-8">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <span
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white {{ request()->is('products/create-step-one') ? 'underline' : '' }}">
                    Step1
                </span>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white {{ request()->is('products/create-step-two')  ? 'underline' : '' }}">Step2</span>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white {{ request()->is('products/create-step-three')  ? 'underline' : '' }}">Step3</span>
                </div>
            </li>
        </ol>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <hr class="my-4 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-6" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                    href="https://flowbite.com/" class="hover:underline">Fanpero</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>
