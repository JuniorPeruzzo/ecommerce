<?php

include 'lib/format.php';

$sections = [
  'Ofertas' => [
    ['name' => 'Título do Produto', 'rating' => 3, 'value' => 9148, 'discount' => 10, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 3, 'value' => 1727, 'discount' => 13, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 2, 'value' => 9314, 'discount' => 20, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 3, 'value' => 5207, 'discount' => 11, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 1, 'value' => 1626, 'discount' => 25, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 1, 'value' => 8792, 'discount' => 23, 'installments' => 10, 'image' => 'product.png'],
  ],
  'Mais Vendidos' => [
    ['name' => 'Título do Produto', 'rating' => 2, 'value' => 1702, 'discount' => 24, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 4, 'value' => 3555, 'discount' => 23, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 1, 'value' => 6681, 'discount' => 25, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 5, 'value' => 9395, 'discount' => 16, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 3, 'value' => 6145, 'discount' => 11, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 1, 'value' => 2947, 'discount' => 10, 'installments' => 10, 'image' => 'product.png'],
  ],
  'Recomendados' => [
    ['name' => 'Título do Produto', 'rating' => 5, 'value' => 6875, 'discount' => 17, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 5, 'value' => 9439, 'discount' => 16, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 4, 'value' => 1043, 'discount' => 16, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 3, 'value' => 3143, 'discount' => 27, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 2, 'value' => 7172, 'discount' => 30, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 3, 'value' => 8479, 'discount' => 30, 'installments' => 10, 'image' => 'product.png'],
  ],
  'Novidades' => [
    ['name' => 'Título do Produto', 'rating' => 5, 'value' => 2066, 'discount' => 29, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 2, 'value' => 3669, 'discount' => 23, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 3, 'value' => 1995, 'discount' => 23, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 1, 'value' => 7675, 'discount' => 15, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 4, 'value' => 4112, 'discount' => 25, 'installments' => 10, 'image' => 'product.png'],
    ['name' => 'Título do Produto', 'rating' => 4, 'value' => 3570, 'discount' => 25, 'installments' => 10, 'image' => 'product.png'],
  ],
]

?>

<?php ob_start(); ?>

<img class="img-fluid" src="/images/banner.jpg" alt="banner" />

<main class="container">
  <?php foreach ($sections as $section => $products) : ?>
    <section>
      <h1 class="section-title"><?= $section ?></h1>
      <div class="row g-2">
        <?php foreach ($products as $product) : ?>
          <div class="col-12 col-lg-4">
            <a href="produto.php">
              <div class="card p-3">
                <div class="row">
                  <div class="col-4">
                    <img class="card-img img-fluid rounded-start" src="images/<?= $product['image'] ?>" alt="product" />
                  </div>
                  <div class="col-8 d-flex flex-column justify-content-center">
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
                    <p class="card-installments">ou <?= $product['installments'] ?>x de <?= money($discounted / $product['installments']) ?> sem juros</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  <?php endforeach ?>
</main>

<?php

$content = ob_get_clean();
$title = 'Página Inicial';
$style = 'index';
$script = 'index';

include 'base.php';
