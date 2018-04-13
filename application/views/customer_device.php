<!-- <div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <section id="scroll-dynamic">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="pull-left">
                                    <span style="font-size: 25px;">Table Device Customer</span>
                                    <br>
                                    <br>
                                    <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-secondary btn-min-width" data-toggle="modal" data-target="#addDeviceModal">
                                    <i class="ft-user-plus"></i> Add Device
                                    </button>
                                </div>
                                <div class="row text-right">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <span style="font-size: 25px;">Date Filter</span>
                                            <br>
                                            <br>
                                            <div class="row pull-right">
                                                <div class="input-group col-md-6">
                                                    <input type='text' class="form-control pickadate-selectors" placeholder="Date Begin" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <span class="fa fa-calendar-o"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="input-group col-md-6">
                                                    <input type='text' class="form-control pickadate-selectors" placeholder="Date End" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <span class="fa fa-calendar-o"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            awal table
                            <div class="card-body collapse show">
                                <div class="card-block card-dashboard">
                                    <table class="table table-striped table-bordered dynamic-height">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Customer Device</th>
                                                <th>Customer ID</th>
                                                <th>Device ID</th>
                                                <th>Device Alias</th>
                                                <th>PIN</th>
                                                <th>Keyword</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>id customer device </td>
                                                <td>customer id</td>
                                                <td>device id</td>
                                                <td>device alias</td>
                                                <td>pin</td>
                                                <td>keyword</td>
                                                <td>
                                                    tombol edit device
                                                    <button type="button" id="editDevice" class="btn mr-1 mb-1 btn-success btn-sm" data-toggle="modal" data-target="#editDeviceModal">
                                                    <i class="ft-edit-2"></i> Edit
                                                    </button>
                                                    tombol delete device
                                                    <button type="button" id="deleteDevice" class="btn mr-1 mb-1 btn-danger btn-sm">
                                                    <i class="ft-x"></i> Delete
                                                    </button>
                                                    tombol detail device
                                                    <button type="button" id="detailDevice" data-toggle="modal" data-target="#detailDeviceModal" class="btn mr-1 mb-1 btn-info btn-sm">
                                                    <i class="icon-info"></i> Detail
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            akhir table
                            modal edit device
                            <div class="modal fade text-left" id="editDeviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Edit Device</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        form modal edit device
                                        <form>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input type="text" class="form-control" id="name" placeholder="device Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>IP Address</label>
                                                            <input type="text" class="form-control" id="ipaddress" placeholder="IP Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Contact</label>
                                                            <input type="text" class="form-control" id="contact" placeholder="Contact Person">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" id="email" placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <fieldset class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea class="form-control" id="address" rows="3" placeholder="Full Address"></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                                                <input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            akhir modal edit device
                            modal add new device
                            <div class="modal fade text-left" id="addDeviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Add device</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        form modal add device
                                        <form>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <label>ID Customer Device</label>
                                                            <input type="text" class="form-control" id="idcustomerdevice" placeholder="ID Customer Device">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Customer ID</label>
                                                            <input type="text" class="form-control" id="customerid" placeholder="Customer ID">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Device ID</label>
                                                            <input type="text" class="form-control" id="deviceid" placeholder="Device ID">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label>Device Alias</label>
                                                            <input type="text" class="form-control" id="devicealias" placeholder="Device Alias">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>PIN</label>
                                                            <input type="text" class="form-control" id="pin" placeholder="PIN">
                                                        </div>
                                                    </div>
                                                </div>
                                                <fieldset class="form-group">
                                                    <label for="address">Keyword</label>
                                                    <textarea class="form-control" id="keyword" rows="3" placeholder="Keyword"></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                                                <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            akhir modal add device
                        </div>
                    </div>
                </div>
            </section>
            Table device
        </div>
    </div>
