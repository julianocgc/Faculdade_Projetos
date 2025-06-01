<?php
$rp = '';
include ($rp . '_cabecalho.php');
?>

  <div id="geral">

  <!-- conteúdo principal -->
    <div id="conteudo">
      <div align="center"></div>
        <p align="center"><strong><font color="#FF0000" size="7">ENVIE SEU CURRÍCULO</font></strong></p>

        <?php
        // Exibir mensagens de sucesso ou erro
        if (isset($_GET['success'])) {
            if ($_GET['success'] === 'curriculo_enviado') {
                echo '<div style="background-color: #d4edda; color: #155724; padding: 10px; margin: 10px 0; border: 1px solid #c3e6cb; border-radius: 4px; text-align: center;">
                        <strong>Sucesso!</strong> Seu currículo foi enviado com sucesso. Entraremos em contato em breve.
                      </div>';
            }
        }

        if (isset($_GET['error'])) {
            $error_message = '';
            switch ($_GET['error']) {
                case 'metodo_invalido':
                    $error_message = 'Método de envio inválido.';
                    break;
                case 'erro_salvar':
                    $error_message = 'Erro ao salvar os dados. Tente novamente.';
                    break;
                case 'erro_banco':
                    $error_message = 'Erro de conexão com o banco de dados. Tente novamente mais tarde.';
                    break;
                default:
                    $error_message = htmlspecialchars($_GET['error']);
            }
            echo '<div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border: 1px solid #f5c6cb; border-radius: 4px; text-align: center;">
                    <strong>Erro:</strong> ' . $error_message . '
                  </div>';
        }
        ?>
    <table width="100%" border="0">
          <tr>
            <td><div align="center">
                <form id="form1" name="form1" method="post" action="actions/curriculo.php" enctype="multipart/form-data">
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
                      <td><strong>Sexo:</strong></td>
                      <td align="right"><div align="left">
                          <input type="radio" name="sexo" value="masculino">
                        Masculino
                        <input type="radio" name="sexo" value="feminino">
                        Feminino</div></td>
                    </tr>
                    <tr>
                      <td><strong>Idade:</strong></td>
                      <td align="right"><div align="left">
                          <input name="idade" type="text" size="5" maxlength="3">
                      </div></td>
                    </tr>
                    <tr>
                      <td><strong>E-mail:</strong></td>
                      <td align="right"><div align="left">
                          <input name="email" type="text" size="50" maxlength="50">
                      </div></td>
                    </tr>
                    <tr>
                      <td><strong>Cidade:</strong></td>
                      <td align="right"><div align="left">
                          <input name="cidade" type="text" size="50" maxlength="50">
                      </div></td>
                    </tr>
                    <tr>
                      <td><strong>Estado:</strong></td>
                      <td align="right"><div align="left">
                          <input name="estado" type="text" size="10" maxlength="2">
                      </div></td>
                    </tr>
                    <tr>
                      <td><strong>Currículo:</strong></td>
                      <td align="right"><label for="curriculo">
                      <div align="left">Arquivo:
                        <input type="file" id="curriculo" name="curriculo" accept=".pdf,.doc,.docx" />
                      </div>
                      </label>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>Coment&aacute;rios</strong>:</td>
                      <td align="right"><textarea name="comentarios" cols="50"></textarea></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="right"><label>
                        <input type="submit" name="button" id="button" value="Enviar" />
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
include ($rp . '_rodape.php');
?>