
<div class="form-group">
<label for="exampleInputEmail1">Titulo</label>
<input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Url Limpia</label>
<input type="text" class="form-control" name="url_clean" id="exampleInputPassword1" placeholder="Ingrese Password" value="{{old('url_clean')}}">
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
    <textarea class="form-control" name="content" id="content" >{{old('content')}}</textarea>
    <br>
    <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
</div>
