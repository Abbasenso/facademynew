<div class="container mt-5">
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php

                    // include 'assets/include/connection.php';
                    
                    $sql = "SELECT * FROM `course_overview`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // $i = 0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                    ?>
            <div class="swiper-slide">
                <div class="course-card">
                    <div class="course-brand">
                        <div class="ll">
                            <i class="fa fa-slideshare" aria-hidden="true"></i>
                        </div>
                        <div class="course-title kk">
                            <h2><?php echo $row['course_name'];?></h2>
                            <div class="star-icon">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>(5.0)</span>
                            </div>
                            <div class="course-author">by Feoonaa Facademy</div>
                        </div>
                    </div>

                    <a href="course_overview.php?sub_name=<?php echo $row['sub_name'];?> && overview_name=<?php echo $row['overview_name'];?>" title="Click it" target="_blank" class="btn-1 dd">
                        want to know more!</a>
                </div>
            </div>
            <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</div>


  