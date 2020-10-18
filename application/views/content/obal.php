<div class="container">
  <table class="table">
  <thead>
    <tr>
   <th scope="col"><b style="color: blue;"> <p style="text-align: left"> Název Knihy</b></th></p>
   <th scope="col"><b style="color: blue;"><p style="text-align: right">Obal Knihy</th></b></th></p>
 </tr>
  </thead>
  <tbody>
 <?php foreach($knihy as $k):?>
 <tr>
 <td>
  <?php echo $k->nazev_knihy;?>       
 </td>
  <td> 
 <p style="text-align: right"> <img src=<?php echo $k->obal;?>></p>
 </td>
 </tr>
<?php endforeach;?>
  </tbody>
 </table>
</div>