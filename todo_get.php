<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo登録画面（GET）</title>
</head>

<body>

  <form action="todo_get_confirm.php" method="get">
    <fieldset>
      <legend>todo登録画面（GET）</legend>
      <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
</body>

</html>