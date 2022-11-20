<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Company Info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="/edit" method='POST' >
              @csrf
              <div class="box-body row">
                <div class="col-md-4 form-group ">
                <input type="hidden" name='id' value='<?php if(!empty($data['id'])){echo $data['id'];} ?>'>
                  <label for="exampleInputEmail1">Mobile Number</label>
                  <input type="text" name='mobile' class="form-control" id="exampleInputEmail1" placeholder="Enter mobile number" value='<?php if(!empty($data['mobile'])){echo $data['mobile'];} ?>'>
                </div>
                <div class="col-md-4 form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name='email' class="form-control" id="exampleInputPassword1" placeholder="Enter Email" value='<?php if(!empty($data['mobile'])){echo $data['email'];} ?>'>
                </div>
                <div class="col-md-4 form-group">
                  <label for="exampleInputPassword1">Short Address</label>
                  <input type="text" name='address' class="form-control" id="exampleInputPassword1" placeholder="Enter Address" value='<?php if(!empty($data['mobile'])){echo $data['address'];} ?>' >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type='submit' class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>