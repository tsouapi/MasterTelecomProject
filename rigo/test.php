 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <style type="text/css">
    body{
      background-color: red;
    }
 </style>
 </head>
 <body>
 

 
 <form>
   <!-- Horizontal -->
   <div class="form-inline">
<div class="form-group ">
     
      </div>
<div class="form-group">
      <label for="">Downdlink</label>
      <input type="" id="" class="form-control" placeholder="">
</div>
<div class="form-group">
      <label for="" class="go">Uplink</label>
      <input type="" id="" class="form-control" placeholder="">
      </div>
<div class="form-group">
      <label for="">Downdlink</label>
      <input type="" id="" class="form-control" placeholder="">
      </div>
<div class="form-group">
      <label for="">Uplink</label>
      <input type="" id="" class="form-control" placeholder="">
      </div>
      <br>
<div class="form-group">
      <label for="">Downdlink</label>
      <input type="" id="" class="form-control" placeholder=""><br>
      </div>
      &nbsp
<div class="form-group">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
        <a class="btn btn-danger" href="#">Modifier</a>
   </div>
   </div>
</form>
<ul class="">
   <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong><font color="red"><span class="label label-pill label-danger count" style="border-radius:10px;"></span></font></strong> nouvelle réclamation</a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
      <script src="js/plugins/pace.min.js"></script>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
 </body>
 </html>