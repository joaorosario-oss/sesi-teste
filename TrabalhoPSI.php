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
echo "objetivo da psi /n A psi tem como objetivo principal de estabelecer diretrizes que buscam garantir a confidencialidade nos dados dos funcionários e agentes da empresa, ela visa o cumprimento da lei geral da segurança de dados (lgpd) na qual deve sempre garantir o uso adequado de informações pessoais, priorizando sempre a mitigação dos riscos de segurança que podem afetar tais informações evitando danos que podem afetar a empresa e os funcionários";
break

case 2
echo "escopo da política: O escopo da psi quando se define a quem e as quais ativos esta política se aplica, por exemplo uma lista de colaboradores e agentes que devem garantir a responsabilização dessa lei e sua aplicação, ou a lei pode se aplicar a todos os sujeitos que se relacionam de quaisquer formas com a empresa ou órgão, o escopo também deve ser especificado suas exclusões se houver, como por exemplo pessoas, elementos ou situações que não são cobertas pela lei e diretriz aplicada. ";
break

  case 3 
  echo "Resposabilidade:A responsabilização da psi é a garantia da aplicação e cumprimento dos artigos e diretrizes abordadas na lei geral da segurança de dados (lgpd) que priorizam a gestão de dados e segurança do orgão e de seus funcionários.";
  break
    
    case 4
    echo "Boas práticas de segurança:As boas práticas na segurança seria a responsabilização do cumprimento das leis asseguradas pelo psi, deve ser garantida seu cumprimento tanto pela empresa quanto para seus funcionários, dentre outros relacionados. ";
  
  case 5
    echo "Consequências do descumprimento:As consequências do cumprimento das diretrizes da psi seria a segurança nos dados pessoais de todo os funcionários e da empresa em si, e a integridade de quaisquer informações dentro da empresa sempre priorizando o uso adequado das informações e dados dos envolvidos.";
  

} 

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
echo "objetivo da psi:A psi tem como objetivo principal de estabelecer diretrizes que buscam garantir a confidencialidade nos dados dos funcionários e agentes da empresa, ela visa o cumprimento da lei geral da segurança de dados (lgpd) na qual deve sempre garantir o uso adequado de informações pessoais, priorizando sempre a mitigação dos riscos de segurança que podem afetar tais informações evitando danos que podem afetar a empresa e os funcionários, ";
break

case 2
echo "escopo da política:O escopo da psi quando se define a quem e as quais ativos esta política se aplica, por exemplo uma lista de colaboradores e agentes que devem garantir a responsabilização dessa lei e sua aplicação, ou a lei pode se aplicar a todos os sujeitos que se relacionam de quaisquer formas com a empresa ou órgão, o escopo também deve ser especificado suas exclusões se houver, como por exemplo pessoas, elementos ou situações que não são cobertas pela lei e diretriz aplicada. ";
break

   case 3 
  echo "Resposabilidades:A responsabilização da psi é a garantia da aplicação e cumprimento dos artigos e diretrizes abordadas na lei geral da segurança de dados (lgpd) que priorizam a gestão de dados e segurança do orgão e de seus funcionários.";
  break
    
    case 4
    echo "Boas práticas de segurança:As boas práticas na segurança seria a responsabilização do cumprimento das leis asseguradas pelo psi, deve ser garantida seu cumprimento tanto pela empresa quanto para seus funcionários, dentre outros relacionados. ";
  
  case 5
    echo "Consequências do descumprimento:As consequências do cumprimento das diretrizes da psi seria a segurança nos dados pessoais de todo os funcionários e da empresa em si, e a integridade de quaisquer informações dentro da empresa sempre priorizando o uso adequado das informações e dados dos envolvidos.";
  
} 


if ($opcao==3)  {
echo"encerrando sistema";
}
















?>
