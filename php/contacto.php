<?php
class formulario
{
    public function Contacto()
    {
?>
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <br> <br> <br>
                <p class="h1 text-justify font-weight-normal text-center"> Contactanos</p>
                <h6 class="text-center"><b> Ofer Consultores, C.A. J-50018016-0<b></h6>
                <br>
                <form action="" method="POST" enctype="multipart/form-data">

                    <input type="text" name="nombre" placeholder="Apellido y Nombre" class="form-control"> <br>

                    <input type="email" name="correo" placeholder="Direccion de Email" class="form-control"> <br>

                    <input type="number" name="numero" placeholder="Numero de Telefono" class="form-control"> <br>

                    <textarea class="form-control" rows="10" id="mensaje" placeholder="Mensaje" name="mensaje"></textarea> <br>

                    <div class="row justify-content-end">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                </form>

                <div class="row justify-content-end">
                    <h3 class="font-weight-normal"> En breve OFER se Comunicará </h3>
                </div>
            </div>
        </div>





<?php


        /*<?php          <h6 class="text-end font-weight-normal">  </h6>

            include "formulario.php";
              $contacto = new formulario;    
              $contacto -> Contacto();
          ?> */

    }
}
?>