<?php

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
      <img style="max-width:100%;" src="./images/pc.gif" alt="">
      <h1 class="display-4 fw-normal">انضم إلينا واربح <font color="#736BF2">كمبيوتر</font></h1><br>
      <p class="lead fw-normal">باقي على التسجيل </p>
      <h3 style="color:#736BF2; border: 1px solid #736BF2; border-radius: 10px; padding: 20px;" id="#countdown"></h3> <br><br>
      

<h3>للمشاركة في السحب، يرجى قراءة التالي</h3>
   <ul style="background:transparent;" class="list-group list-group-flush">
      <li class="list-group-item">تابعنا على تويتر</li>
      <li class="list-group-item">السحب  سيكون بشكل أسئلة وأجوبة</li>
      <li class="list-group-item">تابعنا لمعرفة موعد التحدي  والمشاركة في الوقت المناسب</li>
      <li class="list-group-item">في نهاية الفعالية، سيتم اختيار الفائزين عشوائيًا</li>
      <li class="list-group-item">وقد تكون أنت أحد الفائزين بإذن الله</li>
   </ul>  
  </div>

<p class="lead fw-normal">حسابنا على تويتر</p>
      <a class="btn btn-outline-secondary" onclick="alert('x.com/?????'); return false;">تابعنا</a>

  </div>  

<div class="container">

<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form class="mt-5" method="POST" action="<?php $_SERVER['PHP_SELF']   ?>">
  

<h3>الرجاء الدخل المعلومات</h3><br><br><br><br>

  <div class="mt-5">

    <label for="firstname" class="form-label">  <h2>الاسم الأول &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>  </label>
    <input type="text" name="firstname" placeholder="الاسم الأول" class="form-control" id="firstname" value="<?php if(isset($_POST['sub'])){  echo $firstname; }?>" >
    <div id="emailHelp" class="form-text error"><?php if(isset($_POST['sub'])){ echo $errors['firstnameError']; }?></div>
  </div>

  <div class="mt-5">
   
    <label for="lastname" class="form-label"> <h2>الاسم الأخير &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></label>
    <input type="text" name="lastname" placeholder="اسم العائله" class="form-control" id="lastname" value="<?php  if(isset($_POST['sub'])){  echo $lastname; }?>" >
    <div id="emailHelp" class="form-text error"><?php if(isset($_POST['sub'])){ echo $errors['lastnameError']; }?></div>
  </div>

  <div class="mt-5">
    
    <label for="email" class="form-label">  <h2>البريد الالكتروني &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>      </label>
    <input type="text" name="email" placeholder="example@gmail.com" class="form-control" id="email" value="<?php  if(isset($_POST['sub'])){  echo $email; }?>">
    <div id="emailHelp" class="form-text error"><?php if(isset($_POST['sub'])){ echo $errors['emailError']; }?></div>
  </div>
  <br>
  <button type="submit"  name="sub" class="btn btn-primary">ارسل البيانات</button>
</form>
</div> 



<div style="display: none;position:fixed; top: 0 ; left:0; width:100% ; height: 100%;  background-color:#000000eb;" class="loader-con">
 <div style="position:fixed; top:50%; left: 50%; transform: translate(-50%,-50%) ; " id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>


<!-- button trigger modal -->
<div class="d-grid gap-2 col-3 mx-auto my-2">
  <button id="winner" type="button" class="btn btn-primary" >
    اختيار الرابح 
  </button>
</div>

<!-- modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="modal-header">
   
        <h5 class="modal-title" id="modalLabel">الرابح</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach ($users as $user) : ?>
        <h2 class="modal-title text-centerc modal-title" id="modalLabel"><?php echo htmlspecialchars( $user['firstname']).'  '. htmlspecialchars( $user['lastname']);?></h2>
        <?php endforeach; ?> 

      </div>
      
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>


<!-- 

<div style=" display: none" id="cards" class="row mb-5 pb-5"> 
  <div class="col-sm-6">
    <div class="card my-2">
      <div class="card -body">
        <h1 class="card-title"></h1>
        <p class="card-text"><?php echo htmlspecialchars( $user['emil']); ?></p>

      </div>   
   </div>   
  </div>   
</div> -->

<?php include_once './parts/footer.php'; ?>