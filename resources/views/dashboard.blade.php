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

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{$message}}</strong>
                    </div>
                    <img src="{{asset('images/'.Session::get('image'))}}"/>
                    @endif
                    <form method="POST" action="{{route('image.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control" name ="image"/>
                        <button type="submit" class="btn btn bg-yellow-500">アップロード</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>