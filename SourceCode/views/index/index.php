<div class="form-actions">
    <center>
        <div id="logo">
            <a href="<?php echo base_url()."/index/"; ?>">You Type We Search</a>
        </div>
        <form method="get" action="<?php echo base_url()."/index/result"; ?>">
            <div class="form-group" style="display: block;">
                <input type="text" name="query" id="text-query" class="form-control" placeholder="<?php echo (isset($placeholder_search_text) ? $placeholder_search_text : ""); ?>" style="margin-bottom: 0px;" />
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
</div>