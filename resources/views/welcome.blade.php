<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link href="css/slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>فروشگاه مواد غذایی نیلا</title>
</head>
<body>
    <a id="up"></a>
<div class="navi">
    @include("nav")
</div>

<div class="slider" style="margin-top: 70px;">
    <div class="slideshow-container">
        @foreach($sliders as $slider)
        <div class="mySlides fade" style="background-color: rgb(178, 242, 171);">
            <img src="/images/{{$slider->image}}" style="width: fit-content;">
            <h2 class="text" style="margin-right: 70px;">{{$slider->title}}</h2>
        </div>
        @endforeach

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <script src="js/slider.js"></script>

    </div>

    {{-- <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> --}}
</div>

<div class="content">
    <h2>محصولات</h2>
    @foreach($products as $product)
    <div class="products_col">
        <img src="/images/{{$product->image}}"/>
        <div class="product_dim">
            <a href="/detail/{{$product->slug}}">خرید محصول</a>
        </div>
    </div>
    @endforeach

    <h2>پرفروش‌ترین کالاها</h2>
    @foreach($products as $product)
    <div class="blog_col">
        <img src="/images/{{$product->image}}">
        <div class="blog_text">
            <strong style="line-height: 1.2;font-size: 18px;display: block;"><a href="#">{{$product->title}}</strong>
            <p>{{$product->desc}}</p>
                <a class="readMore" href="/detail/{{$product->slug}}">خرید</a>
        </div>
    </div>
    @endforeach
</div>

      <a class="up-style" href="#up" title="scroll up">↑</a>
<div class="footer">
    <div class="footer_col">
        <div class="footer_heading">
          درباره ما
        </div>
        <p>
            یک خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع، باکیفیت و دارای قیمت مناسب را در مدت زمانی کوتاه به دست مشتریان خود برساند و ضمانت بازگشت کالا هم داشته باشد.
        </p>
    </div>

    <div class="footer_col">
        <div class="footer_heading">
           دسترسی سریع
        </div>
        <ul>
            <li><a href="index.html">خانه</a></li>
            <li><a href="about.html">درباره ما</a></li>
            <li><a href="#">وبلاگ</a></li>
         
        </ul>
    </div>

    <div class="footer_col">
        <div class="footer_heading">
           دسته‌بندی 
        </div>
        <ul class="category">
            <li><a href="#">سبزیجات</a></li>
            <li><a href="#">خشکبار</a></li>
            <li><a href="#">تنقلات</a></li>
            <li><a href="#">گوشت و ماهی</a></li>
        </ul>
    </div>

    <div class="footer_col">
        <div class="footer_heading">
            ارتباط با ما
        </div>
        <form onsubmit="return false">
            <input type="email" placeholder="Enter your email...">
            <input type="submit" value="ورود">
        </form>
    </div>

    <div class="copyright">
        Copyright © 2023 | All rights reserved
    </div>

</div>

</body>
</html>