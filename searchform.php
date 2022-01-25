<div class="container justify-content-center mt-4">
    <div class="row">
        <div class="col-md-8">
        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_html(home_url( '/' )); ?>">
            <div class="input-group mb-3">
                <label class="screen-reader-text" for="s">Search for:</label>
                <input class="form-control input-text" placeholder="Search...." value="" name="s" id="s" type="text">
                <input class="btn btn-outline-primary btn-lg" id="searchsubmit" value="Search" type="submit">
            </div>
        </form>
        </div>

    </div>
</div>