
@if (session()->has('message'))
    <div class="w-full mb-2 rounded-md py-2 flex items-center justify-center bg-green-300  flex-col">
        <p class="text-green-600">{{ session()->get('message')}}</p>
    </div>
@endif