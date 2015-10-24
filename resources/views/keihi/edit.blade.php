<html>
<head>
    <title>詳細</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
</head>
<body>
<div class="ui main container">
    <div class="ui segment">
    <h1>@if (isset($keihi->id))編集 @else 新規作成 @endif </h1>
    <form class="ui form" method="post" action="@if (isset($keihi->id)){{{ route('keihi.update', ['id' => $keihi->id]) }}} @else{{{ route('keihi.store') }}} @endif">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @if (isset($keihi->id))<input name="_method" type="hidden" value="PUT"> @endif
    <table class="ui celled table">
        <thead>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>価格</th>
            <th>URL</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{{ $keihi->id or '-'}}}</td>
                <td><input name="title" type="text" value="{{{ $keihi->title or ''}}}"></td>
                <td><input name="price" type="text" value="{{{ $keihi->price or ''}}}"></td>
                <td><input name="url" type="text" value="{{{ $keihi->url or ''}}}"></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" class="ui primary button" value="@if (isset($keihi->id))更新 @else 作成 @endif">
    <a class="ui button" href="/keihi">キャンセル</a>
    </form>
    </div>
</div>
</body>
</html>
