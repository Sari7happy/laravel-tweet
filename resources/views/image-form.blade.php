<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            画像アップロード
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    画像投稿<br><br>
                    <!-- <form method="POST" action="/upload" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <button class="bg-green-500 mt-4">アップロード</button>
                    </form> -->


                </div>
            </div>
        </div>
    </div>

</x-app-layout>