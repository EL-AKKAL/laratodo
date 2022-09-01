<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Todo::all();
        return view('home' )->with('tasks' , $tasks );
    }

    /****************************************************************************************************************
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /****************************************************************************************************************
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new Todo;
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required|unique:todos',
            'dueDate'=>'required'
        ]);
        Todo::create([
            'title' => $request->title,
            'body' => $request->body,
            'dueDate' => $request->dueDate,
        ]);
        session()->flash('message','Task created successfully');
        return redirect('todo');
    }

    /****************************************************************************************************************
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('show')->with('task',$todo);
    }

    /****************************************************************************************************************
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('edit')->with('task',$todo);
    }

    /****************************************************************************************************************
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $this->validate($request,[
            'title'=>'required',
           'body'=>'required',
           'dueDate'=>'required'
        ]);
        $todo->update($request->only([ 'title', 'body' , 'dueDate' ]));
        session()->flash('message','Task updated successfully');
        return redirect('todo');
    }

    /****************************************************************************************************************
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        session()->flash('message','Task '.$todo->id.' deleted successfully');
        return redirect('todo');
    }
}