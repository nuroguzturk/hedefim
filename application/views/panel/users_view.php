<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"> </div>
            <div class="toggler-close"> </div>
            <div class="theme-options">
                <div class="theme-option theme-colors clearfix">
                    <span> THEME COLOR </span>
                    <ul>
                        <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                        <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                        <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                        <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                        <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                        <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                    </ul>
                </div>
                <div class="theme-option">
                    <span> Theme Style </span>
                    <select class="layout-style-option form-control input-sm">
                        <option value="square" selected="selected">Square corners</option>
                        <option value="rounded">Rounded corners</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Layout </span>
                    <select class="layout-option form-control input-sm">
                        <option value="fluid" selected="selected">Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Header </span>
                    <select class="page-header-option form-control input-sm">
                        <option value="fixed" selected="selected">Fixed</option>
                        <option value="default">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Top Menu Dropdown</span>
                    <select class="page-header-top-dropdown-style-option form-control input-sm">
                        <option value="light" selected="selected">Light</option>
                        <option value="dark">Dark</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Mode</span>
                    <select class="sidebar-option form-control input-sm">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Menu </span>
                    <select class="sidebar-menu-option form-control input-sm">
                        <option value="accordion" selected="selected">Accordion</option>
                        <option value="hover">Hover</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Style </span>
                    <select class="sidebar-style-option form-control input-sm">
                        <option value="default" selected="selected">Default</option>
                        <option value="light">Light</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Position </span>
                    <select class="sidebar-pos-option form-control input-sm">
                        <option value="left" selected="selected">Left</option>
                        <option value="right">Right</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Footer </span>
                    <select class="page-footer-option form-control input-sm">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- END THEME PANEL -->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Tables</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Datatables</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="#">
                                <i class="icon-bell"></i> Action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-shield"></i> Another action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> Something else here</a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="#">
                                <i class="icon-bag"></i> Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE BAR -->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box red">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-users"></i> Üyeler </div>

                        <div class="actions">
                            <button style="font-size:14px;" class="btn btn-success" data-toggle="modal" href="#insert"><i class="glyphicon glyphicon-plus-sign"></i> Yeni Ekle</button>


                            <div class="btn-group">
                                <a class="btn btn-default btn-sm btn-circle" href="javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-share"></i>
                                    <span class="hidden-xs"> Aktar </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                    <li>
                                        <a href="javascript:;" data-action="0" class="tool-action">
                                            <i class="icon-printer"></i> Yazdır</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-action="1" class="tool-action">
                                            <i class="icon-check"></i> Kopyala </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-action="2" class="tool-action">
                                            <i class="icon-doc"></i> PDF</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-action="3" class="tool-action">
                                            <i class="icon-paper-clip"></i> Excel</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-action="4" class="tool-action">
                                            <i class="icon-cloud-upload"></i> CSV</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;" data-action="5" class="tool-action">
                                            <i class="icon-pencil"></i> Kolonlar</a>
                                    </li>

                                </ul>
                            </div>

                        </div></div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_3">
                            <thead id="sample_4">
                            <tr>
                                <th>Durum</th>

                                <th style="width:50px;text-align: center;" class="hidden-phone">Resim</th>
                                <th class="hidden-phone">İsim</th>
                                <th class="hidden-phone">Soyisim</th>
                                <th class="hidden-phone">Email</th>
                                <th class="hidden-phone">Telefon</th>
                                <th class="hidden-phone">Cinsiyet</th>
                                <th class="hidden-phone">İl</th>

                                <th style="width:20px;" class="hidden-phone">Yetki</th>

                                <th style="width:120px;text-align: center;" class="hidden-phone">İşlem</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>

                                <th>Durum</th>

                                <th style="width:50px;text-align: center;"class="hidden-phone">Resim</th>
                                <th class="hidden-phone">İsim</th>
                                <th class="hidden-phone">Soyisim</th>
                                <th class="hidden-phone">Email</th>
                                <th class="hidden-phone">Telefon</th>
                                <th class="hidden-phone">Cinsiyet</th>
                                <th class="hidden-phone">İl</th>

                                <th class="hidden-phone">Yetki</th>

                                <th style="width:120px;text-align: center;" class="hidden-phone">İşlem</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            <?php foreach($rows as $row){?>
                                <tr>

                                    <td style="width:10px;text-align: center;">
                                        <div>
                                            <input  type="checkbox" checked class="make-switch switch-small" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" data-on-color="success" data-off-color="default">
                                        </div>
                                    </td>


                                    <td style="width:100px;text-align: center;"><img class="usersimage" src="<?php echo base_url('upload/users'); ?>/<?php echo $row->UserImage;?>"></td>
                                    <td><?php echo $row->UserName;?></td>
                                    <td><?php echo $row->UserSurname;?></td>
                                    <td><?php echo $row->Email;?></td>
                                    <td><?php echo $row->Telephone;?></td>
                                    <td><?php echo $row->Gender;?></td>
                                    <td><?php echo $row->CityId;?></td>
                                    <td><?php echo $row->RecorderId;?></td>


                                    <td style="width:120px;text-align: center;">

                                        <a class="btn btn-info" data-toggle="modal" href="#view" 
										  onclick="edit_view(<?php echo $row->id;?>)" data-id="<?php echo $row->id;?>"><i class="glyphicon glyphicon-search"></i></a>
                                        <a class="btn btn-warning" data-toggle="modal" href="#update"
										  onclick="edit_update(<?php echo $row->id;?>)" data-id="<?php echo $row->id;?>"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a class="btn btn-danger" data-toggle="modal" href="#delete"
										onclick="edit_delete(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></a>


                                       </td>

                                </tr>

                            <?php }?>
                            </tbody>
                        </table>
						
	<script type="text/javascript" >

  $(document).ready( function () {
        $('#sample_3').DataTable();
    } );
   var save_method;
   var table;

