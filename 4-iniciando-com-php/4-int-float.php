<?php
// inteiro: 1, 2, 3, 4, 5, 6, 7, 8, 9, -1, -2;
echo -2;
var_dump(-2);

// sistema octal (cuidado):
//Prefixado com '0'
echo 0777; // vai printar 511 (tipo int)

echo 777; // 777
var_dump(777); // 777

//Sistema Hexadecimal:
//Prefixado com '0x'
echo 0x1FF; // vai printar 511
var_dump(0x1FF); // vai printar 511 (tipo int)

// Float:
echo 10.99;
var_dump(10.99); // vai printar 10.99 (tipo float ou double)

/*
  Apesar de retornar visualmente apenas 1, o php - por conta do . - entende como float:
*/
echo 1.0;
var_dump(1.0);

// Usando gettype:
echo gettype(10); echo '<br>';
echo gettype(10.97); echo '<br>';
echo gettype(null); echo '<br>';
echo gettype(false); echo '<br>';
echo gettype([]); echo '<br>';

// Constantes do PHP para saber o tamanho máximo e mínimo suportado pelo PHP dos tipos int e float, usando:
/*
  Os tamanhos mínimos e máximos irão variar dependendo da arquitetura do Sistema Operacional da máquina que o PHP está rodando
*/
echo PHP_INT_MIN; echo '<br>';
echo PHP_INT_MAX; echo '<br>';
echo '<hr>';
echo PHP_FLOAT_MIN; echo '<br>';
echo PHP_FLOAT_MAX; echo '<br>';

echo '<hr>';

echo 13e+2; // Significa: 13 elevado a 10 ('e') + dois (duas casas após a vírgula) - resultado: '1300.00' (no print vai sair: '1300')
var_dump(13e+2);
echo '<br>';
echo 13.3e-2; // 0.133
var_dump(13.3e-2);
echo '<br>';
echo gettype(13e+2);