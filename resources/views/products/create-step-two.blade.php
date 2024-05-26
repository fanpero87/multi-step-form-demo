<x-app-layout>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="mt-6 text-xl font-bold flex mx-auto justify-center">Step Two: Status & Stock</div>

        <form action="{{ route('products.create.step.two.post') }}" method="POST">
            @csrf
            <div
                class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-400 px-6 py-3">
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <label for="inline-2-radio"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product
                        Status</label>
                    <div class="flex">
                        <div class="flex items-center me-4">
                            <input id="active" type="radio" value="1" name="status" {{{ (isset($product->status) &&
                            $product->status == '1') ? "checked" : "" }}}
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500
                            dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                            dark:border-gray-600">
                            <label for="inline-radio"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Active</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="deactive" type="radio" value="0" name="status" {{{ (isset($product->status) &&
                            $product->status == '0') ? "checked" : "" }}}
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500
                            dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                            dark:border-gray-600">
                            <label for="inline-2-radio"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">DeActive</label>
                        </div>
                    </div>
                    <div>
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                            Stock</label>
                        <input type="text" id="productAmount" name="stock" value="{{{ $product->stock ?? '' }}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required />
                    </div>
                </div>
            </div>

            <div class="mt-2 flex justify-between items-center">
                <div
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:red-blue-600 dark:hover:red-blue-700 dark:focus:ring-blue-800">
                    <a href="{{ route('products.create.step.one') }}">Previous</a>
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
            </div>

        </form>
    </div>
</x-app-layout>
