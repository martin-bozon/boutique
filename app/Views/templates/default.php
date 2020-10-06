<?php

use Core\Auth\DBAuth;

$app = App::getInstance();
$auth = new DBAuth($app->getDb());

<<<<<<< HEAD
=======
$isLogged = \App\Entity\UserEntity::isLogged();
$isAdmin = \App\Entity\UserEntity::isAdmin();
>>>>>>> test

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App::getInstance()->title; ?></title>
<<<<<<< HEAD
=======
    <!--Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
>>>>>>> test
    <!-- Materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize and CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Js & Jquery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../public/js/script.js"></script>

</head>
<body>
<header>
    <!-- Dropdown Categories nav -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a class='teal-text' href='index.php?p=categories.index'>Voir les catégories</a></li>
        <li><a class='teal-text' href='index.php?p=products.index'>Tous les produits</a></li>
        <li class='divider'></li>
        <div class="row">
            <div class="col s6">
                <ul>
                    <h6>FEMME</h6>
                    <?php
                    foreach ($categories as $category) : ?>
                        <?php
                        if ($category->gender == 'Femme') : ?>
                            <li>
                                <a href='index.php?p=products.category&id=<?= $category->id ?>'><?= $category->nom ?></a>
                            </li>
                        <?php
                        endif ?>
                    <?php
                    endforeach; ?>
                </ul>
            </div>
            <div class="col s6">
                <ul>
                    <h6>HOMME</h6>
                    <?php
                    foreach ($categories as $category) : ?>
                        <?php
                        if ($category->gender == 'Homme') : ?>
                            <li>
                                <a href='index.php?p=products.category&id=<?= $category->id ?>'><?= $category->nom ?></a>
                            </li>
                        <?php
                        endif; endforeach; ?>
                </ul>
            </div>
        </div>
    </ul>
    <!-- Dropdown Categories nav MOBILE-->
    <ul id="dropdown3" class="dropdown-content">
        <li><a href='index.php?p=categories.index'>Voir les catégories</a></li>
        <li><a href='index.php?p=products.index'>Tous les produits</a></li>
        <li class='divider'></li>
        <li>
            <ul>
                <li><em>Femme</em></li>
                <?php
                foreach ($categories as $category) : ?>
                    <?php
                    if ($category->gender == 'Femme') : ?>
                        <li>
                            <a href='index.php?p=products.category&id=<?= $category->id ?>'><?= $category->nom ?></a>
                        </li>
                    <?php
                    endif ?>
                <?php
                endforeach; ?>
            </ul>
        </li>
        <li>
            <ul>
                <li><em>Homme</em></li>
                <?php
                foreach ($categories as $category) : ?>
                    <?php
                    if ($category->gender == 'Homme') : ?>
                        <li>
                            <a href='index.php?p=products.category&id=<?= $category->id ?>'><?= $category->nom ?></a>
                        </li>
                    <?php
                    endif; endforeach; ?>
            </ul>
        </li>
    </ul>
    <!-- Dropdown Administrateur -->
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="index.php?p=admin.categories.index">Catégories</a></li>
        <li><a href="index.php?p=admin.subcategories.index">Sous-catégories</a></li>
        <li><a href="index.php?p=admin.products.index">Produits</a></li>
        <li class="divider"></li>
        <li><a href="index.php?p=admin.users.index">Utilisateurs</a></li>
    </ul>
    <!-- Dropdown Administrateur MOBILE -->
    <ul id="dropdown4" class="dropdown-content darken-3-text">
        <li><a href="index.php?p=admin.categories.index">Catégories</a></li>
        <li><a href="index.php?p=admin.subcategories.index">Sous-catégories</a></li>
        <li><a href="index.php?p=admin.products.index">Produits</a></li>
        <li class="divider"></li>
        <li><a href="index.php?p=admin.users.index">Utilisateurs</a></li>
    </ul>
    <!-- nav -->
    <nav class="teal lighten-5">
        <div class="nav-wrapper container teal lighten-5">
<<<<<<< HEAD
            <a href="#!" id="link_logo_header" class="brand-logo"><img class="logo_header"
=======
            <a href="index.php" id="link_logo_header" class="brand-logo"><img class="logo_header"
>>>>>>> test
                                                                       src="../app/src/images/CoqEthiqueLogo.png"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="text-darken-3">
<<<<<<< HEAD
                    <a class="text-darken-3 dropdown-trigger" href="#!" data-target="dropdown1">Catégories
=======
                    <a class="navbar-brand text-darken-3 dropdown-trigger" href="#!" data-target="dropdown1">Catégories
>>>>>>> test
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a class="dropdown-trigger darken-3-text <?= $auth->logged() && $auth->admin() ? '' : 'd-none' ?>"
=======
                    <a class="navbar-brand dropdown-trigger darken-3-text <?= $isLogged && $isAdmin ? '' : 'd-none' ?>"
>>>>>>> test
                       href="#!"
                       data-target="dropdown2">Espace administrateur
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="index.php?p=users.account"
                       class="navbar-brand <?= $auth->logged() ? '' : 'd-none' ?> align-items-center">
