<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action='/add-indos-bar' method='POST'>
            @csrf
              <div class="box-body row">
                <div class="col-md-6 form-group">
                  <label for="exampleInputPassword1">Title</label>
                  <input type="text" name='title' class="form-control" id="exampleInputPassword1" placeholder="Title">
                </div>
                <div class="col-md-6 form-group">
                  <label for="exampleInputPassword1">Percentage</label>
                  <input type="text" name='percentage' class="form-control" id="exampleInputPassword1" placeholder="Percentage">
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