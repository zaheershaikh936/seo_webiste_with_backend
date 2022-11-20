<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Company Info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action='/edit-home-details' method='POST'>
              @csrf
              <div class="box-body row">
                <div class="col-md-12 form-group ">
                  <label for="exampleInputEmail1">Tile</label>
                  <input type="hidden" name='id' value='<?php if(!empty($data['id'])){echo $data['id']; }?>'>
                  <textarea name="title" class="form-control"><?php if(!empty($data['title'])){ echo $data['title'];}?></textarea>
                </div>
                <div class="col-md-12 form-group ">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea name="description" class="form-control"><?php if(!empty($data['description'])){ echo $data['description'];}?></textarea>
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