//bu kısım çalıştı :))
   function edit_view(id)
   {
     save_method='update';
     $.ajax({
       url:"<?php echo base_url("index.php/Users/ajax_model_view"); ?>/"+id,
       type:"POST",
       dataType:"JSON",
       data:{"id":id},

       success:function(data)
       {
         alert(data.UserName);
         $('[id="user-id"]').val(data.id);
         $('[id="user-tc"]').val(data.UserTC);
         $('[id="user-name"]').val(data.UserName);
         $('[id="user-surname"]').val(data.UserSurname);
         $('[id="user-email"]').val(data.Email);
         $('[id="user-tel"]').val(data.Telephone);
         $('[id="user-gender"]').val(data.Gender);
         $('[id="user-city"]').val(data.CityName);
         $('[id="birthdate"]').val(data.DateofBirth);
         $('[id="record-date"]').val(data.DateofRecord);
         $('[id="user-task"]').val(data.TaskName);
         $('[id="recorder-id"]').val(data.RecorderId);
         $('[id="user-İd"]').val(data.id);
         $('[id="isaccept"]').val(data.IsAccept);
         $('#view').modal('show');
         //$('.modal-title').text('Edit book');
       },
       error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
     });
   }
     function edit_update(id)
   {
     save_method='update';
     $.ajax({
       url:"<?php echo base_url("index.php/Users/ajax_model_view"); ?>/"+id,
       type:"POST",
       dataType:"JSON",
       data:{"id":id},

       success:function(data)
       {
         alert(data.UserName);
         $('[id="user-id"]').val(data.id);
         $('[id="user-tc"]').val(data.UserTC);
         $('[id="user-name"]').val(data.UserName);
         $('[id="user-surname"]').val(data.UserSurname);
         $('[id="user-email"]').val(data.Email);
         $('[id="user-tel"]').val(data.Telephone);
         $('[id="user-gender"]').val(data.Gender);
         $('[id="user-city"]').val(data.CityName);
         $('[id="birthdate"]').val(data.DateofBirth);
         $('[id="record-date"]').val(data.DateofRecord);
         $('[id="user-task"]').val(data.TaskName);
         $('[id="recorder-id"]').val(data.RecorderId);
         $('[id="user-İd"]').val(data.id);
         $('[id="isaccept"]').val(data.IsAccept);
         $('#update').modal('show');
         //$('.modal-title').text('Edit book');
       },
       error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
     });
   }

  </script>
                <!-- view -->
                        <div class="modal fade draggable-modal" id="view" tabindex="-1" role="draggble" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title"id="baslik_adsoyad"></h4>
                                    </div>
                                    <div class="modal-body form">
                                        <form action="#" id="form" class="form-horizontal">
                                            <input type="hidden" value="" name="UserId" id="user-id"/>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">TC No</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-tc" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">İsim</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Soyisim</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-surname" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-email" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Telefon</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-tel" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Cinsiyet</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-gender" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">İl</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-city" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Doğum Tarihi</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="birthdate" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Görev</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-task" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kayıt Kimliği</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="recorder-id" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kayıt Tarihi</label>
                                                    <div class="col-md-9">
                                                        <input disabled value=""id="record-date" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">İşlem</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="isaccept" class="form-control">

                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn red" data-dismiss="modal">Kapat</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                <!-- update -->
                        <div class="modal fade draggable-modal" id="update" tabindex="-1" role="draggble" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title"id="baslik_adsoyad"></h4>
                                    </div>
                                    <div class="modal-body form">
                                        <form action="#" id="form" class="form-horizontal">
                                            <input type="hidden" value="" name="UserId" id="user-id"/>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">TC No</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-tc" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">İsim</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Soyisim</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-surname" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-email" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Telefon</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-tel" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Cinsiyet</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-gender" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">İl</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-city" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Doğum Tarihi</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="birthdate" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Görev</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="user-task" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kayıt Kimliği</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="recorder-id" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kayıt Tarihi</label>
                                                    <div class="col-md-9">
                                                        <input disabled value=""id="record-date" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">İşlem</label>
                                                    <div class="col-md-9">
                                                        <input disabled value="" id="isaccept" class="form-control">

                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Kaydet</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                <!-- delete -->
                        <div class="modal fade draggable-modal" id="delete" tabindex="-1" role="draggble" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title">Bu kaydı silmek istediğinizden emin misiniz?</h4>
                                    </div>

                                    <div style="margin:30px;text-align:center;font-size:18px;"><?php echo $row->id; ?> numaralı <?php echo $row->UserName;?> <?php echo $row->UserSurname;?> öğesi silinecek</div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Hayır</button>
                                        <a class="btn btn-success" href="<?php echo base_url("users/delete/$row->id"); ?>"><i class="glyphicon glyphicon-ok"></i> Evet</a>

                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div></div>
                <!-- insert -->
                <div class="modal fade draggable-modal" id="insert" tabindex="-1" role="draggble" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Yeni Kayıt Ekle</h4>
                            </div>
                            <div class="modal-body form">
                                <form action="<?php base_url("users/insert"); ?>" class="form-horizontal" method="post">
                                    <input type="hidden" name="UserId"/>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">TC No</label>
                                            <div class="col-md-9">
                                                <input name="UserTC" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">İsim</label>
                                            <div class="col-md-9">
                                                <input name="UserName" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Soyisim</label>
                                            <div class="col-md-9">
                                                <input name="UserSurname" class="form-control" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input name="Email" class="form-control" type="text">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Şifre</label>
                                            <div class="col-md-9">
                                                <input name="Password" class="form-control" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Telefon</label>
                                            <div class="col-md-9">
                                                <input name="Telephone" value="" class="form-control" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Cinsiyet</label>
                                            <div class="col-md-9">
                                                <input name="Gender" class="form-control" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">İl</label>
                                            <div class="col-md-9">
                                                <input name="CityId" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Doğum Tarihi</label>
                                            <div class="col-md-9">
                                                <input name="DateofBirth" class="form-control" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Görev</label>
                                            <div class="col-md-9">
                                                <input name="TaskId" class="form-control" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kayıt Kimliği</label>
                                            <div class="col-md-9">
                                                <input name="RecorderId" class="form-control" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kayıt Tarihi</label>
                                            <div class="col-md-9">
                                                <input name="DateofRecord" class="form-control" type="text">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">İşlem</label>
                                            <div class="col-md-9">
                                                <input name="IsAccept" value="E" class="form-control" type="text">

                                            </div>
                                        </div>

                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
                                <input type="submit" value="Kaydet" class="btn btn-success">
                            </div></form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                        </div>
                        </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>


    <!-- END CONTENT BODY -->
<!-- END CONTENT -->










