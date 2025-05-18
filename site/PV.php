<?php 
   require "Manager.class.php";
   $connection = new Manager;
   ob_start();
?> 
 
  <div id="contenu" style="background-color:white;" style="height: 1500px;">
   <form action="P.php" method="post">
        <div class="container" id="republique" >
        <img src="https://www.culture.gov.tn/wp-content/uploads/2023/10/flagTunisia.png" width="22" height="14" class="my-1 rounded-3">
        <h1>الجمهورية التونسية</h1>
     </div>
     <div class="spacer"></div>
     <div class="container text-end p-2 rounded-1" style="background-color:#D4AF37;">
        <input type="text"  name="direction" id="dir" class="text-end rounded-2 "  >&nbsp;&nbsp;
        :<label for="dir" style="font-size: medium;">الإدارة</label>&nbsp;&bull;&nbsp;&nbsp;
     </div>
     <div class="container d-flex "><img src="public/images/pv3.jpg" class="img-fluid"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="container">
           <div class="row text-end p-2">
               <div class="col-12 col-md-6"></div> 
               <div class="col-6 col-md-4"><input type="date" name="date" id="dt" class="form-control text-end rounded-2" style="background: transparent;"></div>
               <label for="dt" class="col-6 col-md-2 text-end" style="font-size: medium;">: التاريخ •</label>
           </div>
           <div class="row text-end p-2">
               <div class="col-12 col-md-6"></div> 
               <div class="col-6 col-md-4" ><input type="text" name="lieu" id="l" class="form-control text-end rounded-2"></div>
               <label for="l" class="col-6 col-md-2 text-end" style="font-size: medium;">: المكان •</label>
           </div>
           <div class="row text-end p-2">
               <div class="col-12 "></div> 
               <div class="col-6 col-md-10"><textarea id="suj" name="sujet" rows="2" cols="12" class="text-end"></textarea></div>
               <label for="suj" class="col-6 col-md-2 text-end" style="font-size: medium;">: الموضوع •</label>
           </div>
     </div>
     <div class="container text-end p-4" style="color:#ea0000;">
          <div>الإطار العام &nbsp;<input type="checkbox" name="cadre general" id="cg" class=" text-end rounded-2" value="false"></div>
          <div class="col-6 col-md-12 py-3"><textarea id="c" name="cadre" rows="4" cols="12" class="text-end" ></textarea></div>
     </div>
   <div class="container"><h3 class="text-end mx-2">الحضور</h3></div>
   <div class="container bordered_section">
    <div class="row">
        <div class="col-12 col-md-11 d-flex flex-wrap">
            <div class="col-12 col-md-4">
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="direction2" id="dir2" class="form-control text-end rounded-2">
                    </div>
                    <label for="dir2" class="col-4 col-md-4 text-end" style="font-size: medium;">: الإدارة •</label>
                </div>
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="telephone" id="tlf" class="form-control text-end rounded-2">
                    </div>
                    <label for="tlf" class="col-4 col-md-4 text-end" style="font-size: medium;">: الهاتف •</label>
                </div>
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="adresse_mail" id="ad" class="form-control text-end rounded-2">
                    </div>
                    <label for="ad" class="col-4 col-md-4 text-end" style="font-size: medium;">: البريد •</label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="statut" id="st" class="form-control text-end rounded-2">
                    </div>
                    <label for="st" class="col-4 col-md-4 text-end" style="font-size: medium;">: الصفة •</label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="nom_prenom" id="np" class="form-control text-end rounded-2">
                    </div>
                    <label for="nom_prenom" class="col-4 col-md-4 text-end" style="font-size: medium;">: الإسم و اللقب •</label>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-1 text-center">
            <div class="add_mince">
                <img src="public/images/add.png" width="20" height="20" class="my-1">
                <img src="public/images/minus.png" width="20" height="20" class="my-1">
            </div>
        </div>
      </div>
   </div>
   <div class="container">
     <h3 class="text-end mx-2" style="margin-top: 15px;">النقاط المثارة</h3>
   </div>
   <div class="container bordered_section">
       <div class="row">

           <div class="col-12 col-md-11">
               <div class="row text-end p-2">
                
                   <div class="col-12 col-md-9">
                       <textarea id="title" name="tit" class="form-control text-end"></textarea>
                   </div>
                   <label for="tit" class="col-12 col-md-3 text-end" style="font-size: medium;">: العنوان •</label>
               </div>
               <div class="row text-end p-2">
                   <div class="col-12 col-md-9">
                       <textarea id="procedures" name="proc" rows="5" class="form-control text-end"></textarea>
                   </div>
                   <label for="proc" class="col-12 col-md-3 text-end" style="font-size: medium;">: الإجراءات و التوصيات •</label>
               </div>
           </div>
           <div class="col-12 col-md-1 text-center">
            <div class="add_mince">
                <img src="public/images/add.png" width="20" height="20" class="my-1">
                <img src="public/images/minus.png" width="20" height="20" class="my-1">
            </div>
        </div>
       </div>
   </div>
   <div class="container"><h3 class="text-end mx-2" style="margin-top: 15px;">المكلف بالتنفيذ</h3></div>
   <div class="container bordered_section" style="margin-bottom: 30px ;">
    <div class="row">
        <div class="col-12 col-md-11 d-flex flex-wrap">
            <div class="col-12 col-md-4">
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="suivi" id="suiv" class="form-control text-end rounded-2">
                    </div>
                    <label for="suiv" class="col-4 col-md-4 text-end" style="font-size: medium;">: المتابعة•</label>
                </div>
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="remarques" id="rq" class="form-control text-end rounded-2">
                    </div>
                    <label for="rq" class="col-4 col-md-4 text-end" style="font-size: medium;">: الملاحظات•</label>
                </div>
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="date" name="delais" id="dl" class="form-control text-end rounded-2" style="background: transparent;">
                    </div>
                    <label for="dl" class="col-4 col-md-4 text-end" style="font-size: medium;">: الأَجال•</label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="direction3" id="dir3" class="form-control text-end rounded-2">
                    </div>
                    <label for="dir3" class="col-4 col-md-4 text-end" style="font-size: medium;">: الإدارة •</label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row text-end p-2">
                    <div class="col-8 col-md-8">
                        <input type="text" name="nom_prenom2" id="np2" class="form-control text-end rounded-2">
                    </div>
                    <label for="np2" class="col-4 col-md-4 text-end" style="font-size: medium;">: الإسم و اللقب •</label>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-1 text-center">
            <div class="add_mince">
                <img src="public/images/add.png" width="20" height="20" class="my-1">
                <img src="public/images/minus.png" width="20" height="20" class="my-1">
            </div>
        </div>
      </div>
   </div>
      <div class="container d-flex justify-content-center" style="margin-bottom: 20px;">
            <input type="submit" value="بعث" style="background-color: #016857;color:white;" class="rounded mx-1">
        
            <input type="reset" value="حذف" style="background-color: #c10000;color:white;" class="rounded">
      </div>
    </form>
   </div>
    


<?php 
   $content= ob_get_clean();
   require "template.php";
?> 