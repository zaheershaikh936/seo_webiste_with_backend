<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Company Info</h3>
              <a href="<?= url('/add-infos-bar')?>"><button style='float:right;' class='btn btn-success'>Add</button></a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Percentage</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=1; foreach($InfoBar as $data){?>
                <tr>
                  <th scope="row">1</th>
                  <td><?= $data['title']; ?></td>
                  <td><?= $data['percentage']; ?></td>
                  <td><a href="<?= url('/DeleteIndosBar/'.$data['id'])?>"><button class='btn btn-danger'>Delete</button></a></td>
                </tr> 
              <?php $i++; }?>
              </tbody>
            </table>
        </div>
    </div>
</div>