##GranadaTS


Proyecto creación aplicación para empresa.

Los miembros de este proyecto son:


* Jose López Sánchez

* Rafael Gónzalez Jiménez

* Raúl Sánchez Fuentes

La dirección del proyecto es: http://granadats.cloudapp.net

Este es un proyecto para la empresa Granada Tierra Soñada, http://www.granadatierrasoñada.es/.

La idea de esta empresa se basa en su tipología creada, basaba en Granada. Es un proyecto apasionante y muy innovador.

Con ello vamos a crear una aplicación en HTML5. En ella se mostrará un conjunto de imágenes en las vamos a superponer un texto, con la tipografia de Granada Tierra Soñada.

Como herramientas utilizaremos Azure, para colgar la aplicación y bootstrap como framework.


###INSTALACIÓN SERVIDOR EN AZURE

El servidor que vamos utilizar tiene las siguientes prestaciones:

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20Azure/Captura%20de%20pantalla%202014-01-24%20a%20la%28s%29%2018.06.22.png)

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20Azure/Captura%20de%20pantalla%202014-01-24%20a%20la%28s%29%2018.06.30.png)

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20Azure/Captura%20de%20pantalla%202014-01-24%20a%20la%28s%29%2018.07.02.png)

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20Azure/Captura%20de%20pantalla%202014-01-24%20a%20la%28s%29%2018.07.14.png)

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20Azure/Captura%20de%20pantalla%202014-01-24%20a%20la%28s%29%2018.07.35.png)


Para el entorno hemos trabajado con Bootstrap, utilizando HTML5.

Hemos decidido utilizar Bootstrap por su funcionalidad responsive, pues nuestra aplicación ha de ser visionada desde todo tipo de dispositivos, y apoyado en HTML5, conseguimos una aplicación completa realizando su labor.

Para el trabajo con imágenes hemos utilizado Inkscape, con el que hemos conseguido introducir el texto deseado por el usuario en la imagen deseada.

Después gracias a PHP (y a Sergio) y a la función rsvg transformamos la imagen al formato png, para su posterior descarga.

Vamos a pasar a mostrar nuestra apliación:

En esta primera cáptura podemos observar la página de inicio, donde podemos observar un menú para navegar por la aplicación. También podemos ver un carrusel con imagenes de muestra de la empresa. Señalamos que la tipografía usada para la aplicación es también la proporcionada por Granada Tierra Soñada.

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20web/Captura%20de%20pantalla%202014-01-26%20a%20la%28s%29%2010.36.22.png)

La pestaña de Tipografía del menú, nos lleva al principal contenido del proyecto, donde accedemos a las funciones de transformación de texto por un usuario en la tipografía de Granada Tierra Soñada. 

Podemos obserbar un cuadro de texto donde el usuario puede escribir, escogerá el tamaño de letra y el tipo de fondo. Finalmente escogerá el color de fondo y presionará "Enviar".

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20web/Captura%20de%20pantalla%202014-01-26%20a%20la%28s%29%2010.36.37.png)

Vemos como ya nos devuelve la imagen con el texto deseado y la tipografía de Granada Tierra Soñada.

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20web/Captura%20de%20pantalla%202014-01-26%20a%20la%28s%29%2010.37.05.png)

Si entramos en "Imágenes" del menú, accedemos a una zona que dejamos reservada para futuras imágenes de la empresa, en post de nuevas actualizaciones.

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20web/Captura%20de%20pantalla%202014-01-26%20a%20la%28s%29%2010.38.36.png)

También tenemos la pestaña "Música", otra zona para una posterior actualización.

Y por último tenemos una pestaña de "Contacto", donde se encuentra al equipo del proyecto.

![IV](https://raw2.github.com/IV-GII/GranadaTS/master/Capturas%20web/Captura%20de%20pantalla%202014-01-26%20a%20la%28s%29%2010.38.56.png)


# Instalación de la tipografía






# Explicación del código

El código para realizar la web es en lenguaje HTML5, realizado con Bootstrap. Esta parte del código no es relevante para comentar, por ello nos centraremos en las partes donde esta la parte de la tipografía y el cógido que se usa para generar la imagen.

