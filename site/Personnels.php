<?php 
   require "Manager.class.php";
   $perManager = new Manager;
   $perManager->chargementPersonnels();
   ob_start();
?>
    <div id="contenu" style="background-color:white;padding:5px;" style="height: 1500px;">
      <div class="row">
         <div class="col"></div>
         <div class="col-12 col-md-4"><h3 class="text-end" id="par" style="color: white;background-color: #6D348A;"> الموظفون</h3></div>
      </div>
      <div class="container">
          <table class="table text-end " style="margin-top:30px;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
           <tr class="table-dark ">
              <th colspan="3">التصرف</th>
              <th>الرقم التسلسلي للإدارة</th>
              <th>حقوق الوصول</th>
              <th> البريد الإلكتروني</th>
              <th>رقم الهاتف</th>
              <th>الصفة</th>
              <th>الاسم و اللقب</th>
              <th >رقم التسجيل</th>
           </tr>
           <?php for($i=0;$i<count($perManager->getPersonnels());$i++):?>
             <tr class="text-end">
               <td class="align-middle"><a href="" class="btn btn-success">إضافة</a></td>
               <td class="align-middle" ><a href="" class="btn btn-warning">تعديل</a></td>
               <td class="align-middle"><a href="" class="btn btn-danger">حذف</a></td>
               <td class="align-middle"><?= $perManager->getPersonnels()[$i]->getCode_chrono_dir();?></td>
               <td class="align-middle"><?= $perManager->getPersonnels()[$i]->getPrivilege();?></td>
               <td class="align-middle"><?= $perManager->getPersonnels()[$i]->getAdresse_mail();?></td>
               <td class="align-middle"><?= $perManager->getPersonnels()[$i]->getNumero_tlf();?></td>
               <td class="align-middle"><?= $perManager->getPersonnels()[$i]->getStatut();?></td>
               <td class="align-middle"><?= $perManager->getPersonnels()[$i]->getNom_Prenom();?></td>
               <td class="align-middle"><?= $perManager->getPersonnels()[$i]->getMatricule();?></td>
             </tr>
           <?php endfor; ?>
          </table>
        </div>
    </div>
<?php 
   $content= ob_get_clean();
   require "template.php";
?> 