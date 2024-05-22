<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/js/app.js')
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="timepicker-modal" tabindex="-1" aria-hidden="true"
        class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-[23rem] max-h-full">
            <input id="date" datepicker-autohide type="text">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Moment de publication
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="timepicker-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 pt-0">
                    <div id="datepickerId" datepicker-buttons inline-datepicker datepicker-autoselect-today
                        class="mx-auto sm:mx-0 flex justify-center my-5 [&>div>div]:shadow-none [&>div>div]:bg-gray-50 [&_div>button]:bg-gray-50">
                    </div>

                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        time:</label>
                    <div class="flex w-full">
                        <input type="time" id="time"
                            class="flex-shrink-0 rounded-none rounded-s-lg bg-gray-50 border text-gray-900 leading-none focus:ring-blue-500 focus:border-blue-500 block text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            min="09:00" max="18:00" value="00:00" required>
                        <select id="timezones" name="timezone"
                            class="bg-gray-50 border border-s-0 border-gray-300 text-gray-900 text-sm rounded-e-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            <option value="-5" selected>EST - GMT-5 (New York)</option>
                            <option value="-8">PST - GMT-8 (Los Angeles)</option>
                            <option value="+0">GMT - GMT+0 (London)</option>
                            <option value="+1">CET - GMT+1 (Paris)</option>
                            <option value="+9">JST - GMT+9 (Tokyo)</option>
                            <option value="+11">AEDT - GMT+11 (Sydney)</option>
                            <option value="-7">MST - GMT-7 (Canada)</option>
                            <option value="-6">CST - GMT-6 (Canada)</option>
                            <option value="-5">EST - GMT-5 (Canada)</option>
                            <option value="+1">CET - GMT+1 (Berlin)</option>
                            <option value="+4">GST - GMT+4 (Dubai)</option>
                            <option value="+8">SGT - GMT+8 (Singapore)</option>
                        </select>
                    </div>
</body>

</html>
