<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
    <!-- resources/views/auth/login.blade.php -->
    <div>
        <form method="POST" action="/record/create">
            {!! csrf_field() !!}

            <div>
                item_id
                <input type="text" name="item_id">
            </div><div>
                user_id
                <input type="text" name="user_id">
            </div><div>
                degree
                <input type="text" name="degree">
            </div><div>
                item_token
                <input type="text" name="item_token">
            </div>

            <div>
                <button type="submit">create record</button>
            </div>
        </form>
    </div>

    <div>
        <form method="POST" action="/record/update">
            {!! csrf_field() !!}
            <div>
                id
                <input type="text" name="id">
            </div><div>
                degree
                <input type="text" name="degree">
            </div>

            <div>
                <button type="submit">update</button>
            </div>
        </form>
    </div>

    <div>
        <form method="POST" action="/record/delete">
            {!! csrf_field() !!}
            <div>
                id
                <input type="text" name="id">
            </div>

            <div>
                <button type="submit">delete</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
