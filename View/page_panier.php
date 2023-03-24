<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-esqiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier</title>
    <link rel="stylesheet" href="../View/css/page_panier.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body>
    <div class="contours">
        <div class="tables">
            <table align="center">
                <thead>
                    <tr>
                        <th>Produits</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="flex-box">
                                <div class="left">
                                    <img src="../image/logo.jpg" alt="Produit" class="produit">
                                </div>
                                <div class="right">
                                    <h1>Produit</h1>
                                    <p>Infos</p>
                                </div>
                            </div>
                        </td>
                        <td>1</td>
                        <td>00,00 €</td>
                        <td>
                            <img src="../image/poubelle.png" alt="Poubelle" class="poubelle">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex-box">
                                <div class="left">
                                    <img src="../image/logo.jpg" alt="Produit" class="produit">
                                </div>
                                <div class="right">
                                    <h1>Produit</h1>
                                    <p>Infos</p>
                                </div>
                            </div>
                        </td>
                        <td>1</td>
                        <td>00,00 €</td>
                        <td>
                            <img src="../image/poubelle.png" alt="Poubelle" class="poubelle">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex-box">
                                <div class="left">
                                    <img src="../image/logo.jpg" alt="Produit" class="produit">
                                </div>
                                <div class="right">
                                    <h1>Produit</h1>
                                    <p>Infos</p>
                                </div>
                            </div>
                        </td>
                        <td>1</td>
                        <td>00,00 €</td>
                        <td>
                            <img src="../image/poubelle.png" alt="Poubelle" class="poubelle">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex-box">
                                <div class="left">
                                    <img src="../image/logo.jpg" alt="Produit" class="produit">
                                </div>
                                <div class="right">
                                    <h1>Produit</h1>
                                    <p>Infos</p>
                                </div>
                            </div>
                        </td>
                        <td>1</td>
                        <td>00,00 €</td>
                        <td>
                            <img src="../image/poubelle.png" alt="Poubelle" class="poubelle">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="btn-box">
            <a href="../Controller/produits.php" class="accueil-btn" onclick="toggleMenu();">ACCUEIL</a>
            <a href="../View/page_panier.php" class="achat-btn" onclick="toggleMenu();">JE VALIDE MON ACHAT</a>
        </div>
        <br>
        <p></p>
    </div>
  </body>
</html>