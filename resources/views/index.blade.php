<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>train5</title>
</head>
<body>

    <ul class="nav">
        <li class="nav-item">
            <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
            <a class="nav-link active fs-2" aria-current="page" href="/editor">+</a>
        </li>
    </ul>
    <div class="container">
    <ul class="list-group">
        @if(isset($sql))
            @for($i=0;$i<count($sql);$i++)
                <li class="list-group-item active">姓名：{{$sql[$i]->name}}</li>
                <li class="list-group-item">身分證字號：{{$sql[$i]->user_id}}</li>
                <li class="list-group-item">生日：{{$sql[$i]->birth}}</li>
                <li class="list-group-item">電話：{{$sql[$i]->tel}}</li>
                <li class="list-group-item">郵遞區號：{{$sql[$i]->postalCode}}</li>
                <li class="list-group-item">地址：{{$sql[$i]->address}}</li>
                <form action="" method="POST">
                    <button class="btn btn-warning">修改</button>
                </form>
                <br>
            @endfor
        @endif
</ul>
    </div>
</body>
</html>