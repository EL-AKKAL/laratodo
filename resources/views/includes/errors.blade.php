@if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="w-full mb-2 rounded-md py-2 flex items-center justify-center bg-red-300  flex-col">
                <p class="text-red-600">{{$error}}</p>
            </div>
        @endforeach
@endif 