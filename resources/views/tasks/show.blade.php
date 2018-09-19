@extends('layouts.app')

@section('content')

 <h1>id = {{ $tasks->id }}詳細ページ</h1>

　<P>{{ $message->content }}</P>

{!! link_to_rote('tasks.edit','このメッセージを編集', ['id' => $task->id])!!}
{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
