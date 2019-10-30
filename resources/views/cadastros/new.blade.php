
<section class="content-header">
  <h1>Cadastro de usuário</h1>

</section>
<style> .box{ color:#3c8dbc; } </style>  {{-- cor do texto  --}}
<section class="content">
  <div class="box">
  <form method="POST" action="{{route('cadastro.store')}}" class="form-validate">
      <div class="box-body">
        @csrf
          <div class="form-group row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="name" class="col-form-label text-md-right">{{ __('Nome') }}</label>
                <input id="description" type="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="name" placeholder="Nome" required>
                @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!--------->
           <!--------->
           <div class="col-md-3">
            <div class="form-group">
              <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="" placeholder="E-mail" required>
              @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>Email já cadastrado</strong>
              </span>
              @endif
            </div>
          </div>
          <!--------->
           <!--------->
            <!--------->
            <div class="col-md-2">
              <div class="form-group">
                <label for="teledone" class="col-form-label text-md-right">{{ __('Celular') }}</label>
                <input id="impitTelefone" type="text" name="telefone"  data-mask="(00)00000-0000" maxlength="14" class="form-control">
                @if ($errors->has('telefone'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('telefone') }}</strong>
                </span>
                @endif
              </div>
            </div>

          
            <div class="col-md-4">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="" class="btn btn-default">Voltar</a>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>
