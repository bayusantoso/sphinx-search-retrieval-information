<div class="form-actions">
    <center>
        <div id="logo">
            <a href="<?php echo base_url()."/index/"; ?>">You Type We Search</a>
        </div>
        <form method="post" action="<?php echo base_url()."/index/result"; ?>">
            <div class="form-group" style="display: block;">
                <input type="text" name="query" class="form-control" value="<?php echo (isset($query) ? $query : ""); ?>" style="margin-bottom: 0px;" />
                <input type="submit" class="btn btn-primary" value="Search" />
            </div>
        </form>
    </center>
    <hr />
    Found xxx results for word <span class="keyword"><?php echo (isset($query) ? $query : ""); ?></span>.
    <?php echo (isset($_PAGING_) ? $_PAGING_ : ""); ?>
    <hr />
    <div id="title"><a href="<?php echo base_url()."/index/detail?query=".(isset($query) ? $query : ""); ?>">Title</a></div>
    <div id="sub-title">Author - <?php echo date('d-m-Y'); ?></div>
    <div id="text">
        .... Lorem ipsum dolor sit <span class="keyword">amet</span>, consectetur adipiscing elit. Mauris bibendum turpis tortor. Praesent imperdiet lobortis ante, eget sollicitudin mi sollicitudin id. Donec ut lectus turpis. Sed viverra ultrices placerat. Donec viverra vestibulum augue eget maximus. Maecenas eu sem aliquet, lacinia ex sit <span class="keyword">amet</span> .... 
    </div>
    <?php echo (isset($_PAGING_) ? $_PAGING_ : ""); ?>
    <hr />
    
</div>