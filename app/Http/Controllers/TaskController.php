<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Models\Task,
    Illuminate\Support\Facades\Auth;

class TaskController extends Controller{

    public function submit(Request $request){

        $task = new Task();

        $task->name         = $request->input('name-task');
        $task->description  = $request->input('desk-task');
        $task->user_id      = Auth::user()->id;
        $task->save();

        return redirect()->route('home');

    }

    public function allData(){

        return view('home ', ['data' => Task::where('user_id', Auth::user()->id)->get()]);

    }

    public function showTask($id){

        $task = new Task;
        return view('one-task', ['data' => $task->find($id)]);

    }

    public function updateTask($id){

        $task = new Task;
        return view('update-task', ['data' => $task->find($id)]);

    }

    public function updateTaskSubmit($id, Request $request){

        $task = new Task;
        $task = $task->find($id);

        $task->name         = $request->input('name-task');
        $task->description  = $request->input('desk-task');

        $task->save();

        return redirect()->route('one-task', $id);

    }

    public function deleteTask($id){

        $task = new Task;

        $task->find($id)->delete();
        return redirect()->route('home');

    }
}
