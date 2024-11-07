@extends('dashboard.layout.layoutdashboard')
{{-- @section('title', 'Home') --}}
@section('body')
    <div style="margin: 100px auto 0 auto; padding: 20px; border: 1px solid #ddd; width:90%;" class="bg-white rounded-lg">
        <h3>Add Reply For Post</h3>
        <div>
            <form action="">
                <div>
                    <label for="" class="block mb-2 text-sm font-medium text-gray-700">Add Reply For Comment</label>
                    <textarea type="text" placeholder="Add Reply For Comment"
                        class="border border-gray-300 rounded-md px-4 py-2 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded-lg"
                        style="width:50%; display: block; resize: none;"></textarea>
                    <button style="background:#1a2035; margin: 20px 0"
                        class="text-white font-semibold  rounded-lg py-2 px-4 shadow-md hover:opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        First Name
                    </button>
                    <button style="background:#1a2035; margin: 20px 0"
                        class="text-white font-semibold  rounded-lg py-2 px-4 shadow-md hover:opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Last Name
                    </button>
                    <button style="background:#1a2035; margin: 20px 0"
                        class="text-white font-semibold  rounded-lg py-2 px-4 shadow-md hover:opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Full Name
                    </button>
                </div>
                <div>
                    <label for="" class="block mb-2 text-sm font-medium text-gray-700">Add Reply For Comment</label>
                    <textarea type="text" placeholder="Add Reply For Comment"
                        class="border border-gray-300 rounded-md px-4 py-2 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 rounded-lg"
                        style="width:50%; display: block; resize: none;"></textarea>
                    <button style="background:#1a2035; margin: 20px 0"
                        class="text-white font-semibold  rounded-lg py-2 px-4 shadow-md hover:opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        First Name
                    </button>
                    <button style="background:#1a2035; margin: 20px 0"
                        class="text-white font-semibold  rounded-lg py-2 px-4 shadow-md hover:opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Last Name
                    </button>
                    <button style="background:#1a2035; margin: 20px 0"
                        class="text-white font-semibold  rounded-lg py-2 px-4 shadow-md hover:opacity-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        Full Name
                    </button>
                </div>
                <button
                    class="text-white font-semibold bg-green-500 rounded-lg py-2 px-4 shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                    Save
                </button>
                <button
                    class="text-white font-semibold bg-red-500 rounded-lg py-2 px-4 shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                    close
                </button>

            </form>
        </div>
    </div>
@endsection
