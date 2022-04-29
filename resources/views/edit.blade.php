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
            <a class="nav-link active fs-2" aria-current="page" href="/create">+</a>
        </li>
    </ul>
    @if(isset($person))
    <div class="container">
    <a class="btn btn-primary" href="/index">返回</a>
        <form action="/create" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">姓名</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$person->name}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">身份証號</label>
            <input type="text" class="form-control" id="" name="user_id" value="{{$person->user_id}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">生日</label>
            <input type="" class="form-control" id="" name="birth" value="{{$person->birth}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">電話</label>
            <input type="text" class="form-control" id="" name="tel" value="{{$person->tel}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">郵遞區號</label>
            <input type="text" class="form-control" id="" name="postalCode" value="{{$person->postalCode}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">住址</label>
            <input type="text" class="form-control" id="" name="address"value="{{$person->address}}" >
        </div>
            <button type="submit" class="btn btn-primary">新增</button>
        </form>
@endif
    </div>
</body>

<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</html>