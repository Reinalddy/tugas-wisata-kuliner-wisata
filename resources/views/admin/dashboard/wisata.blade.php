@extends('admin.master.master-admin')

@section('title','Tours')

@section('content')
<div class="row">
  <div class="col-md-12">
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#wisata-modal">Add New Tours</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tours</th>
          <th scope="col">Uploaded By</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wisata as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->user->name }}</td>
        <td>
          <button class="bi bi-trash" onclick="deleteWisata({{ $item->id }})"> Delete</button>
        </td>
            
      </tr>
        @endforeach        
      </tbody>
    </table>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="wisata-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Culinary</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="container">
              <div class="mb-5">
                  <form enctype="multipart/form-data" id="add_tours_form">
                    <div class="form-group mt-3">
                      <label for="name" class="form-label">Tours Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group mt-3">
                      <label for="desc" class="form-label">Tours Description</label>
                      <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                      <label for="desc" class="form-label">Tours Image</label>
                      <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                      <label for="desc" class="form-label">Culinary Image</label>
                      <select id="categories" class="form-control" name="category">
                        @foreach ($categories as $item)
                            
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <button class="btn btn-primary mt-5" type="submit" id="btn-upload-categories">Submit</button>
                    <button class="btn btn-primary mt-5 d-none" type="submit" disabled id="btn-loading-upload-categories">
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      Loading...
                    </button>

                  </form>
              </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@push('jquery')
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>    
@endpush
<script>
  $(document).ready(function () {
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
  });

  $("#add_tours_form").on("submit", function(e){
    e.preventDefault();
    let data = new FormData(this);

    $.ajax({
      type: "POST",
      url: "{{ url('/dashboard/wisata/add') }}",
      data: data,
      cache:false,
      contentType: false,
      processData: false,
      dataType: "JSON",
      beforeSend: function (){  
        $("#btn-loading-upload-categories").removeClass('d-none');
        $("#btn-upload-categories").addClass('d-none');
      },
      success: function (response) {
        if(response.code == 200) {
          $("#btn-loading-upload-categories").addClass('d-none');
          $("#btn-upload-categories").removeClass('d-none');
          Swal.fire(
            'Success!',
            response.messages,
            'success'
          )

        } else if (response.code == 422) {
            $.each(response.data,function(field_name,error) {
                $(document).find('[id='+field_name+']').after('<div class="invalid-feedback d-block">' + error + '</div>')
            })
        }
        
      },error: function (err) {
            $.each(err.responseJSON.errors, function (key, value) {
                $("#" + key).next().html(value[0]);
                $("#" + key).next().removeClass('d-none');
            });
        }
    });
  })
  
});


function deleteWisata(id) {
    Swal.fire({
    title: 'This data will deleted permanently Are You Sure ?',
    showCancelButton: true,
    confirmButtonText: 'Yes',
    denyButtonText: `NO`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "{{ url('/dashboard/wisata/delete') }}/" + id,
          data: {'id' : id},
          dataType: "json",
          success: function (response) {
            console.log(response);
            if(response.code == 200) {
                Swal.fire(
                    'Success!',
                    response.messages,
                    'success'
                )
              } else if (response.code == 400) {
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: response.message,
                })

              }
          }
        });
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
  // $.ajax({
  //   type: "post",
  //   url: "{{ url('/dashboard/delete/posts') }}/" + id,
  //   data: {'id' : id},
  //   dataType: "json",
  //   success: function (response) {
  //     if(response.code == 200) {
  //         Swal.fire(
  //             'Success!',
  //             response.messages,
  //             'success'
  //         )
  //       }
  //   }
  // });
}

</script>

@endsection