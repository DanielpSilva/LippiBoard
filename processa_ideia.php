 <?php
include_once("conexao.php");

session_start();

$id_usu = $_SESSION['idempresa'];


$titulo      = mysqli_real_escape_string($conn, $_POST['titulo']);
$nome        = mysqli_real_escape_string($conn, $_POST['nome']);
$email   	 = mysqli_real_escape_string($conn, $_POST['email']);
$descricao   = mysqli_real_escape_string($conn, $_POST['editor1']);
$anexos      = $_FILES['anexos']['name'];

/*
echo "disciplinas</br>";
foreach($disciplinas as $disciplina){
    echo $disciplina.'</br>';
}
    echo "integrantes</br>";
foreach($integrantes as $integrante){
    echo $integrante.'</br>';
}
*/

#Tratamento de semestre e ano para inserir no banco

$result_titulo = "INSERT INTO repositorios_de_ideias
(
repositorio_de_ideia_titulo,
repositorio_de_ideia_nome,
repositorio_de_ideia_email,
repositorio_de_ideia_descricao,
repositorio_de_ideia_data,
repositorio_de_ideia_usuario_id
) 
VALUES (
'$titulo',
'$nome',
'$email',
'$descricao',
 now(),
'$id_usu'
)";
$resultado_titulo = mysqli_query($conn, $result_titulo) or die('Error, insert query failed - Projeto');
$idProjeto = mysqli_insert_id($conn);
 
#Inserindo integrantes e disciplinas no banco

#Inserindo no banco os anexo
foreach($anexos as $anexo){
    $queryAnexo = "INSERT INTO anexos_repositorios_de_ideias (
                        anexo_repositorio_de_ideia_nome, 
                        anexo_repositorio_de_ideia_repositorio_de_ideia_id
                    ) VALUES (
                        '$anexo',
                        '$idProjeto'
                    );";
    $queryAnexo = mysqli_query($conn, $queryAnexo) or die('Error, insert query failed - Anexo');
}

if($queryAnexo && !empty($_FILES['anexos']['name'])){
    $i = count($_FILES['anexos']['name']);
    $x = 0;
    while($x < $i){
        $uploaddir = '../ProjetoFinish/anexos_repositorio/';
        $uploadfile = $uploaddir.basename($_FILES['anexos']['name'][$x]);

        #echo '<pre>';
        if (move_uploaded_file($_FILES['anexos']['tmp_name'][$x], $uploadfile)) {
            echo "<script>alert('Arquivo válido e enviado com sucesso.');</script>";
        } else {
            echo "<script>alert('Possível ataque de upload de arquivo!');</script>";
        }

        #echo 'Aqui está mais informações de debug:';
        #print_r($_FILES);

        #print "</pre>";
        $x+=1;
    }
    
}
if(mysqli_insert_id($conn)){
    echo "<script>alert('Ok');</alert>";
    header("Location: index.php");
    
}else{
    echo "<script>alert('Não Ok');</alert>";
    header("Location: form.html");
}

?>