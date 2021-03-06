<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.bundle.min.js"></script>
<section class="user_section dashboard_sec">
      	<div class="container">
<div class="box">
    <div class="box-header">
        <div class="left">
            <h3 class="box-title">Sections</h3>
            <br>
            <small class="pull-left">You can see sections here</small>
        </div>
        <div class="right">
            <a href="<?php echo base_url(); ?>home/add_section" class="btn btn-sm btn-success btn-add-new">
                <i class="fa fa-plus"></i>
                Add New sections
            </a>
        </div>
    </div><!-- /.box-header -->

    <!-- include message block -->
    <div class="col-sm-12">
        <?php $this->load->view('admin/includes/_messages'); ?>
    </div>

    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dataTable" id="cs_datatable" role="grid"
                           aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th width="20">Id</th>
                            <th>Title</th>
                            <th>Visibility</th>
                            <th class="max-width-120">Options</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($section as $item): ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td class="break-word"><?php echo html_escape($item['title']); ?></td>
                                <td>
                                        <label class="label label-success"><i class="fa fa-eye"></i></label>
                                </td>
                                <td>
                                    <!-- form delete widget -->
                                    <?php echo form_open('widget/delete_widget_post'); ?>

                                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">

                                    <div class="dropdown">
                                        <button class="btn bg-purple dropdown-toggle btn-select-option"
                                                type="button"
                                                data-toggle="dropdown">Select an option
                                            <span class="caret"></span>
                                        </button>

                                        <ul class="dropdown-menu options-list">
                                            <li>
                                                <a href="<?php echo base_url(); ?>home/update_view?id=<?php echo $item['id']; ?>">
                                                    <i class="fa fa-edit i-edit"></i>Edit</a></li>
                                        </ul>
                                    </div>

                                    <?php echo form_close(); ?><!-- form end -->

                                </td>
                            </tr>

                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
</div>
</div>
      	</div>

      </section>
</div>
<style>
    .form-inline {
    display: -ms-flexbox;
    display: contents !important;
    }
    </style>
  