</div> -->
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <section id="scroll-dynamic"><!-- <section id="horizontal"> -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="col-md-6 col-sm-12 pull-left mb-2" style="font-size: 25px;text-align: left;">Table Customer Device</span>
                            <span class="col-md-6 col-sm-12 pull-right mb-2" style="font-size: 25px;text-align: right;">Date Filter</span>
                            <br>
                            <br>
                            <div class="row mt-3">
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="input-group col-md-4 col-sm-12 mx-auto">
                                            <input type='text' class="form-control text-center pickadate-selectors" placeholder="Date Begin"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <span class="fa fa-calendar-o"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="input-group col-md-4 col-sm-12 mx-auto">
                                            <input type='text' class="form-control text-center pickadate-selectors" placeholder="Date End"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <span class="fa fa-calendar-o"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-secondary btn-min-width" data-toggle="modal" data-target="#addDeviceModal">
                                    <i class="ft-user-plus"></i> Add Device
                                </button>
                            </div>
                        </div>
                        <div class="card-body collapse show">
                            <div class="card-block card-dashboard">
                                <table class="table table-striped table-bordered dynamic-height">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Customer Device</th>
                                            <th>Customer ID</th>
                                            <th>Device ID</th>
                                            <th>Device Alias</th>
                                            <th>PIN</th>
                                            <th>Keyword</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($device->result_array() as $u): 
                                                $id				=$u['id'];
                                                $customer_id 	=$u['customer_id'];
                                                $device_id 		=$u['device_id'];
                                                $device_alias	=$u['device_alias'];
                                                $pin            =$u['pin'];
                                                $description	=$u['description'];
                                                $keyword        =$u['keyword'];
                                        ?>
                                        <tr>
                                          <td>
                                            <?php echo $no++; ?>
                                          </td>
                                          <td>
                                            <?php echo $id; ?>
                                          </td>
                                          <td>
                                            <?php echo $customer_id; ?>
                                          </td>
                                          <td>
                                            <?php echo $device_id; ?>
                                          </td>
                                          <td>
                                            <?php echo $device_alias; ?>
                                          </td>
                                          <td>
                                            <?php echo $pin; ?>
                                          </td>
                                          <td>
                                            <?php echo $keyword; ?>
                                          </td>
                                            <td>
                                                <!-- tombol edit device-->
                                                <button type="button" id="editDevice" class="btn mr-1 mb-1 btn-success btn-sm" data-toggle="modal" data-target="#modal_edit<?php echo $id;?>">
                                                <i class="ft-edit-2"></i> Edit
                                                </button>
                                                <!-- tombol delete device -->
                                                <button type="button" id="deleteDevice" class="btn mr-1 mb-1 btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?php echo $id;?>">
                                                <i class="ft-x"></i> Delete
                                                </button>
                                                <!-- tombol detail device -->
                                                <button type="button" id="detailDevice" data-toggle="modal" data-target="#detailDeviceModal" class="btn mr-1 mb-1 btn-info btn-sm">
                                                <i class="icon-info"></i> Detail
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Table customer device -->
    </div>
