<h4 class="center"><?= $category->gender ?> | <?= $category->nom ?></h4>
<div class="row">
    <div class="col s12 m9">
        <div class="row">
            <?php
            if (!empty($products)):
                foreach ($products as $product): ?>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <a class="link_card_hover" href="<?= $product->url ?>">
                                    <img src="../app/src/images/<?= $product->image_path ?>" alt="<?= $product->nom ?>">
                                    <span class="card-title card_hover"><?= $product->nom ?></span>
                                    <button class="btn-floating btn-large halfway-fab"><?= $product->prix ?> €</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
            else : ?>
                <p>Pas de produit disponible :(</p>
            <?php
            endif; ?>
        </div>
    </div>

    <div class="col s12 m3">
        <ul class="collection with-header">
            <li class="collection-header center">Femme</li>
            <?php
            foreach ($categories as $category2) {
                if ($category2->gender == 'Femme') { ?>
                    <li class="collection-header relative <?= $category2->url == 'index.php?p=products.category&id=' . $category->id ? 'bg_green' : '' ?> ">
                        <a href=" <?= $category2->url; ?>">
                            <h6><?= $category2->nom ?></h6>
                            <i class="material-icons icon_see <?= $category2->url == 'index.php?p=products.category&id=' . $category->id ? '' : 'd-none' ?>">remove_red_eye</i>
                        </a>
                    </li>
                    <?php
                    foreach ($subcategories as $subcategory) {
                        if ($subcategory->id_categories == $category2->id) { ?>
                            <li class="collection-item">
                                <a href="<?= $subcategory->url; ?>"><?= $subcategory->nom ?></a>
                            </li>
                            <?php
                        }
                    } ?>
                    <?php
                } ?>
                <?php
            } ?>
            <li class="collection-header center">Homme</li>
            <?php
            foreach (
                $categories
                as $category2
            ) {
                if ($category2->gender == 'Homme') { ?>
                    <li class="collection-header relative <?= $category2->url == 'index.php?p=products.category&id=' . $category->id ? 'bg_green' : '' ?> ">
                        <a href=" <?= $category2->url; ?>">
                            <h6><?= $category2->nom ?></h6>
                            <i class="material-icons icon_see <?= $category2->url == 'index.php?p=products.category&id=' . $category->id ? '' : 'd-none' ?>">remove_red_eye</i>
                        </a>
                    </li>
                    <?php
                    foreach ($subcategories as $subcategory) {
                        if ($subcategory->id_categories == $category2->id) { ?>
                            <li class="collection-item">
                                <a href="<?= $subcategory->url; ?>"><?= $subcategory->nom ?></a>
                            </li>
                            <?php
                        }
                    }
                }
            } ?>
        </ul>
    </div>
</div>