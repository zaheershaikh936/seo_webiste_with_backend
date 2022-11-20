<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Company Info</h3>
              <a href="<?= url('/addEditService')?>"><button style='float:right;' class='btn btn-success'>Add</button></a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=1; foreach($service as $data){?>
                <tr>
                  <th scope="row"><?= $i;?></th>
                  <td><img style='width:10%;height:r50px;' src="<?= asset('/storage/image/'.$data['image']);?>" alt="services_image"></td>
                  <td><?= $data['description']; ?></td>
                  <td><a href="<?= url('/DeleteService/'.$data['id'] )?>"><button class='btn btn-danger'>Delete</button></a></td>
                </tr>
              <?php $i++; } ?>
              </tbody>
            </table>
        </div>
    </div>
</div>