</div>

              <!-- modal edit customer -->
                <?php
                    foreach ($device->result_array() as $u): 
                        $id				=$u['id'];
                        $customer_id 	=$u['customer_id'];
                        $device_id 		=$u['device_id'];
                        $device_alias	=$u['device_alias'];
                        $pin            =$u['pin'];
                        $description	=$u['description'];
                        $keyword        =$u['keyword'];
                ?>
              <div class="modal fade text-left" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Edit Customer Device</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal edit customer-->
                    <?php echo form_open('customerdevice/edit_data_device',array('class'=>'form-horizontal','method'=>'post')); ?>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-4">
                            <div class="form-group">
                              <label>Id</label>
                              <input name="id" value="<?php echo $id;?>" class="form-control" type="text" placeholder="Id" readonly>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <label>Customer Id</label>
                              <input name="customer_id" value="<?php echo $customer_id;?>" class="form-control" type="text" placeholder="Customer Id" readonly>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <label>Device Id</label>
                              <input name="device_id" value="<?php echo $device_id;?>" class="form-control" type="text" placeholder="Device Id" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-8">
                            <div class="form-group">
                              <label>Device Alias</label>
                              <input name="device_alias" value="<?php echo $device_alias;?>" class="form-control" type="text" placeholder="Device Alias" required>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <label>Pin</label>
                              <input name="pin" value="<?php echo $pin;?>" class="form-control" type="text" placeholder="Pin" required>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <label>Keyword</label>
                              <input name="keyword" value="<?php echo $keyword;?>" class="form-control" type="text" placeholder="Keyword" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label>Deskripsi</label>
                              <input name="description" value="<?php echo $description;?>" class="form-control" type="text" placeholder="Deskripsi" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
                      </div>
                    <?php echo form_close() ?>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
              <!-- akhir modal edit customer -->
              <!-- modal add new customer-->
              <div class="modal fade text-left" id="addDeviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Add Customer Device</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal add customer-->
                    <?php echo form_open('customerdevice/tambah_data_device',array('class'=>'form-horizontal','method'=>'post')); ?>
                    <div class="modal-body">
                        <div class="row">
                          <div class="col-4">
                            <div class="form-group">
                              <label>Customer Id</label>
                              <input name="customer_id" class="form-control" type="text" placeholder="Customer Id" required>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <label>Device Id</label>
                              <input name="device_id" class="form-control" type="text" placeholder="Device Id" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-8">
                            <div class="form-group">
                              <label>Device Alias</label>
                              <input name="device_alias" class="form-control" type="text" placeholder="Device Alias" required>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <label>Pin</label>
                              <input name="pin" class="form-control" type="text" placeholder="Pin" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <fieldset>
                                    <label>Keyword</label>
                                        <div class="form-group">
                                             <div class="case-sensitive form-control" data-tags-input-name="case-sensitive">
                                                <input name="keyboard" class="form-control" type="text">   
                                             </div>        
                                        </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-4">
                            <div class="form-group">
                              <label>Deskripsi</label>
                              <input name="description" class="form-control" type="text" placeholder="Deskripsi">
                            </div>
                          </div>
                        </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
                    </div>
                    <?php echo form_close() ?>
                  </div>
                </div>
              </div>
              <!-- akhir modal add customer -->
              <!-- modal detail customer -->
              <div class="modal fade text-left" id="detailCustomerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title">Detail Device Customer</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- form modal edit customer-->
                    <div class="col-xl-12 col-sm-12 col-lg-12">
                      <div class="justified-tabs">
                        <ul class="nav nav-tabs nav-justified">
                          <li class="nav-item">
                            <a class="nav-link" id="home-tab3" data-toggle="tab" href="#home3" aria-controls="home3" aria-expanded="true">AC</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" id="profile-tab3" data-toggle="tab" href="#profile3" aria-controls="profile3" aria-expanded="false">TV</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" id="dropdown31-tab" href="#dropdown31" data-toggle="tab" aria-controls="dropdown31" aria-expanded="true">@fat</a>
                              <a class="dropdown-item" id="dropdown32-tab" href="#dropdown32" data-toggle="tab" aria-controls="dropdown32" aria-expanded="true">@mdo</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="about-tab3" data-toggle="tab" href="#about3" aria-controls="about3" aria-expanded="false">About</a>
                          </li>
                        </ul>
                        <div class="tab-content px-1 pt-1">
                          <div role="tabpanel" class="tab-pane" id="home3" aria-labelledby="home-tab3" aria-expanded="true">
                            <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing croissant bonbon biscuit gummi bears.</p>
                          </div>
                          <div class="tab-pane active show" id="profile3" role="tabpanel" aria-labelledby="profile-tab3" aria-expanded="false">
                            <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll liquorice icing cupcake.</p>
                          </div>
                          <div class="tab-pane" id="dropdown31" role="tabpanel" aria-labelledby="dropdown31-tab" aria-expanded="false">
                            <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll cake icing cookie halvah cupcake.</p>
                          </div>
                          <div class="tab-pane" id="dropdown32" role="tabpanel" aria-labelledby="dropdown32-tab" aria-expanded="false">
                            <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear claw.</p>
                          </div>
                          <div class="tab-pane" id="about3" role="tabpanel" aria-labelledby="about-tab3" aria-expanded="false">
                            <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder tootsie roll cake.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
                    </div>
                  </div>
                </div>
              </div>
              <!-- akhir modal detail customer -->
              <?php
                    foreach ($device->result_array() as $u): 
                        $id				=$u['id'];
                        $customer_id 	=$u['customer_id'];
                        $device_id 		=$u['device_id'];
                        $device_alias	=$u['device_alias'];
                        $pin            =$u['pin'];
                        $description	=$u['description'];
                        $keyword        =$u['keyword'];
                ?>
              <!-- ============ MODAL HAPUS CUSTOMER =============== -->
              <div class="modal fade" id="modal_hapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                      <h3 class="modal-title" id="myModalLabel">Hapus Customer</h3>
                  </div>
                  <?php echo form_open('customerdevice/hapus_data_device',array('class'=>'form-horizontal','method'=>'post')); ?>
                      <div class="modal-body">
                          <p>Anda yakin mau menghapus <b><?php echo $device_alias;?></b></p>
                      </div>
                      <div class="modal-footer">
                          <input type="hidden" name="id" value="<?php echo $id;?>">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                          <button id="deleteCustomer" class="btn btn-danger">Hapus</button>
                      </div>
                  <?php echo form_close() ?>
                  </div>
                  </div>
              </div>
              <?php endforeach;?>
              <!--END MODAL HAPUS CUSTOMER-->
             