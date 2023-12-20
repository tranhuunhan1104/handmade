
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Yummy Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <?php
// Lấy danh sách các category
$taxonomy = 'product_cat'; // Thay 'product_cat' bằng tên taxonomy của sản phẩm của bạn

// Lấy danh sách tất cả các categories của sản phẩm có ít nhất một sản phẩm
$args = array(
    'taxonomy' => $taxonomy,
    'hide_empty' => false, // Chỉ hiển thị các term có ít nhất một sản phẩm
);

$terms = get_terms($args);

// Kiểm tra xem có category nào hay không
if ($terms) {
    // Lặp qua từng category và hiển thị thông tin
    foreach ($terms as $category) {
        ?>
                                        <li class="nav-item">
                                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#<?php echo $category->name ?>">
                                          <h4><?php echo $category->name ?></h4>
                                        </a>
                                        </li><!-- End tab nav item -->
                                        <?php

    }
}
?>



        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
<?php
if ($terms) {
    // Lặp qua từng category và hiển thị thông tin
    foreach ($terms as $category) {
        ?>
      <div class="tab-pane fade active show" id="<?php echo $category->name ?>">

      <div class="tab-header text-center">
        <p>Menu</p>
        <h3><?php echo $category->name ?></h3>
      </div>

      <div class="row gy-5">

        <div class="col-lg-4 menu-item">
          <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
          <h4>Magnam Tiste</h4>
          <p class="ingredients">
            Lorem, deren, trataro, filede, nerada
          </p>
          <p class="price">
            $5.95
          </p>
        </div><!-- Menu Item -->

      </div>
    </div><!-- End Starter Menu Content -->
    <?php
}
}

?>


        </div>

      </div>
    </section><!-- End Menu Section -->
