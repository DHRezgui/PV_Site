<?php 
   ob_start();
?> 

<div id="conte" style="background-color:white;" style="height: 1500px;">
    <div class="row mx-1 " style="margin-top: 50px;">
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col"></div>
      <div class="col box">
         <div class="card" style="width: 150px; height: 150px;">
             <img src="public/HomeIcons/PVs.png" class="card-img-top" >
           <div class="card-body">
              <h5 class="card-title text-end">محاضر الجلسات</h5>
              <a href="AffichePV.php" class="btn btn-primary">زيارة الصفحة</a>
           </div>
         </div>
      </div>
      <div class="col box">
         <div class="card" style="width: 150px; height: 150px;">
             <img src="public/HomeIcons/Ajoutpv.png" class="card-img-top" >
           <div class="card-body">
              <h5 class="card-title text-end">اضافة محضر جلسة</h5>
              <a href="PV.php" class="btn btn-primary">زيارة الصفحة</a>
           </div>
         </div>
      </div>
    </div>
</div>


<?php 
   $content= ob_get_clean();
   require "template.php";
?> 