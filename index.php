<?php
require_once('functions.php'); // garante que o arquivo foi incluido uma vez so
include_once('header.php'); //  inclue header na pagina
?>


<main class="container">
  <h1>controle de estoque</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Qtd Minima</th>
        <th>Status</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>

      <?php

      foreach ($produtos as $indice => $valor) {
        // if($valor["estoque"] < $valor["min"]) {
        //   $class = "vermelho";
        // } else {
        //   $class = "";
        // }

        $class = ($valor["estoque"] < $valor["min"]) ? "vermelho" : "";

        echo "<tr class='$class'>";
        echo "<td>" . $valor["nome"] . "</td>";
        echo "<td> R$" . $valor["preco"] . "</td>";
        echo "<td>" . $valor["estoque"] . "</td>";
        echo "<td>" . $valor["min"] . "</td>";
        echo "<td>" . ($valor["status"] ? "Ativo" : "Desativado") . "</td>";
        echo "<td> R$" . number_format(totalProduto($valor['preco'], $valor['estoque']), 2, ',', '.') . "</td>"; //2 permite escrever em reais e centavos
        echo "</tr>";
      }

      ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">
          Total em estoque
        </td>
        <td colspan="3" class="text-right">
          <?php echo "R$" . totalEstoque(); ?>
        </td>
      </tr>
    </tfoot>
  </table>
</main>

<?php
include_once('footer.php');
?>