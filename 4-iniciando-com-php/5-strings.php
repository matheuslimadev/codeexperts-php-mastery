<?php
echo "this is a string - !@#_)(*&*&¨%$ 12358";
echo '<br>';
echo gettype("this is a string");
echo '<hr>';

echo 'string using single quotes';
echo '<br>';
echo gettype('string using single quotes');
echo '<hr>';

# Acessando um caracter específico da string:
echo "PHP Language"[0]; // 'P'
echo '<br>';
echo "PHP Language"[3]; // '' - Acessei o espaço em branco de uma string
echo '<br>';
echo gettype("PHP Language"[3]); // 'string'
echo '<br>';

# Indíces negativos - A partir do PHP 7.1
echo "ABC"[-1]; # Vai pegar o último caractere da string - 'C';
echo '<br>';
echo "ABC"[-2]; # Vai pegar o penúltimo caractere da string - 'B';
echo '<br>';
echo "ABC"[-3]; # Vai pegar o penúltimo caractere da string - 'A';
echo '<br>';
echo "ABC"[-0]; # Vai pegar o caracter da posição 0 da string - 'A';
echo '<br><hr>';
//echo "ABC"[-4]; # Vai gerar um erro, pois a posição não existe (independete de for na ordem da esquerda pra direita - número positivo dentro do array - ou da direita pra esquerda - número negativo dentro do array);
//echo '<br>';
//echo "ABC"[4];
//echo '<br>';

# Concatenação:
echo "I'm programing in " . 'PHP';
echo '<br>';
# Usando escape (scape) de uma string envolvida com aspas simples dentro de outra string com aspas simples
#echo 'I´m learning 'PHP''; // Parse erro
echo 'I´m learning \'PHP\''; // escapando a aspas simples que eu quero que seja interpretada como um caracter de fato.
echo "<br>";
echo "I´m learning 'PHP'"; // Sem necessidade de escape, porque a aspas duplas está envolvendo a aspas simples.
echo '<br>';
echo "I'm Learning \"PHP\"!";
echo '<br>';
#Escapando uma contra-barra:
echo "Escapando a \\";
echo "<hr>";

/*
* Pulando várias linhas na mesma string:
*/
echo "Texto grande, texto grande, texto grande, texto grande
, texto grande, texto grande, texto grande, texto grande
, texto grande, texto grande, texto grande
, texto grande

, texto grande, texto grande
\n
, texto grande";