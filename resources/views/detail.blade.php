<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/product1.css" rel="stylesheet">
    <title>مایع لباس شویی</title>
</head>

<body>
    <div class="navi">
        @include("nav")
    </div>
    <!--product-->


    <div class="content">
        <h2>{{$product->title}}</h2>
        <div class="products_col" style="margin-right: 40px;">
            <img src="/images/{{$product->image}}">
        </div>
        
        <div class="products_col" style="margin-left: 250px;">
            <h3> دسته بدی:</h3>
            <p class="app-skills">
                {{$product->category}}
            </p>
            <h3>ویژگی های :</h3>
            <p class="app-skills">
                {{$product->attr}}
            </p>
            <a class="readMore" href="#"> خرید محصول</a>
        </div>
       
    </div>

    <strong style="line-height: 1.2;font-size: 18px;display: block;margin-top: 40px;"><a href="#">توضیحات </strong>
             
        {{$product->desc}}      

    </div>



<section class="pro-list">
    @foreach($products as $product)
    <div  class="single-pro">
        <a href="/detail/{{$product->slug}}">
        <img src="/images/{{$product->image}}" style="width: 100%;margin-bottom: -9px;"/>
        <h5>{{$product->title}}</h5>
    </a>
    </div>
    @endforeach
  
</section>


<footer dir="rtl">
    
    <div  class="footer-sec">
      <h3> درباره ما</h3>
           
         
          <p>
              یک خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع، باکیفیت و دارای قیمت مناسب را در مدت زمانی کوتاه به دست مشتریان خود برساند و ضمانت بازگشت کالا هم داشته باشد.
          </p>
    </div>

    <div  class="footer-sec">
        <h3>  دسترسی سریع</h3>
             
        <ul>
            <li><a href="index.html">خانه</a></li>
            <li><a href="about.html">درباره ما</a></li>
            <li><a href="#">وبلاگ</a></li>
         
        </ul>
      </div>



      <div  class="footer-sec">
        <h3>دسته بندی</h3>
             
        <ul class="category">
            <li><a href="#">سبزیجات</a></li>
            <li><a href="#">خشکبار</a></li>
            <li><a href="#">تنقلات</a></li>
            <li><a href="#">گوشت و ماهی</a></li>
        </ul>
      </div>



      <div  class="footer-sec">
        <h3> ارتباط با ما</h3>
             
        <form onsubmit="return false">
            <input type="email" placeholder="Enter your email...">
            <input type="submit" value="ورود">
        </form>
      </div>


</footer>



</body>

</html>