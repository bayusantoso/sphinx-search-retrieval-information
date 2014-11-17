<div class="form-actions">
    <center>
        <div id="logo">
            <a href="<?php echo base_url()."/index/"; ?>">You Type We Search</a>
        </div>
        <form method="get" action="<?php echo base_url()."/index/result"; ?>">
            <div class="form-group" style="display: block;">
                <input type="text" name="query" id="text-query" class="form-control" placeholder="<?php echo (isset($placeholder_search_text) ? $placeholder_search_text : ""); ?>" value="<?php echo (isset($query) ? $query : ""); ?>" style="margin-bottom: 0px;" />
                <input type="submit" id="button-search" class="btn btn-primary" value="Search" />
            </div>
        </form>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#button-search").click(function() {
               var query = $("#text-query").val();
               if (query != undefined && query != null && query != "") {
                   return true;
               }
               return false; 
            });
        });
        </script>
    </center>
    <hr />
    <a href="<?php echo base_url()."/index/result?query=".(isset($query) ? $query : ""); ?>">Back To Result</a>
    <hr />
    <?php if (!is_null($Model)) { ?>
    <?php
        $title = $Model->getTitle();
        if (!is_null($Model->getSource()) && !empty($Model->getSource())) {
            $title = "<a href='".$Model->getSource()."' target='_blank'>".$Model->getTitle()."</a>";
        }
    ?>
    <div id="title"><?php echo $title; ?></div>
    <div id="sub-title">by <?php echo (!empty($Model->getAuthor()) ? $Model->getAuthor() : "No Author"); ?></div>
    <div id="text">
        <?php echo str_ireplace("\n", "<br />", $Model->getContent()); ?>
    </div>
    <?php } else {?>
    No Result
    <?php } ?>
    <hr />
    <a href="<?php echo base_url()."/index/result?query=".(isset($query) ? $query : ""); ?>">Back To Result</a>
    <hr />
</div>