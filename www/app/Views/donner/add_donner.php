<div class="container col-sm-6">
    <div class="card">
        <div class="card-header text-center">
            <h1 class="card-title">Ajouter Donneur</h1>
            <?php if($message) { ?>
                <div class="alert alert-success" role="alert"><?=$message?></div>
            <?php } ?>
            <p class="card-text">Merci pour votre don.</p>
        </div>
        <div class="card-body">
            <form method="post" action="/index.php/add-donner">
                <div class="form-group">
                    <label for="name" class="form-label">Nom Complet</label>

                    <input type="text" class="form-control" name="full_name" id="name"  placeholder="Saisir votre nom et prénom" required>

                </div>
                <div class="form-group">
                    <label for="phoneNUmber" class="form-label">Numéro de Téléphone</label>

                    <input type="text" class="form-control" name="phoneNUmber" id="phoneNUmber" placeholder="Saisir votre numéro de téléphone"  required>

                </div>
                <div class="form-group">
                    <button type="submit" name="DonnerSubmit" class="btn btn-secondary btn-lg btn-block">Valider</button>
                </div>
            </form>
        </div>   
        <div class="card-footer text-muted text-center">
        Vous vous sentez généreux aujourd'hui? <a class="card-lin mr-sm-4 my-2 my-sm-4" href="/index.php/add-donation">Faire un don!</a>
        </div>
    </div>
</div>