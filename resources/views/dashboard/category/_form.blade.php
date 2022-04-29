
<div class="form-group">
    <label for="exampleInputEmail1">Titulo de Categoria</label>
    <input type="text" class="form-control" name="title" id="title" value="{{old('title', $category->title)}}">
    </div>
    
    <div class="form-group">
    <label for="exampleInputPassword1">Url Limpia de Categoria</label>
    <input type="text" class="form-control" name="url_clean" id="exampleInputPassword1" placeholder="Ingrese Password" value="{{old('url_clean', $category->url_clean)}}">

    <br>
        <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>

    </div>
    