=======
                    <a href="index.php?p=users.profil"
                       class="navbar-brand <?= $isLogged ? '' : 'd-none' ?> align-items-center">
>>>>>>> test
                        Mon compte
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="index.php?p=users.basket"
                       class="navbar-brand <?= $auth->logged() ? '' : 'd-none' ?> align-items-center">
                        <i class="material-icons left">shopping_cart</i>Panier
                    </a>
                </li>
                <li>
                    <a href="index.php?p=users.login"
                       class="navbar-brand <?= $auth->logged() ? 'd-none' : '' ?> align-items-center">
=======
                    <a href="index.php?p=users.panier"
                       class="navbar-brand align-items-center">
                        <i class="material-icons left">shopping_cart</i><span class="disappear1150">Panier</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?p=users.connexion"
                       class="navbar-brand <?= $isLogged ? 'd-none' : '' ?> align-items-center">
>>>>>>> test
                        Se connecter
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a href="index.php?p=users.register"
                       class="navbar-brand <?= $auth->logged() ? 'd-none' : '' ?> align-items-center">
                        S'inscrire
                    </a>
                </li>
=======
                    <a href="index.php?p=users.inscription"
                       class="navbar-brand <?= $isLogged ? 'd-none' : '' ?> align-items-center">
                        S'inscrire
                    </a>
                </li>
                <li>
                    <a href="index.php?p=users.disconnect"
                       class="navbar-brand <?= $isLogged ? '' : 'd-none' ?> align-items-center">
                        <i class="material-icons left">exit_to_app</i>
                        <span class="disappear1150">Se déconnecter</span>
                    </a>
                </li>
>>>>>>> test
            </ul>
        </div>
    </nav>
    <!-- nav mobile -->
    <ul class="sidenav" id="mobile-demo">
<<<<<<< HEAD
        <li><a href="#!" class="brand-logo center"><img class="logo_header2" src="../app/src/images/CoqEthiqueLogo.png"></a>
        </li>
        <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown3">Catégories<i
                        class="material-icons right">arrow_drop_down</i></a>
        <li class="<?= $auth->logged() && $auth->admin() ? '' : 'd-none' ?>">
=======
        <li><a href="index.php" class="brand-logo center"><img class="logo_header2" src="../app/src/images/CoqEthiqueLogo.png"></a>
        </li>
        <li>
            <a class="navbar-brand dropdown-trigger" href="#!" data-target="dropdown3">Catégories<i
                        class="material-icons right">arrow_drop_down</i></a>
        <li class="<?= $isLogged && $isAdmin ? '' : 'd-none' ?>">
>>>>>>> test
            <a class="dropdown-trigger" href="#!"
               data-target="dropdown4">Espace administrateur<i
                        class="material-icons right">arrow_drop_down</i></a>
        </li>
<<<<<<< HEAD
        <li class="<?= $auth->logged() ? '' : 'd-none' ?>">
=======
        <li class="<?= $isLogged ? '' : 'd-none' ?>">
>>>>>>> test
            <a href="index.php?p=users.account"
               class="navbar-brand align-items-center">
                Mon compte
            </a>
        </li>
<<<<<<< HEAD
        <li class="<?= $auth->logged() ? '' : 'd-none' ?>">
            <a href="index.php?p=users.basket"
               class="navbar-brand align-items-center">
                <i class="material-icons">shopping_cart</i>
            </a>
        </li>
        <li class="<?= $auth->logged() ? 'd-none' : '' ?>">
            <a href="index.php?p=users.login"
=======
        <li class="">
            <a href="index.php?p=users.panier"
               class="navbar-brand align-items-center">
                Panier
                <i class="material-icons right">shopping_cart</i>
            </a>
        </li>
        <li class="<?= $isLogged ? 'd-none' : '' ?>">
            <a href="index.php?p=users.connexion"
>>>>>>> test
               class="navbar-brand align-items-center">
                Se connecter
            </a>
        </li>
<<<<<<< HEAD
        <li class="<?= $auth->logged() ? 'd-none' : '' ?>">
            <a href="index.php?p=users.register"
               class="navbar-brand align-items-center">
                S'inscrire
=======
        <li class="<?= $isLogged ? 'd-none' : '' ?>">
            <a href="index.php?p=users.inscription"
               class="navbar-brand align-items-center">
                S'inscrire
            </a
        </li>
        <li class="<?= $isLogged ? '' : 'd-none' ?>">
            <a href="index.php?p=users.disconnect"
               class="navbar-brand align-items-center">
                Se déconnecter
                <i class="material-icons right">exit_to_app</i>
>>>>>>> test
            </a>
        </li>
    </ul>
</header>
<body>
<main role="main">

    <section class="container">
<<<<<<< HEAD
=======
        <?= \Core\Alert\Alert::viewAlert(); ?>
>>>>>>> test
        <?= $content; ?>
    </section>

</main>
</body>
<footer class="text-muted">
</footer>
</html>