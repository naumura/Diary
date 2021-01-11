<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>編集画面</title>
</head>
<body>
@extends('layout')

@section('title')
一覧
@endsection

@section('content')
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $message)
                    <li class="alert alert-danger">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('diary.update', ['id' => $diary->id]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $diary->title) }}">
                </div>
                <div class="form-group">
                    <label for="title">本文</label>
                    <textarea class="form-control" name="body" id="body">{{ old('body', $diary->body) }}</textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">更新</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
</body>
</html>