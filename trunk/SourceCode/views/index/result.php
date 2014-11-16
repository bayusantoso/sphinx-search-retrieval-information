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
    <?php if(!is_null($Model)) { ?>
    Found <?php if(!is_null($Model)) { echo $Model->getResultCount(); } ?> results for keyword <span class="keyword"><?php echo (isset($query) ? $query : ""); ?></span>.
    <?php echo (isset($_PAGING_) ? $_PAGING_ : ""); ?>
    <hr />
    <?php if(!is_null($Model)) {
        if(!is_null($Model->getDocuments())) {
            foreach ($Model->getDocuments() as $item) {
                if(is_null($item)) { continue; }
    ?>
    <div class="result-content">
        <div id="title"><a href="<?php echo base_url()."/index/detail?id=".$item->getId()."&query=".(isset($query) ? $query : ""); ?>"><?php echo str_ireplace($query, "<span class='query-found'>".ucfirst($query)."</span>", $item->getTitle()) ?></a></div>
    <div id="sub-title"><?php echo (!empty($item->getAuthor()) ? str_replace($query, "<span class='query-found'>".$query."</span>", $item->getAuthor()) : "No Author"); ?></div>
    <div id="text">
        <?php echo str_ireplace($query, "<span class='query-found'>".$query."</span>", $item->getContent()) ?>
    </div>
    </div>
    <?php
            }
        }
    }
    } else {
    ?>
    No results for keyword <span class="keyword"><?php echo (isset($query) ? $query : ""); ?></span>.
    <?php
    }
    ?>
    <?php echo (isset($_PAGING_) ? $_PAGING_ : ""); ?>
    <hr />
</div>