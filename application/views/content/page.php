<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col"><b style="color: blue;">Název Knihy</b></th>
      <th scope="col"><b style="color: blue;">Jméno Autora</b></th>
      <th scope="col"><b style="color: blue;">Obal</b></th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($knihy as $k): ?>
      <tr>
            <td>
                <?php echo $k->nazev_knihy;?>       
            </td>
            <td> 
                <?php echo $k->autor; ?>
            </td>
            <td>
            <a href="<?php echo base_url("obal/".$k->id_knihy);?>">Klikněte zde</a>
            </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>