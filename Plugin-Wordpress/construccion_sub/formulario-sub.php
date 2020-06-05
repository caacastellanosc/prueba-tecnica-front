<h1>Plugin de Prueba</h1>
<h3>Crea un subtitulo</h3>
<p> Funciona para adicionar un shortcode mediante [subtitule_prueba]</p>
<form method="post">
<ul>
<li>
<div>

<p>
    Texto para correo: 
  </p>
  </div>
  <textarea placeholder="Escriba su correo" name="textosub" rows="10" cols="50"value="<?php echo ($valor_option = get_option('valor_sub'))? $valor_option : ''; ?>"> </textarea>
</li>

<li>
  <p>
    <input type="submit" value="Guardar">
  </p>
</li>
</ul>
  

</form>
