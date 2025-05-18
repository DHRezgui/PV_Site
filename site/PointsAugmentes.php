<?php 
   require "Manager.class.php";
   $ptManager = new Manager;
   $ptManager->chargementPoints();
   $pvManager = new Manager;
   $pvManager->chargementPVs();
   ob_start();
?> 
    <div id="contenu" style="background-color:white;padding:5px;">
       <div class="row">
           <div class="col"></div>
           <div class="col-12 col-md-4"><h3 class="text-end" id="par" style="color: white;background-color: #c10000;">  النقاط المثارة</h3></div>
       </div>
       <br><br><br>
         <?php for($j=0;$j<count($pvManager->getPVs());$j++):?>
               <div style="height: 40px;background-color: #c10000;margin-bottom:60px;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="rounded"><h3 style="display: flex;justify-content:center;color:white;"><?= $j+1 ?> محضر الجلسة عدد </h3></div> 
               <section class="container" id="con">
                 <div class="row">
                     <div class="col text-end" style="margin-top: 31px;display: flex;align-items: center;justify-content:center;"><textarea class="text-end" readonly><?= $pvManager->getPVs()[$j]->getId_PV();?></textarea></div>
                     <div class="col text-end" id="par" style="margin-top: 30px;background-color: #D4AF37;"><label class="text-end">: معرف محضر الجلسة•</label></div>
                 </div>
                 <div class="row">
                     <div class="col text-end" style="margin-top: 31px;display: flex;align-items: center;justify-content:center;"><textarea class="text-end" readonly><?= $pvManager->getPVs()[$j]->getAdministration();?></textarea></div>
                     <div class="col text-end" id="par" style="margin-top: 30px;background-color: #D4AF37;"><label class="text-end">: الإدارة•</label></div>
                 </div>
                 <div class="row">
                     <div class="col text-end" style="margin-top: 31px;display: flex;align-items: center;justify-content:center;"><textarea class="text-end" readonly><?= $pvManager->getPVs()[$j]->getDatePV();?></textarea></div>
                     <div class="col text-end" id="par" style="margin-top: 30px;background-color: #D4AF37;"><label class="text-end">: التاريخ•</label></div>
                 </div>
                 <div class="row">
                     <div class="col text-end" style="margin-top: 31px;display: flex;align-items: center;justify-content:center;"><textarea class="text-end" readonly><?= $pvManager->getPVs()[$j]->getSujet();?></textarea></div>
                     <div class="col text-end" id="par" style="margin-top: 30px;background-color: #D4AF37;"><label class="text-end">: موضوع محضر الجلسة•</label></div>
                 </div>
                 <br>
                 <?php 
                    $k = 0;
                    for($i = 0; $i < count($ptManager->getPoints()); $i++): 
                  ?>
                      <?php if($pvManager->getPVs()[$j]->getId_PV() == $ptManager->getPoints()[$i]->getId_PV()): ?>
                        <section class="container" id="con">
                           <div class="row">
                               <div class="col"></div>
                               <div class=" text-end" id="par" style="margin-top: 20px;background-color: #016857;">
                                     <label class="text-end">: عنوان النقطة•</label>
                               </div>
                           </div>
                           <div class="row">
                               <div class=" text-end" style="margin-top: 15px;display: flex;align-items: center;justify-content:center;">
                                     <textarea class="text-end" readonly><?= $ptManager->getPoints()[$i]->getTitre(); ?></textarea>
                               </div>
                           </div>
                           <div class="row">
                              <div class="col"></div>
                               <div class=" text-end" id="par" style="margin-top: 20px;background-color: #016857;">
                                  <label class="text-end">: الإجراءات و التوصيات•</label>
                               </div>
                           </div>
                           <div class="row">
                               <div class=" text-end" style="margin-top: 15px;display: flex;align-items: center;justify-content:center;">
                                  <textarea class="text-end" rows="8" readonly><?= $ptManager->getPoints()[$i]->getProcedures_recommandations(); ?></textarea>
                               </div>
                           </div>
                           <div class="container d-flex justify-content-center my-3 rounded" style="background-color: #ccc;"><h3><?= ++$k ?></h3></div>
                        </section>
                      <?php endif; ?>
                 <?php endfor; ?>
                 <div class="container d-flex justify-content-center" style="margin-bottom: 40px;">
                      <input type="submit" value="تعديل" style="background-color: #D4AF37;color:white;" class="rounded mx-1">
                      <input type="reset" value="حذف" style="background-color: #c10000;color:white;" class="rounded">
                 </div>
               </section>
         <?php endfor; ?>
    </div>
<?php 
   $content= ob_get_clean();
   require "template.php";
?> 