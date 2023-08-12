<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/contact.css" rel="stylesheet">
     
        <link href="css/style.css" rel="stylesheet">
      
    <title>ارتباط با ما</title>
    </head>
<body>
  <div class="navi">
   @include('nav')
</div>
    <header>
   
    <img class="logo-part" src="assets/login.png" style="display: block;">
    </header>
    <section class="main-section">
      <div class="main-con">
        <h5 style="line-height: 1.4;color: rgb(44, 44, 128);margin-top: 20px;">از برقراری ارتباط با شما خرسندیم<br></h5>
        <h6 style="color: rgb(67, 67, 155);">امروز چگونه میتوانیم کمکتان کنیم؟</h6>  
      </div>
      <article class="form-section">
        <form name="myForm" action="https://www.google.com/" method="POST">
        
            <label for="text">نام</label>
           <input type="text" id="text" name="fname" required autocomplete="additional-name" >
             <label for="text">ایمیل</label>
             <input type="email" name="email" required>
             <label for="text">پیام شما</label>
             <input type="text">
             <input class="submit" type="submit" value="ثبت">
             <input type="reset" value="↺" class="reset-buttom">
        </form>
    </article>
    </section>
</body>
</html>