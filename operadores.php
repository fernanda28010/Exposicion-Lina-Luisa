<?php
 echo "<h3>Postincremento</h3>";
 $a = 5;
 echo "Debe ser 5: " . $a++ . "<br />\n";
 echo "Debe ser 6: " . $a . "<br />\n";

//INCREMENTO 
//post-incremento
//Retorna $a, y luego incrementa $a en uno.
$a=10;
$a++;
$a++;  
echo $a ."<br>";

//pre-incremento
//Incrementa $a en uno, y luego retorna $a.
 $c=10;
++$c;
echo $c ."<br>";

//DECREMENTO
//post-decremento
//	Retorna $b, luego decrementa $b en uno.
$b=10;
$b--;
echo "Debe ser 10: " . $b-- . "<br />\n";
 echo "Debe ser 9: " . $b . "<br />\n";

// //pre-decremento
//Decrementa $d en uno, luego retorna $d.
 $d=10;
--$d;
 echo $d ."<br>";

//OPERADORES LOGICOS
//operadorY  &&
//se hace comparación si uan es verdadera y la otra es falsa retorna un FALSE
//si amabos valores sin falsos retorna un FALSE, con este operador ambos valores
//tiene que ser forzosamente VERDADEROS
// $Y=(15==5) && (15==15);
// var_dump ($Y);

//Operador O ||
//si alguna de las opciones a comprar es verdadadera o las dos, retornara un VERDADERO
//no importa que haya un falso, si ambo son falsos retornara un FALSE 

// $O=(15==5) || (15==15);
// var_dump ($O);

//Si los dos valores son verdaderos retornada un TRUE porque solo una de las dos opciones
//tiene que ser verdadera
// $X=(15==15) xor (5==15);
// var_dump ($X);

//Operador NOT
//Este operador nos va a retonrnar si nuestra comparacion es falsa
// $N=!(5==15);
// var_dump ($N);

//

//Operadores de ejecucion 
//$output = `mkdir hola` ;
//$output = `rmdir hola` ;
//$output = `notepad.exe`;
//$output = shell_exec("notepad.exe");

//echo $output 


//strings.
//operador de concatenacion
// $string1 = 'hola' ;
// $string2 = $string1 . ' mundo' ;
// echo '<p>' . $string2 . '</p>' ; 

// //precedencia
// $string3 = 'la suma total de 2+2 = ' . (2+2) ;

// echo '<p>' . $string3 . '</p>' ;

//operador de asignacion sobre concatenacion 
// $string4 = 'politico' ;
// $string4 .= ' corrupto' ;
// $string4 .= ' y ladron' ;
// echo '<p>' . $string4 . '</p>' ; 


// //ARRAYS
// //comparar arrays
// $a = [0, 1, 2] ;
// $b = ['0', '1', '2'] ;

// //operrador de igualdad
// echo '<p> operador de igualdad = =</p>' ;
// var_dump($a == $b) ;

// /*operador de identico
// */
// echo '<p>operador de identico = = =</p>' ;
// var_dump($a === $b) ;

//operador de desigualdad 
// echo '<p>operador de desigualdad !=&lt; &gt ; </p>' ;
// var_dump([0, 1, 2] !=[0, 2, 1]) ;

?>  