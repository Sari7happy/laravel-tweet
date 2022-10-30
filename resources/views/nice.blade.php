<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            画像アップロード😆
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    画像投稿<br><br>
                    <span>
                        <img src="{{asset('img/nicebutton.png')}}" width="30px">

                        <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
                        @if($nice)
                        <!-- 「いいね」取消用ボタンを表示 -->
                        <a href="{{ route('unnice', $post) }}" class="btn btn-success btn-sm">
                            いいね
                            <!-- 「いいね」の数を表示 -->
                            <span class="badge">
                                {{ $post->nices->count() }}
                            </span>
                        </a>
                        @else
                        <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
                        <a href="{{ route('nice', $post) }}" class="btn btn-secondary btn-sm">
                            いいね
                            <!-- 「いいね」の数を表示 -->
                            <span class="badge">
                                {{ $post->nices->count() }}
                            </span>
                        </a>
                        @endif
                    </span>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>