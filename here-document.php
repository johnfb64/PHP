<?php

  //Para hacer un here document, se debe poner el cuerpo del texto deseado entre las entiquetas _END
  $author = "John F. Ballen";
  echo <<<_END //Se puede usar cualquier etiqueta diferente a _END, ejemplo _SECTION1, _OUTPUT, ETC... 
  Debugging is twice as hard as writing teh code in the first place.
  There fore, if you write the code as cleverly as possible,
  you are by definition, nos smart enough to debug it.

  - $author.
_END;
?>