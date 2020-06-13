<?php
session_start();
include('fonctionPanier.php');
?>
        <div  class="w-75 p-1" id="container">
            <h1>Votre Panier</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Numero de Reference</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                          if(!empty($_SESSION['panier'])){
                          $nbArticles=count($_SESSION['panier']['num_ref']);
                          if ($nbArticles <= 0)
                          echo "<tr><td>Votre panier est vide </td></tr>";
                          else{
                            for($i=0; $i < $nbArticles; $i++){
                              echo "<tr>";
                              echo "<td>".htmlspecialchars($_SESSION['panier']['num_ref'][$i])."</ td>";
                              echo "<td>".htmlspecialchars($_SESSION['panier']['prix'][$i])."</td>";
                              echo "</tr>";
                            }
                            echo "<tr><td colspan=\"2\"> </td>";
                            echo "<td colspan=\"2\">";
                            echo "Total : ".MontantGlobal().'$';
                            echo "</td></tr>";
                          }
                        }else echo "<tr><td>Votre panier est vide </td></tr>";


                     ?>
                </tbody>
            </table>
            <?php
            if (!empty($_SESSION['panier'])){
            if(!empty($_SESSION['Client'])){ ?>
              <form action="insertCommande.php" method="POST">
                <div class="form-group">
                  <label for="name">Numero Carte Bleu</label>
                  <input type="text" class="form-control" placeholder="Ex : 2424242424242424" name="infosmoyen1"required>
                </div>
                <div class="form-group">
                  <label for="name">Date Expiration Carte Bleu</label>
                  <input type="text" class="form-control" placeholder="Ex : 26 08" name="infosmoyen2"required>
                </div>
                <div class="form-group">
                  <label for="name">Montant Payer</label>
                  <input type="text" class="form-control" placeholder="Ex : 500" name="montantpayer"required>
                </div>
             <button type="submit" class="btn btn-primary">Passer commande</button>
           <?php }
           else echo '<p class="text-left">Vous devez etre connecter en tant que client ou vous inscrire sur notre site pour passer une commande.</p>';
          }
           ?>
</div>
