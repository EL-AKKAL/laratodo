@extends('layouts')

@section('body')
    <form class="input_text w-full flex items-center justify-center flex-col my-6" action="/todo/{{$task->id}}" method="POST">
        @csrf
        @method('PUT')
        
        <input type="text" name="title" value="{{$task->title}}" placeholder="edit title" class="text-md w-full my-4 mb-2 outline-none py-3 px-2 border border-solid border-blue-400 rounded-lg">
        <textarea name="body" id="" placeholder="edit description" cols="30" rows="7" class="text-md w-full my-4 mb-2 outline-none py-3 px-2 border border-solid border-blue-400 rounded-lg">{{$task->body}}</textarea>
        <input type="date" name="dueDate" value="{{$task->dueDate}}" min="2018-01-01" max="2099-01-01" class="my-3 text-gray-500 flex items-center justify-center px-2 border border-solid border-blue-400 rounded-lg">
        <div class="flex justify-between items-center">
            <input type="submit" value="Save changes" class="mx-2 add_task text-sm transition-all hover:bg-blue-700 cursor-pointer text-white bg-blue-400 rounded-lg py-2 px-5 font-bold">
            <a href="/todo" class="add_task text-sm transition-all mx-2 hover:bg-red-700 cursor-pointer text-white bg-red-400 rounded-lg py-2 px-5 font-bold">Cancel</a>    
        </div>
    </form>   
@include('includes.errors')
@endsection