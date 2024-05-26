<x-app-layout>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="mt-6 text-xl font-bold flex mx-auto justify-center">Manage Products</div>

        <div class='mt-4 flex justify-end'>
            <a href="{{ route('products.create.step.one') }}"
                class=" flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Create Product
            </a>
        </div>

        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <div class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">#</th>
                        <th scope="col" class="px-6 py-3">Product Name</th>
                        <th scope="col" class="px-6 py-3">Product Description</th>
                        <th scope="col" class="px-6 py-3">Stock</th>
                        <th scope="col" class="px-6 py-3">Amount</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$product->id}}</th>
                        <td class="px-6 py-4">{{$product->name}}</td>
                        <td class="px-6 py-4">{{$product->description}}</td>
                        <td class="px-6 py-4">{{$product->stock}}</td>
                        <td class="px-6 py-4">{{$product->amount}}</td>
                        <td class="px-6 py-4">{{$product->status ? 'Active' : 'DeActive'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>
