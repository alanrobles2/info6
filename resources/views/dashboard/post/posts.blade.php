@extends('layouts.master')

@section('content')
<h1>Post</h1>

<a href="{{ route('post.create')}}" class="btn btn-success">Create</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
      <th scope="col" colspan="2">Options</th>
      
    </tr>
  </thead>
  <tbody>
    
    @foreach ($posts as $post)
      <tr>
      <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->url_clean}}</td>
        <td>
          <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
          <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $post->id }}" type="submit" class="btn btn-danger">Delete</button>
        </td>

      </tr>  
    @endforeach
    

  </tbody>
</table>

<div class="mt-3">{{ $posts->links() }}</div>

<div class="modal fade" id="deleteModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de borrar el registro seleccionado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form id="formDelete" action="{{route('post.destroy', 0)}}" method="POST">
          @csrf
          @method("DELETE")
          <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  /*
  window.onload = function() {
    $("#deleteModal").on('show.bs.modal', function (event) {
      // Button that triggered the modal
      var button = $(event.relatedTarget);
      var id = button.data('id');

      action = $('#formDelete').attr('data-action').slice(0, -1);
      action += id;

      var modal = $(this);
      modal.find('.modal-title').text('Eliminar el Post: ' + id)
    })
  }
  */

  var deleteModal = document.getElementById('deleteModal')
  deleteModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var id = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    // Update the modal's content.
    var modalTitle = deleteModal.querySelector('.modal-title')

    var action = formDelete.getAttribute('action').slice(0, -1) + id;
    //action += id;  
    console.log(action);
    formDelete.setAttribute('action', action);                                    

    //console.log(formDelete.getAttribute('action'));


    modalTitle.textContent = 'Post: ' + id;
    //modalBodyInput.value = recipient
  })

</script>

  

@endsection