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
    <h1>詳細</h1>
    @if (isset($keihi->id))
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
                <td>{{{ $keihi->id }}}</td>
                <td>{{{ $keihi->title }}}</td>
                <td>{{{ $keihi->price }}}</td>
                <td>{{{ $keihi->url }}}</td>
            </tr>
        </tbody>
    </table>
    <a class="ui primary button" href="{{ route('keihi.edit', ['id' => $keihi->id]) }}">編集</a>
    @endif
    <a class="ui button" href="/keihi">一覧へ戻る</a>
    </div>
</div>
</body>
</html>
