<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Button home </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action='/edit-button' method='POST'>
            @csrf
              <div class="box-body row">
                <div class="col-md-6 form-group ">
                  <label for="exampleInputEmail1">Button 1</label>
                  <input type="hidden" name='id' value='<?php if(!empty($data['id'])){echo $data['id'];}?>'> 
                  <input type="text" name='button_1' class="form-control" id="exampleInputEmail1" placeholder="Enter Button 1" value='<?php if(!empty($data['button_1_name'])){ echo $data['button_1_name'];}?>'>
                </div>
                <div class="col-md-6 form-group ">
                  <label for="exampleInputEmail1">Button 1 url</label>
                  <input type="text" name='button_1_url' class="form-control" id="exampleInputEmail1" placeholder="URL"  value='<?php if(!empty($data['button_1_url'])){ echo $data['button_1_url'];}?>'>
                </div>
                <div class="col-md-6 form-group">
                  <label for="exampleInputPassword1">Button 2</label>
                  <input type="text" name='button_2' class="form-control" id="exampleInputPassword1" placeholder="Enter Button 2" value='<?php if(!empty($data['button_2_name'])){ echo $data['button_2_name'];}?>'>
                </div>
                <div class="col-md-6 form-group">
                  <label for="exampleInputPassword1"> Button 2 url</label>
                  <input type="text" name='button_2_url' class="form-control" id="exampleInputPassword1" placeholder="URL" value='<?php if(!empty($data['button_2_url'])){ echo $data['button_2_url'];}?>'>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>