<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body dir="rtl">
    <br>
    <div class="container">
        @include('admin.nav')
        <br>

        <div class="row">
        <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">عنوان</label>
                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="سبزیجات">
              </div>
<div class="mb-3">
        <input type="submit" class="btn btn-primary" value="افزودن">
    </div>
    </form>
        </div>
<br><br><br>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                  <tr>
                    <th scope="row">.</th>
                    <td>{{$category->title}}</td>
                    <td><a class="btn btn-danger" href="/admin/category/delete/{{$category->id}}">حذف</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>