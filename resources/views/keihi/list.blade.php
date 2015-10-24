<html>
<head>
    <title>一覧</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
</head>
<body>
<div class="ui main container">
    <div class="ui segment">
    <h1>一覧</h1>
    <a class="ui primary button" href="{{ route('keihi.create') }}">新規登録</a>
    <table class="ui celled table">
        <thead>
        <tr>
            <th>タイトル</th>
            <th>詳細</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $keihi)
            <tr>
                <td>{{{ $keihi->title }}}</td>
                <td><a href="{{ route('keihi.show', ['id' => $keihi->id]) }}">詳細</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
</body>
</html>
