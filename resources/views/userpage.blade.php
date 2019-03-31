<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $name }}'s page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('header')
<div class="user-header">
	<p id="icon">アイコン</p>
	<p>Page of {{ $name }}</p>
	<p>いいね合計数</p>
</div>


<div class="picture-container">
@isset($bbs)
    @foreach ($bbs as $d)
            <img src="data:image/png;base64,<?= $d->image ?>">
    @endforeach
@endisset
</div>
</body>
</html>