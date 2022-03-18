<div class="container col-sm-6">
    <div class="card">
        <div class="card-header text-center">
            <h1 class="card-title">Faire un Don</h1>
            <?php if($message) { ?>
                <div class="alert alert-success" role="alert"><?=$message?></div>
            <?php } ?>
            <p class="card-text">Merci pour votre don!</p>
        </div>
        <div class="card-body">
            <form method="post" action="/index.php/add-donation">
                <div class="form-group">
                    <label for="name" class="form-label">Nom du Don</label>

                    <input type="text" class="form-control" name="name" id="name"  placeholder="Saisir votre nom de don" required>

                </div>
                <div class="form-group">
                    <label for="type">Type de Don</label>
                    <select id="type" name="type" class="form-control">
                        <option selected="true" disabled="disabled">Merci de choisir le type de votre don</option>
                        <option value="Money">Somme d'argent</option>
                        <option value="Clothes">Vêtements</option>
                        <option value="Food">Produits alimentaire</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="DonSubmit" class="btn btn-secondary btn-lg btn-block">Valider</button>
                </div>
            </form>
        </div>   
        <div class="card-footer text-muted text-center">
        Voulez-vous faire un don aujourd'hui? <a class="card-lin mr-sm-4 my-2 my-sm-4" href="/index.php/add-donner">Devener donneur!</a>
        </div>
    </div>
</div>