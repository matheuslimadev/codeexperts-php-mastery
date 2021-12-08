<?php 

/** Contar os caracteres: */
echo strlen("Testando strings"); // 16
echo "<br>";
echo strlen("Virá"); // 5 - Caracteres acentuados não são "formações" regulares, e sim multibytes. É por isso que se você usa strlen("virá") o resultado será 5 caracteres, ao invés de 4 (como você esperava).
echo "<br>";

/** Pegar parte da string: */
echo substr("Testando strings", 0, 7); // Pega a partir da posição 0, 7 caracteres - 'Testand'
echo "<br>";

echo substr("Testando strings", -4, 2); // Pega a partir da posição -4('i'), 2 caracteres - 'in'
echo "<br>";

echo substr("Testando strings", 8); // Chamando a função substr sem passar o 3º parâmetro(qtd de caracteres que eu quero) - ' strings'
echo "<br>";

echo substr("Testando strings", -7); // 'strings'
echo "<br>";

/** Adicionar caracteres extras: */
echo str_pad('teste', 6, '*'); // 2º param é o tamanho da string que eu quero, o 3º param é o que vou add na string - 'teste*'
echo "<br>";

echo str_pad('teste', 8, '*'); // 'teste***'
echo "<br>";

// echo STR_PAD_LEFT; // 0
// echo STR_PAD_RIGHT; // 1 - Por padrão da função str_pad;
// echo STR_PAD_BOTH; // 2
echo str_pad('teste', 8, '*', STR_PAD_LEFT); // 3º param indica a direção que os caracteres serão inseridos na string alvo - '***teste'
echo "<br>";

echo str_pad('teste', 8, '*', STR_PAD_BOTH); // 3º param indica a direção que os caracteres serão inseridos na string alvo - '*teste**'
echo "<br>";

/** Maiúsculo e Minúsculo: */
echo strtoupper('Tudo vai ficar maiúsculo'); // Maiúscula - 'TUDO VAI FICAR MAIúSCULO' (Só que não kkkk)
echo "<br>";

// Usando mb_* | funções da mb_* operarão nas strings com base em suas propriedades Unicode.
$encoding = mb_internal_encoding(); // O retorno da função será: 'UTF-8' ou ISO-8859-1
echo mb_strtoupper('Tudo vai ficar maiúsculo', $encoding); // Maiúscula - 'TUDO VAI FICAR MAIÚSCULO' (Agora sim ;D)
echo "<br>";

echo strtolower('Tudo vai ficar minúsculo'); // Minúsculo - ''
echo "<br>";


/** Encontrar uma ocorrência de carácter: */
echo strstr('imagem.jpg', '.'); // '.jpg';
echo "<br>";
echo strchr('image.png', '.'); // '.png' - a função strchr() é um aliás da função strstr(), ou seja, não vai fazer diferença de qual usar.
echo "<br>";

/** Substituir caracteres: */
echo str_replace('a', 'x', 'batata'); // 'bxtxtx';
echo "<br>";

echo str_replace('A', 'x', 'batata'); // 'batata' - Nenhuma substituição será feita, porque o PHP diferencia maiúsculo de minúsculo (case sensitive);
echo "<br>";

echo str_ireplace('A', 'x', 'batata'); // 'bxtxtx' - Agora ele ignora o case sensitive por conta da função ser str_ireplace() e não str_replace();
