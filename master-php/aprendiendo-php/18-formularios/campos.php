<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>FORMULARIO PHP Y HTML</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre: </label>
    <p><input type="text" name ="nombre "></p>

    
    <label for="apellido">Apellido: </label>
    <p><input type="text" name ="apellido"></p>

    <label for="boton ">Boton: </label>
    <p><input type="button" name ="boton" value="Click"></p>

    <label for="sexo">Sexo: </label>
    <p>
        Hombre <input type="checkbox" name ="sexo" value="hombre"/>
        Mujer <input type="checkbox" name ="sexo" value="mujer" checked="checked"/>

    </p>

    <label for="color">Color: </label>
    <p><input type="color" name ="color"></p>

    <label for="fecha">Fecha: </label>
    <p><input type="date" name ="fecha"></p>

    <label for="correo">Email: </label>
    <p><input type="email" name ="correo"></p>

    <label for="archivo">Archivo: </label>
    <p><input type="file" name ="archivo" multiple="multiple" /></p>


    <label for="numero">Numero: </label>
    <p><input type="number" name ="numero" /></p>

    <label for="pass">Contraseña: </label>
    <p><input type="password" name ="pass"></p>

    <label for="continente">Continente: </label>
    <p>
        America del sur <input type="radio" name ="continente" value="America del sur"/>
        Europa <input type="radio" name ="continente" value="Europa"/>
        asia <input type="radio" name ="continente" value="Asia"/>
    </p>

      
    <label for="web">pagina web: </label>
    <p><input type="url" name ="web"></p>

     <textarea></textarea> <br/>

     PELICULAS:
     <select name="peliculas">
        <option>"Spiderman"</option>
        <option>"Batman"</option>
        <option>"Jumangi"</option>
        <option>"Dragom ball super"</option>
        


     </select>
      <br/>
    <input type="submit"  value="Enviar" /> 

    </form>
    
</body>
</html>