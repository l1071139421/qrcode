<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
    <!-- resources/views/auth/login.blade.php -->
    <div>
        <form method="POST" action="/itemdata/create">
            {!! csrf_field() !!}

            <div>
                item_id
                <input type="text" name="item_id">
            </div><div>
                item_token
                <input type="text" name="item_token">
            </div><div>
                property_num
                <input type="text" name="property_num">
            </div><div>
                address
                <input type="text" name="address">
            </div>

            <div>
                <button type="submit">create</button>
            </div>
        </form>
    </div>

    <div>
        <form method="POST" action="/itemdata/update">
            {!! csrf_field() !!}
            <div>
                id
                <input type="text" name="id">
            </div><div>
                item_id
                <input type="text" name="item_id">
            </div><div>
                item_token
                <input type="text" name="item_token">
            </div><div>
                property_num
                <input type="text" name="property_num">
            </div><div>
                address
                <input type="text" name="address">
            </div>

            <div>
                <button type="submit">update</button>
            </div>
        </form>
    </div>

    <div>
        <form method="POST" action="/itemdata/delete">
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
