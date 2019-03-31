<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
@if (Auth::check())<!-- エラーメッセージ。なければ表示しない -->
    @if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    @include('header')
    <!-- フォームエリア -->
    <form action="{{ url('/bbs') }}" method="POST" enctype="multipart/form-data" class="post_form">
        <div class="form_parts">
            <input type="file" name="image">
            <br>
    <!--         <input type="text" name="user"> -->
            <br>
            <textarea name="comment" rows="4" cols="40" placeholder="Write a caption here!"></textarea>
            <br>
            {{ csrf_field() }}
            <button class="btn btn-success">投稿</button>
        </div>
    </form>
@else
    <h2>Please login</h2>
    <a href="{{ url('/login') }}">Login here</a>
@endif
