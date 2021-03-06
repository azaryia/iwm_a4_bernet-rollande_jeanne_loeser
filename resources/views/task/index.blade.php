@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12 panel">
      <h1>To do list</h1>
      <ul>
        @forelse($tasks as $task)
          <li><a href="{{route('tasks.edit', $task->id)}}">Edit task</a> <a href="{{route('tasks.show', $task->id)}}">{{$task->title}}, Utilisateur : {{$task->user->name}}
            @if($task->done)
            <span class="label label-success">Success</span>
            @else
            <span class="label label-danger">Fail</span>
            @endif</a></li>
            @empty
            <li><a href="{{route('tasks.show', $task->id)}}">{{$task->title}}
              @if($task->done)
              <span class="label label-success">Success</span>
              @else
              <span class="label label-danger">Fail</span>
              @endif</a></li>
          @endforelse
      </ul>
    </div>
  </div>
</div>
@endsection