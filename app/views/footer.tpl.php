<div class="trait"></div>
<footer class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="<?= $router->generate('main-home') ?>">Créatures des Abysses</a>

    <div class="container">
        <ul class="list-unstyled">
            <p class="type">Groupe</p>
            <?php foreach ($footerOrderType as $footertype) : ?>
                <li class="type"><a class="type" href="<?= $router->generate('type', ['id' => $footertype->getId()]) ?>"><?= $footertype->getName()?></a></li>
            <?php endforeach; ?>
        </ul>
        <ul class="list-unstyled">
            <p class="footer_espece">Espèce</p>
           <?php foreach ($specieObjects as $footerSpecie) : ?>
                <li class="specie"><a class="type" href="<?= $router->generate('specie', ['id' => $footerSpecie->getId()]) ?>"><?= $footerSpecie->getName()?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= $router->generate('main-home') ?>">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $router->generate('main-mention-legal') ?>">Mentions légales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</footer>


<!-- JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/app.js"></script>
</body>

</html>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>