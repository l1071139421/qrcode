<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
    <!-- resources/views/auth/login.blade.php -->
    <div>
    <form method="POST" action="/item/create">
        {!! csrf_field() !!}

        <div>
            name
            <input type="text" name="name">
        </div>

        <div>
            <button type="submit">create item</button>
        </div>
    </form>
</div>

<div>
    <form method="POST" action="/item/update">
        {!! csrf_field() !!}
        <div>
            id
            <input type="text" name="id">
        </div>
        <div>
            name
            <input type="text" name="name">
        </div>

        <div>
            <button type="submit">update item</button>
        </div>
    </form>
</div>
</div>
</body>
</html>
