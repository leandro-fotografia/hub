<section id="result-section" class="col-md-12">
  <div class="container">
    <p> <img alt="Parabéns" src="<?php echo ASSETS . "img/parabens.png"; ?>" alt=""> </p>
    <p> A área do conhecimento que você mais se identifica é: </p>
    <span> CIÊNCIAS BIOLÓGICAS </span>
    <p id="conheca-cursos"> Conheça os cursos que podem lhe atender <i class="fa fa-angle-double-down"></i> </p>
    <p> Aqui oferecemos o curso certo e a mobilidade de ensino que se encaixa melhor para você!</p>
  </div>
</section>
<section id="cursos-lista" class="col-md-12 lista-cursos-result ">
  <div class="row">
    <div class="column-cursos col-md-4">
      <h3>GRADUAÇÃO <br><span class="strong">PRESENCIAL</span></h3>
      <p> Para você que prefere ter interação diário com os professores e tem disponibilidade para frequentar aulas todos os dias. </p>
      <ul>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/biomedicina-bacharelado/" target="_blank">BIOMEDICINA</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/ciencias-biologicas-bacharelado/" target="_blank">CIÊNCIAS BIOLÓGICAS (Bacharelado)</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/ciencias-biologicas/" target="_blank">CIÊNCIAS BIOLÓGICAS (Licenciatura)</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/educacao-fisica-bacharelado/" target="_blank">EDUCAÇÃO FÍSICA (Bacharelado)</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/educacao-fisica/" target="_blank">EDUCAÇÃO FÍSICA (Licenciatura)</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/enfermagem/" target="_blank">ENFERMAGEM</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/estetica-e-cosmetica/" target="_blank">ESTÉTICA E COSMÉTICA</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/farmacia/" target="_blank">FARMÁCIA</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/fisioterapia/" target="_blank">FISIOTERAPIA</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/medicina-veterinaria/" target="_blank">MEDICINA VETERINÁRIA</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/nutricao/" target="_blank">NUTRIÇÃO</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/odontologia/" target="_blank">ODONTOLOGIA</a></li>
        <li><a href="http://guiadeprofissoes.cruzeirodosuleducacional.edu.br/psicologia/" target="_blank">PSICOLOGIA</a></li>
      </ul>
    </div>
  </div>
  <div id="share-results">
    <div class="container">
      <a href="<?=home_url("/cursos/");?>" id="enviar-curso" class="btn btn-primary"> Inscreva-se </a>
      <p> Compartilhe seu resultado </p>
      <ul id="share-icon-position">
        <li onclick="shareResults('Ciências humanas e sociais','twitter')" class="share-icon twitter"> <i class="fa fa-twitter"></i> </li>
        <li onclick="shareResults('Ciências humanas e sociais','facebook')" class="share-icon facebook"> <i class="fa fa-facebook"></i> </li>
        <li onclick="shareResults('Ciências humanas e sociais','google')" class="share-icon google"> <i class="fa fa-google-plus"></i> </li>
      </ul>
    </div>
  </div>
</section>

<script type="text/javascript">
  (function(){
    $("#group-sections").css({paddingLeft:"0px",paddingRight:"0px" });
  })(jQuery);
</script>
