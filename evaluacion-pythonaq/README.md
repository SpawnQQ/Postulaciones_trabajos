# Evaluación Ingeniero Python / Web

## Introducción
El objetivo de esta evaluación es medir las competencias asociadas al dominio de Python para poder trabajar en Machine Learning y los conocimientos del lenguaje de programación PHP, para poder trabajar con Symfony Framework.

## Instrucciones
- Cuentas con **3 horas** desde que se te dió acceso al repositorio.
- Debes hacer un **fork** del proyecto y después enviar un **pull request** a una rama **con tu nombre-apellido** 


## Preguntas
### Pregunta 1
#### Dominio de Python

Se tiene un dataset en el archivo [ted_main.csv](ted_main.csv) que tiene el registro de todas las charlas ted subidas al sitio TED.com hasta el 21 de septiembre de 2017.

Con este archivo, a través de un script python obtener lo siguiente:

1. Obtener la cantidad total de **horas** de videos.
2. Imprimir por pantalla el listado de eventos realizados. Considerar registros únicos.
3. Obtener la cantidad de veces que **Al Gore** ha realizado charlas.
4. ¿Cuáles es la charla con el **máximo** de visitas? ¿Y con el **mínimo**?
5. ¿Cuál es la cantidad promedio de lenguajes de las charlas?
6. Eliminar todas las charlas que no tengan lenguaje y guardar en un archivo llamado `ted_fixed.csv`


### Pregunta 2
#### Orientación a objetos en PHP
Se requiere crear una jerarquía de clases donde comience con el nivel más abstracto en una clase `Mamifero`, con métodos abstractos tales como comer(), dormir(), correr(), rugir() todas retornan un String.
De la clase abstracta va a tener dos sub clases que también son abstractas `Canino` y `Felino`, y de ellas tendríamos 4 clases `Perro`, `Lobo`, `Leon` y `Tigre` respectivamente dos en cada abstracta.

- Implementar jerarquía donde esté presente el polimorfismo, todas las implementaciones concretas deben de tener diferentes comportamiento para los métodos abstractos y además diferentes atributos, como por ejemplo la clase Perro podría tener el atributo dueño (un string con el nombre del su amo), el perro es alimentado por su amo y come pellets y duerme en el jardín o dentro de la casa, los perros ladran (forma de rugir), los perros tienen un nombre de mascota y una raza canina etc...
- Mientras que los lobos duermen en los bosques, en cuevas, viven en grupos, para comer tienen que cazar en grupo y rugen aullando en luna llena, que se yo, podrían tener un atributo numeroDeCamada (int que contiene la cantidad de integrantes de su camada), un atributo especie de lobo (Ibérico, Americano, Asiático, etc) etc.
- Los leones por ejemplo tienen que rugir muy fuerte, capaz de oírse a más de 8km de distancia, cazan en manada, principalmente gacelas y ñues.
- Los tigres son más solitarios, cazan solos y son de Asia (región siberiana) y , habitan en manglares y bosques monzónicos, principal presa son los jabalíes y ciervos. Ubicación o localidad podría ser un atributo de la clase abstracta Mamífero, lo mismo con el color y altura, largo, peso, etc.
- Implementar una clase Index con método run (estático), donde se muestre e implemente el funcionamiento y colaboración de los objetos de la jerarquía, al menos crear dos instancias por cada clase concreta.

El ejercicio deberá tener las siguientes clases:

1. Mamifero.php(abstract)
2. Canino.php(abstract)
3. Felino.php(abstract)
4. Lobo.php
5. Perro.php
6. Leon.php
7. Tigre.php
8. index.php(con el run implementado)
