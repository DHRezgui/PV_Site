<?php 
   require "Manager.class.php";
   $participantManager = new Manager;
   $participantManager->chargementParticipants();
   ob_start();
?> 
   <div id="contenu" style="background-color:white;padding:5px;" style="height: 1500px;">
      <div class="row">
         <div class="col"></div>
         <div class="col-12 col-md-4"><h3 class="text-end" id="par" style="color: white;background-color: #D4AF37;"> الحضور</h3></div>
      </div>
   </div>

<?php 
   $content= ob_get_clean();
   require "template.php";
?> 