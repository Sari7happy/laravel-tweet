<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ一覧
        </h2>
     
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    ↓こちらから↓<br>
                    <a href="{{route('tweets.create')}}" class="text-pink-500">新規登録</a><br>
                    <form method="get" action="{{route('tweets.index')}}"><br>
                        <input type="text" name="search" placeholder="検索">
                        <button class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">検索する</button>
                    </form>

                    <img src="{{ asset($image->path) }}">

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-col text-center w-full mb-20">

                                <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                    <table class="table-auto w-full text-left whitespace-no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-3 title-font tracking-wider font-medium text-green-900 text-sm bg-green-100">ID</th>
                                                <th class="px-4 py-3 title-font tracking-wider font-medium text-green-900 text-sm bg-green-100">氏名</th>
                                                <th class="px-4 py-3 title-font tracking-wider font-medium text-green-900 text-sm bg-green-100">件名</th>
                                                <th class="px-4 py-3 title-font tracking-wider font-medium text-green-900 text-sm bg-green-100">登録日</th>
                                                <th class="px-4 py-3 title-font tracking-wider font-medium text-green-900 text-sm bg-green-100">詳細</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tweets as $tweet)
                                            <tr>
                                                <td class="border-t-2 border-gray-200 px-4 py-3">{{$tweet->id}}</td>
                                                <td class="border-t-2 border-gray-200 py-3">{{$tweet->name}}</td>
                                                <td class="border-t-2 border-gray-200 px-4 py-3">{{$tweet->title}}</td>
                                                <td class="border-t-2 border-gray-200 px-4 py-3">{{$tweet->created_at}}</td>
                                                <td class="border-t-2 border-gray-200  py-3"><a class="text-orange-500" href="{{route('tweets.show',['id'=>$tweet->id])}}">詳細</a></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{$tweets->links('vendor.pagination.tailwind')}}
                            </div>
                        </div>

                    </section>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>