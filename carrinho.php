<?php

include 'lib/format.php';

$products = [
  ['name' => 'Título do Produto 1', 'rating' => 3, 'value' => 9148, 'discount' => 10, 'installments' => 3, 'qtd' => 1, 'image' => 'product.png', 'delivery' => 'Receba até 10 de Novembro'],
  ['name' => 'Título do Produto 2', 'rating' => 2, 'value' => 9314, 'discount' => 20, 'installments' => 8, 'qtd' => 3, 'image' => 'product.png', 'delivery' => 'Receba até 22 de Novembro'],
  ['name' => 'Título do Produto 3', 'rating' => 1, 'value' => 8792, 'discount' => 23, 'installments' => 10, 'qtd' => 8, 'image' => 'product.png', 'delivery' => 'Receba até 12 de Dezembro'],
];

$items = count($products);
$installments = min(array_column($products, 'installments'));

foreach ($products as $i => $product) {
  $products[$i]['discounted'] = $product['value'] - $product['value'] * $product['discount'] / 100;
  $products[$i]['installments'] = $installments;
}

$total['value'] = array_sum(array_column($products, 'value'));
$total['discounted'] = array_sum(array_column($products, 'discounted'));

?>

<?php ob_start(); ?>

<main class="container my-5 bg-white p-5">
  <h1 class="mb-5 title">
    Meu carrinho
  </h1>
  <div class="table-responsive">
    <table class="table products">
      <thead>
        <tr>
          <th style="min-width: 300px;">Produto</th>
          <th style="min-width: 200px;">Qtd</th>
          <th style="min-width: 200px;">Entrega</th>
          <th style="min-width: 200px;">Preço</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product) : ?>
          <tr>
            <td>
              <div class="d-flex align-items-center">
                <div>
                  <img class="product-image" src="/images/<?= $product['image'] ?>" alt="produto" />
                </div>
                <div>
                  <p class="product-title"><?= $product['name'] ?></p>
                  <p class="product-rating">
                    <?php for ($i = 0; $i < $product['rating']; $i++) : ?>
                      <i class="bi bi-star-fill"></i>
                    <?php endfor ?>
                    <?php for ($i = $product['rating']; $i < 5; $i++) : ?>
                      <i class="bi bi-star"></i>
                    <?php endfor ?>
                  </p>
                </div>
              </div>
            </td>
            <td>
              <div class="d-flex align-items-center">
                <input class="form-control product-quantity" type="number" name="qtd" id="qtd" value="<?= $product['qtd'] ?>" />
                <i class="bi bi-trash-fill ms-3 product-remove"></i>
              </div>
            </td>
            <td>
              <div class="d-flex align-items-center">
                <p><?= $product['delivery'] ?></p>
              </div>
            </td>
            <td>
              <div class="d-flex flex-column justify-content-center">
                <p class="product-original-value"><?= money($product['value']) ?></p>
                <p class="product-discounted-value"><?= money($product['discounted']) ?></p>
                <p class="product-installments">ou <?= $product['installments'] ?>x de <?= money($product['discounted'] / $product['installments']) ?> sem juros</p>
              </div>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td>Subtotal (<?= $items ?> items)</td>
          <td>
            <div class="d-flex flex-column justify-content-center">
              <p class="product-original-value"><?= money($total['value']) ?></p>
              <p class="product-discounted-value"><?= money($total['discounted']) ?></p>
              <p class="product-installments">ou <?= $installments ?>x de <?= money($total['discounted'] / $installments) ?> sem juros</p>
          </td>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
  <div class="d-flex justify-content-end mt-5">
    <button class="btn btn-primary btn-lg px-5">Continuar</button>
  </div>
</main>

<?php

$content = ob_get_clean();
$title = 'Carrinho';
$style = 'carrinho';
$script = 'carrinho';

include 'base.php';
