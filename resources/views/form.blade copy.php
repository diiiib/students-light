<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Select2 JS Autocomplete Search Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</head>
<body>
<div class="container">
         

                      <div class="mt-1 mb-4">
                        <div class="relative max-w-xs">
                            <form action="{{ route('users.search') }}" method="GET">
                                <label for="search" class="sr-only">
                                    Search
                                </label>
                                <input type="text" name="s"
                                    class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Search..." />
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                    
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($studensts as $studenst)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$studenst->nom}}
                                    </th>
                                    <td class="px-6 py-4">
                                    {{$studenst->lastname}}

                                    </td>
                                    <td class="px-6 py-4">
                                    {{$studenst->naissance}}

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $studensts->links() }}
                    </div>
                            </form>
                        </div>

                    </div>
                    

                </div>
            </div>
        </div>
    </div>>
     
</body>
</html>