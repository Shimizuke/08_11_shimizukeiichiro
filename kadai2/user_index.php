<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ユーザー管理機能</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="user_index.php">ユーザー登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">ユーザー一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="user_insert.php">
        <div class="form-group">
            <label for="name">ユーザー名</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="lid">ログインID</label>
            <input type="text" class="form-control" id="lid" name="lid">
        </div>
        <div class="form-group">
            <label for="lpw">ログインパスワード</label>
            <input type="text" class="form-control" id="lpw" name="lpw">
        </div>
        <div class="form-group">
            <label for="kanri_flg">一般or管理者</label>
            <!-- <input type="text" class="form-control" id="kanri_flg" name="kanri_flg"> -->
            <input type="hidden" class="form-group" id="kanri_flg" name="kanri_flg" value="$shift">
            <p>一般</p>
            <input type="radio" class="form-group" id="kanri_flg" name="kanri_flg" value=0 $checked0 />
            <p>管理者</p>
            <input type="radio" class="form-group" id="kanri_flg" name="kanri_flg" value=1 $checked1 />
        </div>
        <div class="form-group">
            <label for="life_flg">アクティブor非アクティブ</label>
            <!-- <input type="text" class="form-control" id="life_flg" name="life_flg"> -->
            <input type="hidden" class="form-group" id="life_flg" name="life_flg" value="$shift">
            <p>アクティブ</p>
            <input type="radio" class="form-group" id="life_flg" name="life_flg" value=0 $checked0 />
            <p>非アクティブ</p>
            <input type="radio" class="form-group" id="life_flg" name="life_flg" value=1 $checked1 />
        </div>
        <button type="submit" class="btn btn-primary">承認</button>
        </div>

    </form>

</body>
<?php
$shift = 0;
$checked0 = ($shift) ? "" : "checked";
$checked1 = ($shift) ? "checked" : "";
echo <<< EOT
EOT;
?>

</html>