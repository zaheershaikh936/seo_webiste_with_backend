<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Company Info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Message</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=1; foreach($contact as $data) {?>
                <tr>
                  <th scope="row"><?= $i;?></th>
                  <td><?= $data['name'];?></td>
                  <td><?= $data['lastName'];?></td>
                  <td><?= $data['email'];?></td>
                  <td><?= $data['subject'];?></td>
                  <td><?= $data['message'];?></td>
                  <td><a href="/DeleteContact/<?= $data['id']?>"><button class='btn btn-danger'>Delete</button></a></td>
                </tr>  
              <?php $i++; } ?>
              </tbody>
            </table>
        </div>
    </div>
</div>