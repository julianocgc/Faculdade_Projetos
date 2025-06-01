<?php
$rp = '';
include ($rp . '_cabecalho.php');
?>

  <div id="geral">
    
  <!-- conteúdo principal -->
    <div id="conteudo">
      <div align="center"></div>
        <p align="center"><strong><font color="#FF0000" size="7">FALE CONOSCO</font></strong></p>
        <table width="100%" border="0">
          <tr>
            <td height="126"><div align="center">
                <form id="form1" name="form1" method="post" action="conexao.php">
                  <table width="200" border="0">
                    <tr>
                      <td><strong>Nome:</strong></td>
                      <td><p>
                          <label> </label>
                          <label>
                          <input name="nome" type="text" id="nome" size="50" maxlength="50" />
                          </label>
                      </p></td>
                    </tr>
                    
                    <tr>
                      <td><strong>E-mail:</strong></td>
                      <td align="right"><div align="left">
                          <input name="email" type="text" size="50" maxlength="50">
                      </div></td>
                    </tr>
                    
                    <tr>
                      <td><strong>Coment&aacute;rios</strong>:</td>
                      <td align="right"><textarea name="comentarios" cols="50"></textarea></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="right"><label>
                        <input type="submit" name="button" id="button" value="Gravar" />
                      </label></td>
                    </tr>
                  </table>
              </form>
            </div></td>
          </tr>
        </table>
        <p align="center"><strong>Para maiores detalhes entre em contato conosco.</strong></p>
    </div>

  <!-- seção principal = H1 até H6 -->
    <section>
      <div id="secao1">
        <p>----------<strong> Benefícios Exclusivos</strong> ----------</p>
        <p><img src="imagens/beneficios.png" alt="" width="1107" height="193"></p>
      </div>
      <div id="secao2">
        <p><img src="imagens/mais70canais.png" width="1264" height="416"></p>
      </div>
    </section>

    <!-- artigos -->
    <div id="artigo1">
      <p><img src="imagens/assista_sky+.png" width="1138" height="329"></p>
    </div>
    <div id="artigo2">
      <p align="center"><img src="imagens/rede_mesh.png" alt="" width="1245" height="321"></p>
      <div id="Slogan"><strong>Venha conferir a maior velocidade em Internet!!!</strong></div>
    </div>
  </div>
  </main>

<!-- sugestões para o visitante -->
<aside></aside>

<?php
include($rp . '_rodape.php');
?>