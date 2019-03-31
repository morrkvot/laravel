<!DOCTYPE HTML>
<html>
<head>
    <title>掲示板</title>
</head>
<body>

<h1>掲示板</h1>
@include('header')
<!-- エラーメッセージエリア -->
@if ($errors->any())
    <h2>エラーメッセージ</h2>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<!-- Delete post, not done! -->
<form method="post" action="/post/delete/{{$article->id}}">
{{ csrf_field() }}
<input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("君は本当に削除するつもりかい？");'>
</form>

<!-- 投稿表示エリア（編集するのはここ！） -->
@isset($bbs)
    @foreach ($bbs as $d)
        <div>
            <h2><a href="{{ url('/users/') }}/{{ $d->user_id }}">{{ $d->user_id }}さんの投稿</a></h2>
            <img src="data:image/png;base64,<?= $d->image ?>">
            <p>{{ $d->comment }}</p>
            <br>
            <form method="POST" name="like">
                <button>Like</button>
            </form>
            <hr>
        </div>

    @endforeach
<!-- Used for next/previous button in pagination. Error when posting? -->
{{ $bbs->links() }}
@endisset



</body>
</html>