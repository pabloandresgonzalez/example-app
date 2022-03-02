<div class="py-5 text-center">
      <h2>Formulario de resgitro</h2>
      <p class="lead">Por favor diligenciar todos los campos.</p>
    </div>
  <div class="col-md-7 col-lg-12">

    @if($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}
        </li>
        @endforeach
        <ul>
      </div>
    @endif


      <form role="form" method="POST" action="{{ route('store.empleado') }}">
      @csrf


      <div class="col-md-12">
        <div class="input-group input-group-alternative mb-3">
          <div class="col-md-3">
            <label for="email" class="form-label"> Nombre Completo *</label>
          </div>
          <input class="form-control" placeholder="Nombre completo del empleado" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
       </div>
      </div>
      <div class="col-md-12">
        <div class="input-group input-group-alternative mb-3">
          <div class="col-md-3">
            <label for="email" class="form-label"> Correo electronico *</label>
          </div>
          <input class="form-control" placeholder="Correo Electronico" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
       </div>
      </div>
      <div class="col-md-12">
        <div class="col-md-3">
            <label for="email" class="form-label"> Sexo *</label>
          </div>                
          <div class="col-md-7">
            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino" checked>
            <label  for="sexo">
              Masculino
            </label>
          </div>
          <div class="col-md-7">
            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Femenino">
            <label  for="sexo">
              Femenino
            </label>
          </div>                
      </div>
      <div class="col-md-12">
        <div class="input-group input-group-alternative mb-3">
          <div class="col-md-3">
            <label for="email" class="form-label"> Área *</label>
          </div>
          <select id="area" name="area" class="form-control" required>
            <option value="">Tipo de área</option>
              <option value="Administración"  >Administración</option>
              <option value="Ventas"  >Ventas</option>
          </select>
       </div>
      </div>
      <div class="col-md-12">
        <div class="input-group input-group-alternative mb-3">
          <div class="col-md-3">
            <label for="descripcion" class="form-label"> Descripción *</label>
          </div>
          <textarea class="form-control" placeholder="Descripción de la experiencia de usuario" id="descripcion"
          type="textarea" name="descripcion" value="" required autocomplete="descripcion" style="height: 100px"></textarea>
       </div>
      </div>
      <div class="col-md-12">
        <div class="col-md-9">
          <input class="form-check-input" type="checkbox" value="si" name="boletin" id="boletin">
          <label class="form-check-label" for="gridCheck">
            Deseo recibir boletín informativo
          </label>
        </div>
      </div><br><br>
      <div class="col-md-12">
        <div class="col-md-3">
            <label for="email" class="form-label"> Roles *</label>
          </div>                
            <div class="col-md-10">
          <input class="form-check-input" type="checkbox" name="rol" id="rol" value="1">
          <label class="form-check-label" for="gridCheck">
            Profesional de proyectos desarrollador
          </label>
        </div>
        <div class="col-md-9">
          <input class="form-check-input" type="checkbox" name="rol" id="rol" value="2">
          <label class="form-check-label" for="gridCheck">
            Gerente estratégico
          </label>
        </div>
        <div class="col-md-9">
          <input class="form-check-input" type="checkbox" name="rol" id="rol" value="3">
          <label class="form-check-label" for="gridCheck">
            Auxiliar administrativo
          </label>
        </div> 
      </div>
      <br>


      <div class="text-center"><br>
        <button type="submit" id="btn" class="btn btn-primary">Guardar</button>
      </div>
      </form>

  </div>