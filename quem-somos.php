<?php ob_start(); ?>
<main>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img class="logo-quemsomos" src="/images/logo-desktop.png" alt="logo">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Sobre a Company Ecommerce</h1>
        <p class="lead">A Company Ecommerce oferece os melhores produtos e atendimento em ecommerce, garantindo entrega rápida, valores justos, melhor qualidade e atendimento completo no caso de devoluções ou reebolso. </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a class="btn btn-primary btn-lg px-4 me-md-2" href="/contato.html" target="_blank">Contato </a>
          <a class="btn btn-outline-secondary btn-lg px-4" href="/produto.html" target="_blank">Produtos</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php

$content = ob_get_clean();

include 'base.php';
