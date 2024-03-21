<?php
function calcularMediaAprovados($alunos) {
    $aprovados = array();
    foreach ($alunos as $aluno) {
        $media = ($aluno['N1'] + 2 * $aluno['N2']) / 3;
        if ($media >= 6) {
            $aprovados[$aluno['nome']] = $media;
        }
    }
    ksort($aprovados);
    return $aprovados;
}

$alunos = array(
    array('nome' => 'João', 'N1' => 7, 'N2' => 8),
    array('nome' => 'Maria', 'N1' => 6, 'N2' => 7),
    array('nome' => 'Pedro', 'N1' => 5, 'N2' => 6),
    array('nome' => 'Ana', 'N1' => 8, 'N2' => 9)
);

$aprovados = calcularMediaAprovados($alunos);

echo "Alunos Aprovados:\n";
foreach ($aprovados as $nome => $media) {
    echo "$nome: $media\n";
}

?>
