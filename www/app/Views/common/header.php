<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark justify-content-center">
    <a class="navbar-brand" href="/">PHP TRAINIG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a class="nav-link" href="/index.php/dons">List des Dons</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/index.php/add-donner">Ajouter Donneur</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/index.php/add-donation">Faire un Don</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action='/index.php/dons'>
            <div class="input-group mr-sm-4 my-2 my-sm-0">
                <input type="text" name="search" class="form-control" placeholder="Rechercher doneur...">
                <div class="input-group-append">
                    <button type="submit" name="searchSubmit" class="input-group-text"><em class="fas fa-search"></em></button>
                </div>
            </div>
        </form>
    </div>
</nav>
