<html>
    <head>
    <meta charset="utf-8">
    <title>生徒情報の編集</title>
    <script type ="text/javascript">
        $(function (){
            $('.gender').on('click',function(event){
                event.preventDefault();

                var $input = $(this).find('input');
                $input.prop('checked',!$input.prop('checked'));
            });
        });
    </script>
    </head>
    <body>
        <div class="container small">
            <h1>生徒情報の編集</h1>
            <form action="/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $student->id }}">
                <fieldset>
                    <table>
                        <tr>
                            <div class="form-group">
                                <td>
                                    <label for="name">名前</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td>
                                    <label for="kana">フリガナ</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="kana" id="kana" value="{{ $student->kana }}">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td>
                                    <label for="gender">性別</label>
                                </td>
                                <td>
                                    <label><input type="radio" class="form-control" name="gender" id="gender" value=1 {{ $student->gender == 1 ? 'checked' : '' }}>男</label>
                                    <label><input type="radio" class="form-control" name="gender" id="gender" value=2 {{ $student->gender == 2 ? 'checked' : '' }}>女</label>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td>
                                    <label for="school_grade">学年</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="school_grade" id="school_grade" value="{{ $student->school_grade }}">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td>
                                    <label for="class">クラス</label>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="class" id="class" value="{{ $student->class }}">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="d-flex justify-content-between pt-3">
                                <td>
                                    <a href="/list" class="btn btn-outline-secondary" role="button">
                                        <i class="fa fa-reply mr-1" aria-hidden="true"></i>一覧画面へ
                                    </a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-success">
                                        更新
                                    </button>
                                </td>
                            </div>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </body>
</html>
