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
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام محصول</th>
                    <th scope="col">عکس</th>
                    <th scope="col">آدرس</th>
                    <th scope="col">دسته</th>
                    <th scope="col">عملیات</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                  <tr>
                    <th scope="row">.</th>
                    <td>{{$product->title}}</td>
                    <td><img src="/images/{{$product->image}}" height="120px" alt=""></td>
                    <td><a href="/detail/{{$product->slug}}">/detail/{{$product->slug}}</a></td>
                    <td>{{$product->category}}</td>
                    <td><a class="btn btn-danger" href="/admin/product/delete/{{$product->slug}}">حذف</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>