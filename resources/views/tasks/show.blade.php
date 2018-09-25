@extends('layouts.app')

@section('content')

 <h1>id = {{ $task->id }}詳細ページ</h1>

　<P>{{ $task->content }}</P>

{!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $task->id]) !!}

{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
