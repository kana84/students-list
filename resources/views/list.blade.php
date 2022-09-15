<html>
    <head>
    <meta charset="utf-8">
    <title>生徒一覧</title>
    </head>
    <body>
        <form action="/entry" method="GET">
            <button type="submit">新規登録</button>
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>フリガナ</th>
                    <th>性別</th>
                    <th>学年</th>
                    <th>クラス</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>
                        {{ $student->name}}
                    </td>
                    <td>
                        {{ $student->kana }}
                    </td>
                    <td>
                        @if($student->gender == 1)
                            男
                        @elseif($student->gender == 2)
                            女
                        @endif
                    </td>
                    <td>
                        {{ $student->school_grade }}
                    </td>
                    <td>
                        {{ $student->class }}
                    </td>
                    <td>
                        <form action="/edit" method="POST">
                            <input type="hidden" name="id" value="{{ $student->id }}">
                            @csrf
                            <button type="submit">編集</button>
                        </form>
                    </td>
                    <td>
                        <form action="/delete" method="POST">
                            <input type="hidden" name="id" value="{{ $student->id }}">
                            @csrf
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
