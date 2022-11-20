<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Social Media Link</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="/social-media-edit" method='POST' >
              @csrf
              <div class="box-body row">
                <div class="col-md-4 form-group ">
                <input type="hidden" name='id' value='<?php if(!empty($data['id'])){ echo $data['id'];} ?>'>
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" name='facebook' class="form-control" id="exampleInputEmail1" placeholder="facebook" value='<?php if(!empty($data['facebook'])){echo $data['facebook'];} ?>'>
                </div>
                <div class="col-md-4 form-group">
                  <label for="exampleInputPassword1">Twitter</label>
                  <input type="text" name='twitter' class="form-control" id="exampleInputPassword1" placeholder="Twitter" value='<?php if(!empty($data['twitter'])){echo $data['twitter'];} ?>'>
                </div>
                <div class="col-md-4 form-group">
                  <label for="exampleInputPassword1">Linkedin</label>
                  <input type="text" name='linkedin' class="form-control" id="exampleInputPassword1" placeholder="Linkedin"  value='<?php if(!empty($data['linkedin'])){echo $data['linkedin'];} ?>'>
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