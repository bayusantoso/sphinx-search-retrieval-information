<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-table"></i></h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="clearfix"></div>
                <a class='btn show-tooltip' style='margin-bottom:10px !important;' title='Create' href='<?php echo base_url()."/functioninfo/create/"; ?>' ><i class='icon-plus'> Create</i></a>
                <?php if (!is_null($Model) && count($Model) > 0) {?>
                <table class="table table-advance" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Sequence</th>
                            <th>URL</th>
                            <th>Module</th>
                            <th>Is Show</th>
                            <th>Is Disabled</th>
                            <th>Module Icon</th>
                            <th style="width:100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($Model as $item) {
                        ?>
                        <tr>
                            <td><?php echo $item->getId(); ?></td>
                            <td><?php echo $item->getName(); ?></td>
                            <td><?php echo $item->getSequence(); ?></td>
                            <td><?php echo $item->getUrl(); ?></td>
                            <td><?php echo $item->getModule(); ?></td>
                            <td><?php echo $item->IsShow(); ?></td>
                            <td><?php echo $item->IsEnabled(); ?></td>
                            <td><?php echo $item->getIconModule(); ?></td>
                            <td class='action-bar' align='center'>
                                <a class='btn btn-small show-tooltip' title='Edit' href='<?php echo base_url()."/functioninfo/edit?id=".$item->getId(); ?>'><i class='icon-edit'></i></a>
                                <a class='btn btn-small btn-danger show-tooltip' title='Delete' href='<?php echo base_url()."/functioninfo/delete?id=".$item->getId(); ?>'><i class='icon-trash'></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <h3>Tidak ada data di dalam database</h3>
                <?php } ?>
                <a class='btn show-tooltip' style='margin-top:10px !important;' title='Create' href='<?php echo base_url()."/functioninfo/create/"; ?>'><i class='icon-plus'> Create</i></a>
            </div>
        </div>
    </div>
</div>