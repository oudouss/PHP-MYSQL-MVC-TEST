<h1 id="mydesc" class ="text-center">Liste des Dons</h1>
<table class="table table-striped" aria-describedby="mydesc">
  <thead class="thead-dark">
  <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Type</th>
      <th scope="col">Donneur</th>
      <th scope="col">Téléphone</th>
    </tr>
  </thead>
  <tbody>
    <?php
    /** @var \App\Models\Order $order */
    if ($dons) {
        foreach ($dons as $don) { ?>
        <tr>
            <td><?= $don['id'] ; ?></td>
            <td><?= $don['don_name'] ; ?></td>
            <td><?= $don['don_type']; ?></td>
            <td><?= $don['full_name']; ?></td>
            <td><?= $don['phone_number']; ?></td>
        </tr>
    <?php }
    } ?>
  </tbody>
</table>


