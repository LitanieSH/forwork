
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/layout.css">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Index</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
      <div class="container">
        <a class="navbar-brand" href="request_orders.php">
          Orders.
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
          
        </ul>
      </div>
    </div>
  </nav>

    <div class="banner" style="background-image: url('https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'); height: 700px; background-size: cover; background-position: center;">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 p-2  my-5">
          <h1 class="text-center " style="color:#F97742">Welcome to the website</h1>
          <p class="text" >สวัสดีทุกท่าน! หากท่านกำลังมองหาเว็บไซต์ที่มีบริการ Quotation Orders และ Service Jobs ที่มีคุณภาพและปลอดภัย เว็บไซต์ของเราจะเป็นตัวเลือกที่ดีที่สุดสำหรับท่าน! ที่เรามีบริการที่สะดวกสบายและเข้าถึงง่าย เราขอเชิญทุกท่านมาสัมผัสประสบการณ์การใช้งานเว็บไซต์ของเรากันเถอะ!
             </p>
             <div>
                <?php 
                include("headmenu.php");
                ?>
            </div> 
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row featurette ">
      <div class="col-md-7">
        <h2 class="featurette-heading">Quotation Orders </h2>
        <p >เป็นเอกสารที่ใช้ในการขายสินค้าหรือบริการโดยที่ลูกค้ายังไม่ได้สั่งซื้อจริง ใน Quotation Orders จะระบุรายละเอียดของสินค้าหรือบริการที่ลูกค้าต้องการซื้อ รวมถึงราคาและข้อกำหนดการชำระเงิน โดยเอกสาร Quotation Orders นี้จะช่วยให้ลูกค้าสามารถทราบรายละเอียดต่าง ๆ ของสินค้าหรือบริการ รวมถึงราคาและเงื่อนไขการชำระเงิน ก่อนที่จะตัดสินใจสั่งซื้อจริง โดย Quotation Orders จะมักถูกใช้ในธุรกิจเชิงพาณิชย์เพื่อให้ลูกค้าได้ทราบรายละเอียดและราคาของสินค้าหรือบริการก่อนการสั่งซื้อเพื่อให้เกิดความเชื่อมั่นและความพึงพอใจในการซื้อสินค้าหรือบริการนั้นๆ อีกทั้งยังช่วยเพิ่มโอกาสในการทำธุรกิจให้กับผู้ขายอีกด้วย</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://images.unsplash.com/photo-1556155092-490a1ba16284?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Your Image">
      </div>
    </div>

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Service Jobs</h2>
        <p >ลักษณะการงานบริการที่ระบบได้ทำการออกแบบไว้ ระบบแอฟพลิเคชั่นเป็นรูแบบงานบริการ และงารรับแจ้งซ่อมคอมพิวเตอร์ตามลักษณะอาการที่ผู้แจ้งจะต้องระบุอาการเสียเบื้องต้น ให้ผูเกี่ยวข้องทราบ เพื่อประเมินอาการเสียและจัดเตรียมแผมนเพื่อเข้าแก้ไข
          ขั้นตอนการรับเรื่องแจ้งงานเทื่อทีการสร้างเอการการแจ้งงานบริการหรืองานซ่อมคอมพิวเตอร์ระบบจะบันทึกข้อมูลลงในฐานข้อมูลและเก็บวันเวลาพร้อมทั้งเลขที่เอกสารเอกสารที่ถูกสร้าง ขึ้นมานี้จะถูกกำหนดว่าห้ามมีการลบแต่แก้ไขรายละเอียดได้เมื่อผู้ที่ login เข้ามามีสถานะเป็นผู้ใช้งาน ระดับ 'user' แต่ระบบ 'admin' จะสามารถ เพิ่ม ลบ แก้ไขได้ทั้งระบบ.
          เมื่อเอกสารที่สร้างขึ้นถึงจุดเสร็จสิ้นกระบวนการตามระบบเช่น ใบเสนอรคามีการอนุมัติ หรือนำไปใช้งาน หรือ ใบแจ้องซ่อมคอมพิวเตอร์เลขที่นั้นๆดำเนินการเสร็จสิ้น ระบบได้กำหนดสถานะเอก สารว่า 'Done' เพื่อให้ข้อมูลและเลขที่เอกสารนั้นๆคงอยู่และสามารถนำข้อมูลไปทำการวิเคราะห์รายได้ในระบบอื่นๆต่อไป</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://images.unsplash.com/photo-1573497019509-d715a631bbe5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Your Image">
      </div>
    </div>
  </div>


    <div class="col-md-12 text-center my-5">
      <h2>Company name</h2>
    </div>

   <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- ส่วนของข้อมูลติดต่อ -->
        <h4>บริษัท เอ็ม.โอ.พี.แอคเค้าท์ติ้ง แอนด์ ไอที โซลูชั่นส์ จำกัด</h4>
        <p>Address: 44/216 นิมิตใหม่12 </p>
        <p>Address: แขวงทรายกองดิน เขตคลองสามวา </p>
        <p>Address: กรุงเทพมหานคร </p>
        <p>Phone: (123) 456-7890</p>
        <p>Email: demo@example.com</p>
      </div>
      <div class="col-md-6">
        <!-- ส่วนของ Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5478.694866959251!2d100.73991558075234!3d13.837699919018975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d65f79dc075f5%3A0x6463a7de5d2e43fd!2z4LmA4Lit4LmH4Lih4LmC4Lit4Lie4Li1IOC5geC4reC4hOC5gOC4hOC4suC4l-C5jOC4leC4tOC5ieC4hyDguYHguK3guJnguJTguYwg4LmE4Lit4LiX4Li1IOC5guC4i-C4peC4ueC4iuC4seC5iOC4mQ!5e0!3m2!1sen!2sth!4v1682578353599!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    </div>
</body>
</html>