<div class="form-actions">
    <center>
        <div id="logo">
            <a href="<?php echo base_url()."/index/"; ?>">You Type We Search</a>
        </div>
        <form method="post" action="<?php echo base_url()."/index/result"; ?>">
            <div class="form-group" style="display: block;">
                <input type="text" name="query" class="form-control" style="margin-bottom: 0px;" />
                <input type="submit" class="btn btn-primary" value="Search" />
            </div>
        </form>
    </center>
    <hr />
    <a href="<?php echo base_url()."/index/result?query=".(isset($query) ? $query : ""); ?>">Back To Result</a>
    <hr />
    <div id="title">Title</div>
    <div id="sub-title">Author - <?php echo date('d-m-Y'); ?></div>
    <div id="text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut diam sem, eleifend ut aliquam a, dictum eget arcu. Maecenas non elit dictum, gravida nisl id, dictum leo. Cras vitae risus massa. Nam facilisis dapibus elit, quis consequat lacus pellentesque sollicitudin. Sed efficitur cursus libero ac tempus. Curabitur erat ante, ultrices vel lectus quis, rhoncus faucibus arcu. Duis at elit suscipit, pulvinar tortor id, sodales metus. Morbi malesuada, dolor in varius lacinia, lacus nisl venenatis urna, sed vehicula leo ipsum non eros. Nulla laoreet commodo leo, nec cursus leo tempus eu. Suspendisse potenti. Nullam sagittis sapien erat, a auctor nisl hendrerit non. Nam sagittis metus vel imperdiet porttitor. Pellentesque sodales sagittis facilisis. Morbi vitae neque malesuada, scelerisque purus eget, cursus sem.

Etiam rhoncus ultrices libero, ac rutrum eros rhoncus in. Fusce ut massa vel magna gravida scelerisque. Suspendisse maximus tincidunt dolor, a vestibulum erat malesuada in. Praesent elementum est mauris, nec feugiat nisl elementum in. Nunc sit amet arcu aliquet, pharetra augue ac, vestibulum turpis. Phasellus tincidunt vitae lorem non mattis. Sed convallis feugiat risus quis pretium. Integer mollis erat enim, nec tincidunt tortor imperdiet id.

In aliquam cursus elit. Nullam eget dui dictum, luctus lorem sed, dictum libero. Nulla dignissim tempus nunc, consequat finibus lacus feugiat vel. Donec et augue ex. Vivamus eget laoreet ante, et vulputate purus. Nulla sollicitudin lorem et viverra elementum. Integer laoreet risus a tempor molestie. Phasellus ornare rhoncus ex at scelerisque.

Etiam non pretium ligula. Vestibulum ullamcorper risus eu accumsan malesuada. Vestibulum at augue vitae augue blandit hendrerit. In imperdiet aliquam tellus, id malesuada tellus tempor nec. Phasellus condimentum at urna ac egestas. Fusce fringilla pulvinar rutrum. Pellentesque gravida mollis efficitur. Praesent euismod tristique dapibus. Integer turpis arcu, rutrum in faucibus sit amet, feugiat in nibh.
    </div>
    <hr />
    <a href="<?php echo base_url()."/index/result"; ?>">Back To Result</a>
    <hr />
</div>