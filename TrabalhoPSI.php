<?php
//pscalcase
echo "--------------------------------------------------------------------\n";
echo "--------Consulta à Política de Segurança da Informação (PSI)--------\n";
echo "--------------------------------------------------------------------\n";
echo"\n";
echo "1-Termos PSI da empresa\n";
echo"\n";
echo "2-Termos Gerais PSI\n";
echo"\n";
echo "3-Encerrar programa\n";
echo"\n";

$escolha = readline ("---escolha uma opção---");

if ($escolha==1){
echo "termos psi da empresa";
$topico = readline ("qual tópico você deseja ver?\n")
echo "------------------------\n";
echo "▪ 1-Objetivos da PSI\n";
echo "▪ 2-Escopo da política\n";
echo "▪ 3-Responsabilidades\n";
echo "▪ 4-Boas práticas de segurança\n";
echo "▪ 5-Consequências do descumprimento\n";

switch ($topico) {

case 1
echo "objetivo da psi";
break

case 2
echo "escopo da política";
break
} 

}
if ($escolha==2){
echo "termos Gerais psi";


}
if ($escolha==3){
echo "encerrando programa";

}
if ($escolha==2){
echo "termos gerais psi";
$topico = readline ("qual tópico você deseja ver?\n")
echo "------------------------\n";
echo "▪ 1-Objetivos da PSI\n";
echo "▪ 2-Escopo da política\n";
echo "▪ 3-Responsabilidades\n";
echo "▪ 4-Boas práticas de segurança\n";
echo "▪ 5-Consequências do descumprimento\n";

switch ($topico) {

case 1
echo "objetivo da psi";
break

case 2
echo "escopo da política";
break
} 

}
if ($escolha==2){
echo "termos Gerais psi";


}
if ($escolha==3){
echo "encerrando programa";

}


if (opcao==3)  {
echo"encerrando sistema";
}
















?>
