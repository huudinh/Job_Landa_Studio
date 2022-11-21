<style>
.breadcrumb_1_1_0 {
    width: 100%;
    height: auto;
    font-size: 14px;
    padding: 10px 20px;
    background-image: linear-gradient(to right, #0b61a3, #359bcf, #359bcf, #359bcf);
}

.breadcrumb_1_1_0 p {
    margin: 0;
}

.breadcrumb_1_1_0 span {
    color: #fff;
}

.breadcrumb_1_1_0 a {
    color: #fff;
    text-decoration: none;
}
</style>

<div class="breadcrumb_1_1_0">
    <?php //if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="">','</p>');} ?>
    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
</div>