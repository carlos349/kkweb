<?php include 'cabecera.php'; ?>

<section class="hero-wrap js-fullheight" style="background-image: url('views/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div style="" class="col-md-10 ftco-animate text-center">
        
        <h1 style="color:#605B56">Bienvenido <br> Cristians Sanchez</h1>
        <ul style="background-color: rgba(255, 255, 255, 0.534);" class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Panel de usuario</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Información de cliente</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Historial de cliente</a>
          </li>
        </ul>
        <div style="background-color: white;" class="tab-content p-5" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
              <div class="col-4 mb-3">
                <button style="background-color: brown;border-radius: 5px;" type="button" class="btn btn-outline-danger">Regalar una gif card</button>
              </div>
              <div class="col-4">
                <button style="background-color: #28a745;border-radius: 5px;" type="button" class="btn btn-outline-danger">Agendar una cita</button>
              </div>
              <div class="col-4">
                <button style="background-color: #17a2b8;border-radius: 5px;" type="button" class="btn btn-outline-danger">Cerrar sesión</button>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="card border-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Compras realizadas</div>
                  <div class="card-body text-success">
                    <h5 class="card-title">5</h5>
                    
                  </div>
                </div>
              </div>
              
              <div class="col-4">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Cantidad de Referidos</div>
                <div class="card-body text-info">
                  <h5 class="card-title">11</h5>
                  
                </div>
              </div>
              </div>
              
            </div>
            <h4>Link para referidos:</h4>
            <button style="border-radius: 5px;font-size: 1.1em;" type="button" class="btn btn-primary">
              https://kkprettynails.cl/refer=12831928312 <span class="badge badge-light">Copiar</span>
            </button>
            
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Cristians_sanchez@hotmail.com">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Cristians">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Sanchez">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Numero de telefono</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="0412-3462686">
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Instagram</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="@cristians_sanchez">
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Servicio</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Manicure</td>
                  <td>15/04/2020</td>
                  <td>$ 15.000</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Gif Card</td>
                  <td>21/05/2020</td>
                  <td>$ 23.000</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Manicure</td>
                  <td>05/07/2020</td>
                  <td>$ 19.000</td>
                </tr>
                
              </tbody>
            </table>
            
          </div>
        </div>
    </div>
  </div>
  </div>
</section>



<?php include 'footer.php'; ?>