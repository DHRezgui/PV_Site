<?php 
   require "Manager.class.php";
   $dirManager = new Manager;
   $dirManager->chargementDirections();
   ob_start();
?> 
    <div id="contenu" style="background-color:white;padding:5px;" style="height: 1500px;">
      <div class="row">
         <div class="col"></div>
         <div class="col-12 col-md-4"><h3 class="text-end" id="par" style="color: white;background-color: #1F5A87;"> الإدارات</h3></div>
      </div>
      <div class="container">
             <table class="table text-end " style="margin-top:30px;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
              <tr class="table-dark ">
                 <th colspan="3">التصرف</th>
                 <th>الرقم التسلسلي</th>
                 <th >إسم الإدارة</th>
              </tr>
              <?php for($i=0;$i<count($dirManager->getDirections());$i++):?>
                <tr class="text-end">
                  <td class="align-middle"><a href="" class="btn btn-success">إضافة</a></td>
                  <td class="align-middle" ><a href="" class="btn btn-warning">تعديل</a></td>
                  <td class="align-middle"><a href="" class="btn btn-danger">حذف</a></td>
                  <td class="align-middle"><?= $dirManager->getDirections()[$i]->getCode_chrono();?></td>
                  <td class="align-middle"><?= $dirManager->getDirections()[$i]->getNom_direction();?></td>
                </tr>
              <?php endfor; ?>
             </table>
      </div>
<?php 
   $content= ob_get_clean();
   require "template.php";
?> 