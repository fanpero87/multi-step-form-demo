<x-app-layout>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="mt-6 text-xl font-bold flex mx-auto justify-center">Step Three: Review Details</div>

        <form action="{{ route('products.create.step.three.post') }}" method="POST">
            @csrf
            <div
                class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-400 px-6 py-3">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-medium text-gray-900 dark:text-white">Product
                        Name</label>
                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-light text-gray-900 dark:text-white">{{$product->name}}</label>

                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-medium text-gray-900 dark:text-white">Product
                        Amount</label>
                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-light text-gray-900 dark:text-white">{{$product->amount}}</label>

                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-medium text-gray-900 dark:text-white">Product
                        Status</label>
                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-light text-gray-900 dark:text-white">{{$product->status
                        ?
                        'Active' :
                        'DeActive'}}</label>

                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-medium text-gray-900 dark:text-white">Product
                        Description</label>
                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-light text-gray-900 dark:text-white">{{$product->description}}</label>

                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-medium text-gray-900 dark:text-white">Product
                        Stock</label>
                    <label for="description"
                        class="block mb-2 mx-auto text-sm font-light text-gray-900 dark:text-white">{{$product->stock}}</label>
                </div>
            </div>

            <div class="mt-2 flex justify-between items-center">
                <div
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:red-blue-600 dark:hover:red-blue-700 dark:focus:ring-blue-800">
                    <a href="{{ route('products.create.step.two') }}">Previous</a>
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
