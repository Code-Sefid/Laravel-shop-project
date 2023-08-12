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
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">اسم محصول</label>
  <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="همبرگر ممتاز 95 درصد مهیا پروتئین - 400 گرم">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">اسم لاتین (اسلاگ)</label>
  <input type="text" class="form-control" name="slug" id="exampleFormControlInput1" placeholder="berger">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">ویژگی ها</label>
  <textarea class="form-control" name="attr" id="exampleFormControlTextarea1" rows="5" placeholder="غذای منجمد:همبرگر
بسته بندی :۴۰۰ گرم
ابعاد بسته‌بندی :۱۴ × ۱۳.۵ × ۳.۵ سانتی‌متر
میزان چربی : ۵ گرم"></textarea>
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">توضیحات</label>
  <textarea class="form-control"  name="desc" id="exampleFormControlTextarea1" rows="2" placeholder=""></textarea>
</div>
<div class="mb-3">
    <label for="">عکس</label>
        <input type="file" name="image" >
    </div>
    <div class="mb-3">
      <select class="form-select" name="category" aria-label="دسته بندی رو انتخاب کن">
        @foreach($categories as $category)
          <option value="{{$category->title}}">{{$category->title}}</option>
        @endforeach
      </select>
    </div>
<div class="mb-3">
        <input type="submit" class="btn btn-primary" value="افزودن">
    </div>
    </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>