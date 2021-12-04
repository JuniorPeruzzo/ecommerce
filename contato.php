<?php ob_start(); ?>
<main>
  <form class="bd-example">
    <fieldset>
      <legend>Informe seus dados para Contato</legend>
      <p>
        <label for="input">Seu Nome*</label>
        <input type="text" id="input" placeholder="Example input">
      </p>
      <p>
        <label for="email">E-mail*</label>
        <input type="email" id="email" placeholder="test@example.com">
      </p>
      <p>
        <label for="tel">Telefone*</label>
        <input type="tel" id="tel">
      </p>
      <p>
        <label for="file">Anexar arquivos</label>
        <input type="file" id="file">
      </p>
      <p>
        <label for="select">Tópico referente a assunto*</label>
        <select id="select">
          <option value="">Selecione</option>
          <optgroup label="Produtos">
            <option value="">Devolução</option>
            <option value="">Atraso na entrega</option>
            <option value="">Defeito</option>
          </optgroup>
          <optgroup label="Outros">
            <option value="">Problemas com pedido</option>
            <option value="">Acesso a conta</option>
            <option value="">Site em geral</option>
          </optgroup>
        </select>
      </p>
      <p>
        <label for="date">Data de Nascimento*</label>
        <input type="date" id="date">
      </p>
      <p>
        <label for="textarea">Descreva a situação*</label>
        <textarea id="textarea" cols="55" rows="7"></textarea>
      </p>
    </fieldset>
  </form>
</main>

<?php

$content = ob_get_clean();

include 'base.php';
