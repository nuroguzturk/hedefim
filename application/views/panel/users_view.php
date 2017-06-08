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

                            <button class="btn purple"> Yeni Ekle
                                <i class="fa fa-plus"></i>
                            </button>

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

                                <th class="hidden-phone">Resim</th>
                                <th class="hidden-phone">İsim</th>
                                <th class="hidden-phone">Soyisim</th>
                                <th class="hidden-phone">Email</th>
                                <th class="hidden-phone">Telefon</th>
                                <th class="hidden-phone">Cinsiyet</th>
                                <th class="hidden-phone">İl</th>

                                <th class="hidden-phone">Kayıt Kimliği</th>

                                <th class="hidden-phone">İşlem</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>

                                <th>Durum</th>

                                <th class="hidden-phone">Resim</th>
                                <th class="hidden-phone">İsim</th>
                                <th class="hidden-phone">Soyisim</th>
                                <th class="hidden-phone">Email</th>
                                <th class="hidden-phone">Telefon</th>
                                <th class="hidden-phone">Cinsiyet</th>
                                <th class="hidden-phone">İl</th>

                                <th class="hidden-phone">Kayıt Kimliği</th>

                                <th class="hidden-phone">İşlem</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            <?php foreach($rows as $user){?>
                                <tr>

                                    <td>
                                        <div>
                                            <input type="checkbox" checked class="make-switch switch-small" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>" data-on-color="success" data-off-color="default">
                                        </div>
                                    </td>


                                    <td><img class="usersimage" src="<?php echo base_url('upload/users'); ?>/<?php echo $user->UserImage;?>"></td>
                                    <td><?php echo $user->UserName;?></td>
                                    <td><?php echo $user->UserSurname;?></td>
                                    <td><?php echo $user->Email;?></td>
                                    <td><?php echo $user->Telephone;?></td>
                                    <td><?php echo $user->Gender;?></td>
                                    <td><?php echo $user->CityId;?></td>

                                    <td><?php echo $user->RecorderId;?></td>


                                    <td>
                                        <a class="btn btn-info" data-toggle="modal" href="#responsive"><span class="glyphicon glyphicon-search"></span></a>
                                        <button class="btn btn-warning" onclick="edit_user(<?php echo $user->UserId;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                        <button class="btn btn-danger" onclick="delete_user(<?php echo $user->UserId;?>)"><i class="glyphicon glyphicon-remove"></i></button>
                                    </td>
                                    <!-- responsive -->
                                    <div id="responsive" class="modal fade" tabindex="-1" data-width="900">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><?php echo $user->UserName;?> <?php echo $user->UserSurname;?> - <?php echo $user->RecorderId;?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <p>
                                                    <label>TC</label><input class="form-control" type="text" value="<?php echo $user->UserTC;?> "></p>
                                                    <p>
                                                    <label>Doğum Tarihi</label><input class="form-control" type="text" value="<?php echo $user->DateofBirth;?> "></p>
                                                    <p>
                                                    <label>Yetki</label><input class="form-control" type="text" value="<?php echo $user->TaskId;?> "></p>
                                                    <p>
                                                    <label>Kayıt Tarihi</label><input class="form-control" type="text" value="<?php echo $user->DateofRecord;?> "></p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                </div>
                                                <div class="col-md-6">

                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                    <p>
                                                    <label>Some Input</label><input class="form-control" type="text"> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-danger">Kapat</button>

                                        </div>
                                    </div>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                        </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
<!-- END CONTENT -->




