
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
    ?>
  <li class="nav-item">
    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#<?php echo $terms[0]->name; ?>">
      <h4><?php echo $terms[0]->name; ?></h4>
    </a>
  </li><!-- End tab nav item -->

<?php
// Lặp qua từng category và hiển thị thông tin
    $skipFirst = true;
    foreach ($terms as $category) {
        if ($skipFirst) {
            $skipFirst = false;
            continue; // Bỏ qua phần tử đầu tiên
        }
        ?>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#<?php echo $category->name; ?>">
                      <h4><?php echo $category->name; ?></h4>
                    </a>
                  </li><!-- End tab nav item -->

        <?php

    }

}
?>
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
           <div class="tab-pane fade active show" id="<?php echo $terms[0]->name; ?>">

                <div class="tab-header text-center">
                  <p>Menu</p>
                  <h3><?php echo $terms[0]->name; ?></h3>
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

                  <div class="col-lg-4 menu-item">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-2.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                    <h4>Aut Luia</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $14.95
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-3.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                    <h4>Est Eligendi</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $8.95
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-4.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $12.95
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-5.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $12.95
                    </p>
                  </div><!-- Menu Item -->

                  <div class="col-lg-4 menu-item">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-6.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                    <h4>Laboriosam Direva</h4>
                    <p class="ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                      $9.95
                    </p>
                  </div><!-- Menu Item -->

                </div>
          </div><!-- End Starter Menu Content -->
        <?php
// Lặp qua từng category và hiển thị thông tin
$skipFirst = true;
foreach ($terms as $category) {
    if ($skipFirst) {
        $skipFirst = false;
        continue; // Bỏ qua phần tử đầu tiên
    }
    ?>
          <div class="tab-pane fade" id="<?php echo $category->name; ?>">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?php echo $category->name; ?></h3>
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

              <div class="col-lg-4 menu-item">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-2.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-3.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-4.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-5.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-6.png" class="glightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->
          <?php
}

?>

        </div>

      </div>
    </section><!-- End Menu Section -->
