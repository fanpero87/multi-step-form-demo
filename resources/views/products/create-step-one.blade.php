<x-app-layout>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="mt-6 text-xl font-bold flex mx-auto justify-center">Step One: Basic Info</div>

        <form action="{{ route('products.create.step.one.post') }}" method="POST">
            @csrf
            <div
                class="mt-5 relative overflow-x-auto shadow-md sm:rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-400 px-6 py-3">
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                            Name</label>
                        <input type="text" id="taskTitle" name="name" value="{{ $product->name ?? '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Hats" required />
                    </div>
                    <div>
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                            Amount</label>
                        <input type="text" id="productAmount" name="amount" value="{{ $product->amount ?? '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="300" required />
                    </div>
                    <div>
                        <label for="company"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                            Description</label>
                        <textarea type="text" id="taskDescription" name="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            {{ $product->description ?? '' }}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="mt-2 flex justify-between items-center">
                <div
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:red-blue-600 dark:hover:red-blue-700 dark:focus:ring-blue-800">
                    <a href="{{ route('products.index') }}">Previous</a>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
            </div>

        </form>
    </div>
</x-app-layout>
