<?php
//lectura
fopen("MiArchivo","r");
//escritura
fopen("MiArchivo","w");
//lectura y escritura
fopen("MiArchivo","w+r");
//apertura de solo lectura
fopen("MiArchivo","a");
//creacion
fopen("MiArchivo","x");
//creacion y apertura
fopen("MiArchivo","x+a");

//sirve para escribir
fwrite(handle,string);
//metodo viejo
fputs(handle,string);

