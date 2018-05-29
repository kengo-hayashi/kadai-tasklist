@extends('layouts.app')

@section('content')

   <h1>id: {{ $task->id }} のタスク編集ページ</h1>
   
   {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
   
      {!! Form::label('content', 'タスク:') !!}
      {!! Form::text('content') !!}
      
      {!! Form::label('status', '状態:') !!}
      {!! Form::select('status', [
      '完了' => '完了',
      '着手' => '着手',
      '未着手' => '未着手'
      ]) !!}
      
      {!! Form::submit('更新') !!}
      
   {!! Form::close() !!}

<!-- Write content for each page here -->

@endsection