<!DOCTYPE HTML>
<html>
<head>
    <title>投稿一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>


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

<!-- 投稿表示エリア（編集するのはここ！） -->
@isset($bbs)
    @foreach ($bbs as $d)
        <div class="post">
            <h3><a href="{{ url('/users/') }}/{{ $d->user_id }}">{{ $d->user_id }}さんの投稿</a></h3>
            <p class="center"><img src="data:image/png;base64,<?= $d->image ?>"></p>
            <p>{{ $d->comment }}</p>
            <br>
        </div>
    @endforeach
<!-- Used for next/previous button in pagination. Error when posting? -->
{{ $bbs->links() }}
@endisset




</body>
</html>