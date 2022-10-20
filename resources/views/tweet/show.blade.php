<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            詳細画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font relative">
                    
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                            <div class="w-full  bg-opacity-50 rounded border focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$tweet->name}} </div>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                            <div  class="w-full  bg-opacity-50 rounded border  focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$tweet->title}}</div>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                            <div  class="w-full  bg-opacity-50 rounded border  focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$tweet->email}}</div>
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="url" class="leading-7 text-sm text-gray-600">ホームページ</label>
                                            @if($tweet->url)
                                            <div class="w-full  bg-opacity-50 rounded border  focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$tweet->url}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label  class="leading-7 text-sm text-gray-600">性別</label><br>
                                            <div class="w-full  bg-opacity-50 rounded border  focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$gender}}</div>

                                        </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                            <div class="w-full  bg-opacity-50 rounded border  focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$age}}</div>
                                        </div>
                                    </div>


                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="contact" class="leading-7 text-sm text-gray-600">問い合わせ内容</label>
                                            <div  class="w-full bg-opacity-50 rounded border focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-50 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{$tweet->contact}}</div>
                                        </div>
                                    </div>
                                    <form method="get" action="{{route('tweets.edit',['id'=>$tweet->id])}}">
                                    <div class="p-2 w-full">
                                        <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">編集する</button>
                                    </div>
                                    </form>
                                    <form class="mt-40" method="post" action="{{route('tweets.destroy',['id'=>$tweet->id])}}">
                                        @csrf
                                    <div class="p-2 w-full">
                                        <button class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">削除する</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                </div>
                </form>
                </section>

            </div>
        </div>
    </div>
    </div>

</x-app-layout>