<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">

    <!-- resources/views/auth/login.blade.php -->
    <div>
        <form method="POST" action="/report/update">
            {!! csrf_field() !!}

            <div>
                item_id
                <input type="text" name="item_id">
            </div><div>
                bill
                <input type="text" name="bill">
            </div><div>
                bill_degree
                <input type="text" name="bill_degree">
            </div><div>
                date
                <input type="text" name="date">
            </div>

            <div>
                <button type="submit">update</button>
            </div>
        </form>
    </div>

    <div>
        <form method="POST" action="/report/create">
            {!! csrf_field() !!}

            <div>
                item_id
                <input type="text" name="item_id">
            </div><div>
                bill
                <input type="text" name="bill">
            </div><div>
                bill_degree
                <input type="text" name="bill_degree">
            </div><div>
                date
                <input type="text" name="date">
            </div>

            <div>
                <button type="submit">create</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
