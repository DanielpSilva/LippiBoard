 <?php
include_once("conexao.php");



$titulo      = mysqli_real_escape_string($conn, $_POST['titulo']);
$data        = mysqli_real_escape_string($conn, $_POST['dataEntrega']);
$semestre    = mysqli_real_escape_string($conn, $_POST['semestre']);
$ano    	 = mysqli_real_escape_string($conn, $_POST['ano']);
$descricao   = mysqli_real_escape_string($conn, $_POST['editor1']);
$disciplinas = $_POST['disciplinas'];
$integrantes = $_POST['integrantes'];
$anexos      = $_FILES['anexos']['name'];

//var_dump($ano);

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
/*$array = explode('/',$semestre);
$semestre = $array[0];
$ano = $array[1];
$semestre = intval($semestre);
$ano = intval($ano);*/

$result_titulo = "INSERT INTO projetos
(
projeto_nome,
projeto_data_de_entrega,
projeto_descricao,
projeto_semestre_id,
projeto_ano_id
)
VALUES (
'$titulo',
'$data',
'$descricao',
'$semestre',
'$ano'

);";


$resultado_titulo = mysqli_query($conn, $result_titulo) or die('Error, insert query failed - Projeto');
$idProjeto = mysqli_insert_id($conn);
 
#Inserindo integrantes e disciplinas no banco
foreach($integrantes as $integrante){
    $queryIntegrante = "INSERT INTO integrantes_dos_projetos(
                            integrante_do_projeto_projeto_id,
                            integrante_do_projeto_aluno_id
                        ) VALUES (
                            '$idProjeto',
                            '$integrante'
                        );";
     $queryIntegrante = mysqli_query($conn, $queryIntegrante) or die('Error, insert query failed - Integrantes');

}
foreach($disciplinas as $disciplina){
    $queryDisciplina = "INSERT INTO disciplinas_dos_projetos(
                            disciplina_do_projeto_projeto_id,
                            disciplina_do_projeto_disciplina_id
                        ) VALUES (
                            '$idProjeto',
                            '$disciplina'
                        );";
     $queryDisciplina = mysqli_query($conn, $queryDisciplina) or die('Error, insert query failed - Disciplina');

}
 
#Inserindo no banco os anexo
foreach($anexos as $anexo){
    $queryAnexo = "INSERT INTO anexos (
                        anexo_nome, 
                        anexo_projeto_id
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
        $uploaddir = '../ProjetoFinish/anexos/';
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