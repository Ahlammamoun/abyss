<div class="container_specie">
    <div class="specie">
        <img class="specie" src="<?= $viewData['specie_object']['picture'] ?>" alt="Chat domestique">
    </div>
    <h1><?= $viewData['specie_object']['name'] ?></h1>
    <h2>Information</h2>
    <p><?= $viewData['specie_object']['description'] ?></p>
    <h2>Caractéristiques :</h2>
    <ul>

        <?= $viewData['specie_object']['type_name'] ?>
        <!-- <li>Esperance de vie : 12 à 20 ans</li>
            <li>Poids moyen : 3 à 7 kg</li>
            <li>Taille moyenne : 23 à 25 cm (hauteur au garrot)</li>
            <li>Alimentation : carnivore, régime à base de viande</li>
            <li>Tempérament : indépendant, joueur, affectueux</li> -->
    </ul>
    <h2>Habitat</h2>
    <p><?= $viewData['specie_object']['category_name'] ?></p>
</div>