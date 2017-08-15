@extends('layouts.app')

@section('titulo')
  Preguntas Frecuentes
@endsection

@section('content')
  <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
          <h1 class="page-header">Preguntas Frecuentes
          <small></small>
          </h1>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
          <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >¿Cómo comprar en LAFLEURDUTEMPS.COM.AR?</a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse">
                      <div class="panel-body">
                        Navega nuestro shop online y sus distintas categorías en el menú y elegí los productos que querés comprar.

                        Una vez en el producto selecciona color, talle y cantidad, y agrégalos a tu carrito de compras.

                        Ingresa en tu cuenta, en caso de no tener una podras registrarte, completa tus datos, tu dirección de facturación y de envío.

                        Elegí el método de envío y el medio de pago con el que quieras abonar tu compra.

                        Cuando se confirme la compra vas a recibir un mail de confirmación con los datos de tu compra.

                        Si querés consultar el estado de tu orden y hacer un seguimiento del envío, hace click en MI CUENTA.
                      </div>
                  </div>
              </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">¿Puedo comprar un producto y cambiarlo?</a>
                      </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        Solo se pueden cambiar los SOUTIENS.

                        Los cambios se pueden realizar hasta 30 días y se debe mantener la bolsa de tela que resguarda el producto, podrá gestionarlo de 2 formas:

                        Directamente en nuestras Boutiques presentando tu factura.

                        En caso de no tener un local cercano deberá enviar una solicitud de cambio a info@lafleurdutemps.com.ar Este tipo de cambio puede ser por un crédito.
                      </div>
                  </div>
              </div>

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">¿Puedo comprar un producto y devolverlo?</a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        Solo se aceptan devoluciones en el caso que el producto adquirido presente una falla de fábrica y este sin uso.

                        LAFLEURDUTEMPS permite 14 días hábiles después de su compra, para contactar info@lafleurdutemps.com.ar si un defecto es encontrado en un producto.
                      </div>
                  </div>
              </div>

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">¿Cuáles son los medios de pago?</a>
                      </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body">
                        Los medios de pago con los que podes realizar tu compra en LAFLEURDUTEMPS.COM.AR son:

                        Mercado Pago: Mas información en: www.mercadopago.com

                        TodoPago

                        Decidir: Medio de pago de promociones bancarias.
                      </div>
                  </div>
              </div>

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">¿Tabla de Talles?</a>
                      </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                      <div class="panel-body">
                        <img src="/img/talles.jpg" style="height:600px; margin: 0 auto;"alt="">
                      </div>
                  </div>
              </div>

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle lead" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">¿Puedo pedir factura?</a>
                      </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse">
                      <div class="panel-body">
                        Por el momento LAFLEURDUTEMPS.COM.AR opera solamente con facturas tipo "B", para consumidor final.
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>

  <hr>

  <footer>
      <div class="row">
          <div class="col-lg-12">
                <p>Copyright &copy; La Fleur du Temps</p>
          </div>
      </div>
  </footer>
</div>

  </body>

  </html>

@endsection
