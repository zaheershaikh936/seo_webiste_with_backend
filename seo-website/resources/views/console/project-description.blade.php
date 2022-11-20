<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Company Info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="/edit-project-description" method='POST'>
            @csrf
              <div class="box-body row">
                <div class="col-md-12 form-group ">
                <input type="hidden" name='id' value='<?php if(!empty($data['id'])){echo $data['id'];}?>'>
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name='title' class="form-control" id="exampleInputEmail1" placeholder="Title" value='<?php if(!empty($data['title'])){echo $data['title'];}?>'>
                </div>
                <div class="col-md-12 form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name='description' class="form-control" id="exampleInputPassword1" placeholder="Description" value='<?php if(!empty($data['description'])){echo $data['description'];}?>'>
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