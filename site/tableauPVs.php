<?php 
   require "Manager.class.php";
   $pvManager = new Manager;
   $pvManager->chargementPVs();


   ob_start();
?> 
    <div id="contenu" style="background-color:white;" style="height: 1500px;">
        <div class="row">
         <div class="col"></div>
            <div class="col-12 col-md-4"><h3 class="text-end" id="p" style="color: white;">محاضر الجلسات</h3></div>
        </div>
        <div class="container">
          <table id="myTable" class=" text-end " style="margin-top:30px;">
            <thead>
             <tr class="table-dark ">
                <th colspan="2">التصرف</th>
                <th>محضر الجلسة</th>
                <th>التاريخ</th>
                <th>الإدارات</th>
                <th >المعرف</th>
             </tr>
            </thead>
            <tbody>
              <?php for($i=0;$i<count($pvManager->getPVs());$i++):?>
                <tr class="text-end">
                  <td class="align-middle" ><a href="" class="btn btn-warning">تعديل</a></td>
                  <td class="align-middle"><a href="" class="btn btn-danger">حذف</a></td>
                  <td class="align-middle"><a href="#"><img src="public/pdf.png" width="60"></a></td>
                  <td class="align-middle" ><?= $pvManager->getPVs()[$i]->getDatePV();?></td>
                  <td class="align-middle"><?= $pvManager->getPVs()[$i]->getAdministration();?></td>
                  <td class="align-middle"><?= $pvManager->getPVs()[$i]->getId_PV();?></td>
                </tr>
            </tbody>
           <?php endfor; ?>
          </table>
        </div>
    </div>
<?php 
   $content= ob_get_clean();
   require "template.php";
?> 