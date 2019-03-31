@if (Auth::check())
<nav class="navbar">
	<ul>
		<li><a href="{{ url('/bbs') }}">ホーム</a></li>
		<li><a href="{{ url('logout') }}">ログアウト</a></li>
		<li><a href="{{ url('post') }}">投稿</a></li>
	</ul>
</nav>
@else
<nav class="navbar">
	<ul>
		<li><a href="{{ url('/bbs') }}">ホーム</a></li>
		<li><a href="{{ url('login') }}">ログイン</a></li>
		<li><a href="{{ url('login') }}">投稿</a></li>
	</ul>
</nav>
@endif