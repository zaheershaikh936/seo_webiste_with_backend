<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start --> 
            <form action='/serviceAddEdit' method='POST' enctype="multipart/form-data">
            @csrf
              <div class="box-body row">
                <div class="col-md-6 form-group ">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="hidden" name='id' value='<?php if(!empty($data['id'])){ echo $data['id'];}?>'>
                  <input type="file" name='image' class="form-control" id="exampleInputEmail1">
                  <input type="hidden" name='image_hidden' value='<?php if(!empty($data['image'])){ echo $data['image'];}?>'>
                </div>
                <div class="col-md-6 form-group">
                  <label for="exampleInputPassword1">Project URL</label>
                  <input type="text" name='url' class="form-control" id="exampleInputPassword1" placeholder="Project URL" value='<?php if(!empty($data['url'])){ echo $data['url'];}?>'>
                </div>
                <div class="col-md-12 form-group">
                  <label for="exampleInputPassword1">Project Description</label>
                  <input type="text" name='description' class="form-control" id="exampleInputPassword1" placeholder="Project Description" value='<?php if(!empty($data['description'])){ echo $data['description'];}?>'>
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