<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planet create</title>
</head>

<body>
    <h1>惑星情報登録</h1>

    <form action="/planets" method="post">
        @csrf
        <p>名前 <input type="text" name="name" value="{{ old('name') }}"></p>
        <p>名前(英語) <input type="text" name="english_name" value="{{ old('english_name') }}"></p>
        <p>半径 <input type="integer" name="radius" value="{{ old('radius') }}"></p>
        <p>重量 <input type="integer" name="weight" value="{{ old('weight') }}"></p>
        <input type="submit" value="登録"><br>
        <a href="/planets">戻る</a>
    </form>

</body>

</html>
