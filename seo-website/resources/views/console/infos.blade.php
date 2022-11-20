<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Infos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action='/editInfos' method='POST'>
            @csrf
              <div class="box-body row">
                <div class="col-md-4 form-group ">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="hidden" name='id' value='<?php if(!empty($data['id'])){echo $data['id'];} ?>'>
                  <input type="text" name='title' class="form-control" id="exampleInputEmail1" placeholder="Title" value='<?php if(!empty($data['title'])){echo $data['title'];} ?>'>
                </div>
                <div class="col-md-8 form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="titleDescription" class='form-control'><?php if(!empty($data['titleDescription'])){echo $data['titleDescription'];} ?></textarea>
                </div>
                <div class="col-md-12 form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="description" class='form-control'><?php if(!empty($data['description'])){echo $data['description'];} ?></textarea>
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