<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancers!</title>
</head>
<body>
<?php
if ($_GET['p']=='salvar'){

    $cpf = $_POST['id']; 
    $nome = $_POST['nome']; 
    //$senha = hash('md2',$_POST['senha']); 
    $telefone = $_POST['telefone']; 
    $email = $_POST['email']; 
    $dtnascimento = $_POST['dtnascimento'];
    $bio_usuario = $_POST['bio'];
    //$tipo_usuario = $_POST['tipo_usuario'];   //Remover depois
    $genero_usuario = $_POST['genero_usuario'];
    $categorias = $_POST['categorias_usuario'];
    //$cep = $_POST['cep'];           //Tenho que ver ainda
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['uf'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];

    //Atualizar imagem
    if($_FILES["url_perfil"]["error"] == UPLOAD_ERR_OK){
        include('save.php');
        $attimagem = "UPDATE usuarios SET avatar_url='$nomeArquivoNovo' WHERE cpf='$cpf'";

        if ($conn->query($attimagem) === TRUE) { 
            echo "Imagem atualizada com sucesso!"; 
            } else { 
            echo "Erro: atualizar imagem" . $attimagem . "<br>" . $conn->error;
            }
    }
    

/*
cpf = id/PK usuário
nome_usuario = Nome
senha_usuario = senha
telefone_usuario = Telefone
email = Email
data_nascimento = Data de Nascimento
bio_usuario = Biografia
cep = CEP
rua = Rua
bairro = Bairro
cidade = Cidade
estado = Estado
numero = Número
complemento = Complemento
tipo_usuario = Freelancer, contratante, administrador
genero_cliente = F, M, outro
avatar_url = Foto de perfil
categorias_usuario = Categorias de experiência
*/

    $sql = "UPDATE usuarios SET nome_usuario='$nome', telefone_usuario='$telefone', email='$email', bio_usuario='$bio_usuario', data_nascimento='$dtnascimento', rua='$rua', bairro='$bairro', cidade='$cidade', estado='$estado', numero='$numero', complemento='$complemento', genero_cliente='$genero_usuario', categorias_usuario='$categorias' WHERE cpf='$cpf'";

    if ($conn->query($sql) === TRUE) { 
        echo "Contato atualizado com sucesso!"; 
        echo '<a href="usuario.php?p=listar">Voltar</a>'; 
        } else { 
        echo "Erro: " . $sql . "<br>" . $conn->error;
        }
}

if ($_GET['p']=='editar'){
    $cpf = $_SESSION['cpf'];
    $resultado = $conn->query("SELECT * FROM usuarios WHERE cpf='$cpf'");
    $contato = $resultado->fetch_assoc();
}

if ($_GET['p']=='editar'){
?>

<h2>Editar Contato</h2>
<form action="usuario.php?p=salvar" method="POST" enctype="multipart/form-data">

    <!--  Biografia e Senha   -->
<div class="container">
      <div class='enrollment-form-wrapper'>
    <div>
        <label class="form-label">Nome </label>
        <div>
            <input type="text" id="nome" class="form-control" name="nome" value="<?php echo $contato['nome_usuario'];?>">
             <input type="hidden" id="id" name="id" value="<?php echo $contato['cpf'];?>"><br>
        </div>
    </div>
    <div>
        <label class="form-label">Telefone </label>
        <div>
            <input type="phone" class="form-control" id="telefone" name="telefone" value="<?php echo $contato['telefone_usuario'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">E-mail </label>
        <div>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $contato['email'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">Data de Nascimento </label>
        <div>
            <input type="date" class="form-control" id="dtnascimento" name="dtnascimento" value="<?php echo $contato['data_nascimento'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">Gênero do usuário </label>
        <div>
            <input type="text" class="form-control" id="genero_usuario" name="genero_usuario" value="<?php echo $contato['genero_cliente'];?>">
        </div>
    </div>
    <div>
        <label>Foto de perfil </label>
        <div>
            <img src="../imagens/<?php echo $contato['avatar_url'];?>" alt=""><br>
            <input type="file" id="url_perfil" name="url_perfil" multiple>  
        </div>
    </div>
    <div>
        <label class="form-label">Categorias </label>
        <div>
            <input type="text" class="form-control" id="categorias_usuario" name="categorias_usuario" value="<?php echo $contato['categorias_usuario'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">CEP </label>
        <div>
            <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $contato['cep'];?>" onblur="pesquisacep(this.value);" maxlength="8">
        </div>
    </div>
    <div>
        <label class="form-label">Rua </label>
        <div>
            <input type="text" class="form-control" id="rua" name="rua" value="<?php echo $contato['rua'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">Bairro </label>
        <div>
            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $contato['bairro'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">Cidade </label>
        <div>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $contato['cidade'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">Estado </label>
        <div>
            <input type="text" class="form-control" id="uf" name="uf" value="<?php echo $contato['estado'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">Número </label>
        <div>
            <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $contato['numero'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">Complemento </label>
        <div>
            <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $contato['complemento'];?>">
        </div>
    </div>
    <div>
        <label class="form-label">Bio </label>
        <div>
            <textarea id="bio" class="form-control" name="bio" rows="4" cols="50"><?php echo $contato['bio_usuario'];?></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a href="index.php" class="btn btn-outline-dark">Cancelar</a>
</form>

    <script>
function pesquisacep(valor) {

    // Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    // Verifica se campo cep possui valor informado.
    if (cep != "") {

        // Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        // Valida o formato do CEP.
        if (validacep.test(cep)) {

            // Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('uf').value = "...";

            // Cria um elemento javascript.
            var script = document.createElement('script');

            // Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            // Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            alert("Formato de CEP inválido");
            limpa_formulario_cep();
            
        }
    } // end if.
    else {
        // cep sem valor, limpa formulário.
        limpa_formulario_cep();
    }
}

function limpa_formulario_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('uf').value = ("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        // Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('uf').value = (conteudo.uf);
    } //end if.
    else {
        // CEP não Encontrado.
        limpa_formulario_cep();
        alert("CEP não encontrado.");
    }
}
</script>
    </div>
</div>

</body>
</html>

<?php
}
?>