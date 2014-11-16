<div class="form-actions">
    <center>
        <div id="logo">
            <a href="<?php echo base_url()."/index/"; ?>">You Type We Search</a>
        </div>
        <form method="post" action="<?php echo base_url()."/index/result"; ?>">
            <div class="form-group" style="display: block;">
                <input type="text" name="query" class="form-control" placeholder="Type" style="margin-bottom: 0px;" />
                <input type="submit" class="btn btn-primary" value="Search" />
            </div>
        </form>
    </center>
</div>