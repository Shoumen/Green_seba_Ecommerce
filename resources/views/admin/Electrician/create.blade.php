@extends('layouts.admin')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css" integrity="sha512-3uVpgbpX33N/XhyD3eWlOgFVAraGn3AfpxywfOTEQeBDByJ/J7HkLvl4mJE1fvArGh4ye1EiPfSBnJo2fgfZmg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<style type="text/css">
  .bootstrap-tagsinput .tag {
    background: #428bca;;
    border: 1px solid white;
    padding: 1 6px;
    padding-left: 2px;
    margin-right: 2px;
    color: white;
    border-radius: 4px;
  }
</style>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Electrician</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Electrician</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <form action="{{ route('electrician.store') }}" method="post" enctype="multipart/form-data">
        @csrf
       	<div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Electrician</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <label for="exampleInputEmail1">Electrician Name <span class="text-danger">*</span> </label>
                      <input type="text" class="form-control" name="elec_name" value=""  required="">
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <label for="exampleInputEmail1">Electrician Phone <span class="text-danger">*</span> </label>
                      <input type="text" class="form-control" name="elec_phone" value=""  required="">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <label for="exampleInputEmail1">Electrician Email <span class="text-danger">*</span> </label>
                      <input type="text" class="form-control" name="elec_email" value=""  required="">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <label for="exampleInputEmail1">Electrician password <span class="text-danger">*</span> </label>
                      <input type="text" class="form-control" name="elec_password" value=""  required="">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <label for="exampleInputEmail1">Electrician Nid Number <span class="text-danger">*</span> </label>
                      <input type="text" class="form-control" name="elec_nid_number" value=""  required="">
                      
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-4">
                      <label for="exampleInput">Select Division<span class="text-danger">*</span>  </label>
                      <input type="text" class="form-control" name="division" value=""  required="">
                     
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="exampleInput">Select District <span class="text-danger">*</span> </label>
                      <input type="text" class="form-control" name="district" value=""  required="">
                       
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="exampleInput">Select upazila/Thana <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="upazila" value=""  required="">
                     
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <label for="exampleInputEmail1">Electrician Address <span class="text-danger">*</span> </label>
                      <input type="text" class=form-control name="elec_address" value="" required="">
                    </div>
                   
                  </div>
               
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <label for="exampleInputEmail1">Electrician Remarks <span class="text-danger">*</span> </label>
                      <input type="text" class=form-control name="elec_remarks" value="" required="">
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-12">
                      <label for="exampleInputPassword1">Product Details<span class="text-danger">*</span></label>
                      <textarea class="form-control textarea" name="elec_description"></textarea>
                    </div>
                  </div>
                  <!-- DEVELOPED BY SHOUMEN MONDAL https://github.com/Shoumen-->

                
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
           </div>
            <!-- /.card -->
          <!-- right column -->
          <div class="col-md-4">
            <!-- Form Element sizes -->
            <div class="card card-primary">
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Elctrician Image <span class="text-danger">*</span> </label><br>
                    <input type="file" name="thumbnail" required="" accept="image/*" class="dropify">
                  </div>
                  <br>
                  <div class="">  
                    <table class="table table-bordered" id="dynamic_field">
                    <div class="card-header">
                      <h3 class="card-title">Electrician NID (Click Add For Front Side And Back Side)</h3>
                    </div> 
                      <tr>  
                          <td><input type="file" accept="image/*" name="images[]" class="form-control name_list" /></td>  
                          <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>  
                      </tr>  
                    </table>    
                  </div>
                    

                     <div class="card p-4">
                        <h6>Status</h6>
                       <input type="checkbox" name="elec_status" value="1" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                     </div>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           </div>
           <button class="btn btn-info ml-2" type="submit">Submit</button>
         </div>
        </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<script src="{{ asset('backend') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>


<script type="text/javascript">
  $('.dropify').dropify();  //dropify image
  $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

     //ajax request send for collect childcategory
    //  $("#subcategory_id").change(function(){
    //   var id = $(this).val();

    //   console.log(id);
      
    //   $.ajax({
    //        url: "{{ url("/get-child-category/") }}/"+id,
    //        type: 'get',
    //        success: function(data) {
    //             $('select[name="childcategory_id"]').empty();
    //                $.each(data, function(key,data){
    //                   $('select[name="childcategory_id"]').append('<option value="'+ data.id +'">'+ data.childcategory_name +'</option>');
    //             });
    //        }
    //     });
    //  });




    $(document).ready(function(){      
       var postURL = "<?php echo url('addmore'); ?>";
       var i=1;  


       $('#add').click(function(){  
            i++;  
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" accept="image/*" name="images[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
       });  

       $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
       });  
  }); 


  

</script>
@endsection