<div class="container">
    <!-- Contenu de votre page -->
    <h1></h1>
    <div class="categories">
        <ul>
            <?php foreach ($categoryList as $category) : ?>
                <li>
                    <a class="type" href="<?= $router->generate('category', ['id' => $category->getId()]) ?>">
                        <?= $category->getName() ?>
                    </a>
                    <a href="<?= $router->generate('category', ['id' => $category->getId()]) ?>">
                        <img src="<?= $category->getPicture() ?>" alt="Description de l'image 1">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
