<?php 
   ob_start();
?> 

<div id="contenu" style="background-color:white;" style="height: 1500px;">
    <div class="row mx-1 " style="margin-top: 50px;">
    <div class="col box">
         <div class="card" style="width: 150px; height: 150px;">
             <img src="public/HomeIcons/Delais.png" class="card-img-top" >
           <div class="card-body">
              <h5 class="card-title text-end">الأَجال</h5>
              <a href="Delais.php" class="btn btn-primary">زيارة الصفحة</a>
           </div>
         </div>
      </div>
      <div class="col box">
         <div class="card" style="width: 150px; height: 150px;">
             <img src="public/HomeIcons/Suivi.png" class="card-img-top" >
           <div class="card-body">
              <h5 class="card-title text-end">المتابعة</h5>
              <a href="Suivi.php" class="btn btn-primary">زيارة الصفحة</a>
           </div>
         </div>
      </div>
      <div class="col box">
         <div class="card" style="width: 150px; height: 150px;">
             <img src="public/HomeIcons/Points.png" class="card-img-top" >
           <div class="card-body">
              <h5 class="card-title text-end">النقاط المثارة</h5>
              <a href="PointsAugmentes.php" class="btn btn-primary">زيارة الصفحة</a>
           </div>
         </div>
      </div>
      <div class="col box">
         <div class="card" style="width: 150px; height: 150px;">
             <img src="public/HomeIcons/Participants1.png" class="card-img-top" >
           <div class="card-body">
              <h5 class="card-title text-end">الحضور</h5>
              <a href="Participants.php" class="btn btn-primary">زيارة الصفحة</a>
           </div>
         </div>
      </div>
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
    <div class="row mx-1" style="margin-top: 200px;">
       <div class="col"></div>
       <div class="col"></div>
       <div class="col"></div>
       <div class="col box">
            <div class="card" style="width: 150px; height: 150px;">
                <img src="public/HomeIcons/Droits.png" class="card-img-top" >
              <div class="card-body">
                 <h5 class="card-title text-end">حقوق الوصل</h5>
                 <a href="Droits.php" class="btn btn-primary">زيارة الصفحة</a>
              </div>
            </div>
       </div>
       <div class="col box">
            <div class="card" style="width: 150px; height: 150px;">
                <img src="public/HomeIcons/Employee.png" class="card-img-top" >
              <div class="card-body">
                 <h5 class="card-title text-end">الموظفون</h5>
                 <a href="Personnels.php" class="btn btn-primary">زيارة الصفحة</a>
              </div>
            </div>
        </div>
         <div class="col box">
            <div class="card" style="width: 150px; height: 150px;">
                <img src="public/HomeIcons/Directions.png" class="card-img-top" >
              <div class="card-body">
                 <h5 class="card-title">الإدارات</h5>
                 <a href="Directions.php" class="btn btn-primary">زيارة الصفحة</a>
              </div>
            </div>
         </div>
    </div>
</div>

<?php 
   $content= ob_get_clean();
   require "template.php";
?> 