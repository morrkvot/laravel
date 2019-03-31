<!DOCTYPE HTML>
<html>
<head>
    <title>User page</title>
</head>
<body>

<h1>Page of ~~</h1>
@include('header')

<p>{name}</p>
<?php echo Auth::user()->name; ?>
@isset($bbs)
    @foreach ($bbs as $d)
        <div>
        	<h2>{{ $d->user_id }}さんの投稿</h2>
            <img src="data:image/png;base64,<?= $d->image ?>">
        </div>
    @endforeach
@endisset
</body>
</html>