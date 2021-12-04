<?php

include 'lib/format.php';

$product = [
  'name' => 'Título do Produto',
  'rating' => 5,
  'value' => 2066,
  'discount' => 29,
  'installments' => 10,
  'qtd' => 5,
  'image' => 'product.png'
];

?>

<?php ob_start(); ?>

<main class="container my-5 bg-white p-5">
  <div class="row">
    <div class="col-12 col-lg-6 d-flex justify-content-center">
      <img class="product-image" src="/images/<?= $product['image'] ?>" alt="product image" />
    </div>
    <div class="col-12 col-lg-6 text-center text-lg-start mt-5">
      <h2 class="card-title"><?= $product['name'] ?></h2>
      <p class="card-rating">
        <?php for ($i = 0; $i < $product['rating']; $i++) : ?>
          <i class="bi bi-star-fill"></i>
        <?php endfor ?>
        <?php for ($i = $product['rating']; $i < 5; $i++) : ?>
          <i class="bi bi-star"></i>
        <?php endfor ?>
      </p>
      <p class="card-original-value"><?= money($product['value']) ?></p>
      <?php $discounted = $product['value'] - $product['value'] * $product['discount'] / 100 ?>
      <p class="card-discounted-value"><?= money($discounted) ?></p>
      <p class="card-installments">ou 10x de <?= money($discounted / $product['installments']) ?> sem juros</p>
      <div class="col-12">
        <fieldset class="mt-4">
          <label for="quantidade">Quantidade: </label>
          <input id="quantidade" class="form-control btn-lg" type="number" value="<?= $product['qtd'] ?>" min="1" />
        </fieldset>
        <a class="btn btn-primary btn-buy btn-lg mt-2 w-100" href="/carrinho.php">
          Comprar
        </a>
      </div>
    </div>
  </div>
</main>

<?php

$content = ob_get_clean();
$title = 'Produto';
$style = 'produto';
$script = 'produto';

include 'base.php';
