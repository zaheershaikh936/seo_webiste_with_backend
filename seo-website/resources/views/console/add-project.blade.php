<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action='/save-projects' method='POST' enctype="multipart/form-data">
            @csrf
              <div class="box-body row">
                <div class="col-md-4 form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <input type="file" name='image' class="form-control">
                  <input type="hidden" name='hidden_image'>
                </div>
                <div class="col-md-4 form-group">
                  <label for="exampleInputPassword1">Title</label>
                  <input type="text" name='title' class="form-control" id="exampleInputPassword1" placeholder="Title">
                </div>

                <div class="col-md-4 form-group">
                  <label for="exampleInputPassword1">Url</label>
                  <input type="text" name='url' class="form-control" id="exampleInputPassword1" placeholder="Url">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>