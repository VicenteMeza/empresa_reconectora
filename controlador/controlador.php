<?php
    class Controlador
    {
        //metodo que carge la platilla
        static public function pagina()
        {
            include("vistas/plantilla.php");
        }

        //metodo que gestiona los enlaces
        static public function enlacespagina()
        {
            if(isset($_GET['accion']))
            {
                $enlace = $_GET['accion'];
            }
            else
            {
                $enlace = "principal";
            }
            $respuesta = Paginas::enlacesPaginas($enlaces);

            //muestra la pagina
            include $respuesta;
            //prueba
        }
    }
?>