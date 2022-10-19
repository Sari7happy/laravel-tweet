
<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           仮のページです
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          
                <div class="p-6 bg-white border-b border-gray-200">
            
                </div>
            </div>
        </div>
    </div>
    @foreach($values as $value)
    {{$value->id}}
    {{$value->text}}
    @endforeach
</x-app-layout>
