<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="row">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link @if(Request::route()->uri == 'admin') active @endif" aria-current="page" href="/admin">افزودن محصول جدید</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::route()->uri == 'admin/product') active @endif" href="/admin/product">لیست محصولات</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::route()->uri == 'admin/slider') active @endif" href="/admin/slider">اسلایدر ها</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Request::route()->uri == 'admin/category') active @endif" href="/admin/category">دسته بندی ها</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-danger" href="/">بازگشت به سایت</a>
        </li>
    </ul>
</div>
