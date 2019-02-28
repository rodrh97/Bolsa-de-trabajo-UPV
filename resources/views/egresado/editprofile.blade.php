<form method="post" action="/editar_egresado/{{auth()->user()->id}}" files="true" enctype="multipart/form-data">
    {{method_field('PATCH')}}  
    {{ csrf_field() }}  
    <div class="form-row">
    @foreach($users as $user)
            <div class="form-row">
            <div class="form-group col-md-12">
            <label>* Telefono actual del egresado</label>
            <input name='phone' type="text" style="color:black" value="{{$user->phone}}" maxlength="10">
            </div>
            </div>
            
            <div class="form-row">
            <div class="form-group col-md-6">
            <label>* Imagen actual del egresado</label>
            <img class="media-object" src="{{ URL::to($user->image_url) }}" alt="" style="width:100%;max-width:245px;height:100%;max-height:220px">
            </div>
            </div>

    <div class="form-row">
    <div class="form-group col-md-12">
    <center><button type="submit" class="btn btn-primary">Actualizar Perfil</button></center>
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-1">
    <center><a href="/perfil_egresado/{{auth()->user()->id}}"><button type="button" class="btn btn-secondary">Regresar Perfil</button></a></center>
    </div>
    </div>
    @endforeach
  </form>