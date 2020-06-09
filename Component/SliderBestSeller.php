<?php 
    
    include_once './Controller/itemImpl.php';

    $LIST = getItemTopSellerPHP();
    $list = json_decode($LIST,true);
 ?>
<div class="col col-md-9" id="product">
    <div class="row">
        <div class="col col-md-5"> 
            <div class="col col-md-12">
                <h4 style="margin-top: 20px">Giới thiệu về Shop</h4>
            </div>
            <div>
                <p style="text-align: left; margin-left: 10px">Với mục tiêu tạo ra những trải nghiệm mua sắm trực tuyến tuyệt vời, 
                MPSHOP luôn nỗ lực không ngừng nhằm nâng cao chất lượng dịch vụ. 
                Khi mua hàng qua mạng tại Tiki.vn khách hàng sẽ được hưởng các tiện ích như sau</p>
            </div>
            <div style="text-align: left; margin-left: 20px">
                <ul>
                    <li>
                    Dịch vụ chăm sóc khách hàng tận tình trước-trong-sau khi mua hàng, xuyên suốt 7 ngày/tuần, từ 8:00 đến 21:00
                    </li>
                    <li>
                    Mức giá cạnh tranh: hơn 90% sản phẩm được giảm giá từ 10% trở lên
                    </li>
                    <li>
                    Giao hàng miễn phí (đối với đơn hàng từ 150.000đ trong phạm vi TP.HCM và từ 250.000đ đối với đơn hàng giao đến các tỉnh thành khác thuộc Việt Nam)
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-md-7">
            <div class="row">
                <marquee behavior="" direction=""><div style="font-size: 30px;font-family: sans-serif;">Sản phẩm bán chạy</div></marquee>
                <div class="col col-md-12" 
                        style="margin-top: 30px; margin-bottom: 30px;margin-left: 10px;margin-right: 10px;">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide"
                            data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php 
                                    $count = 0;
                                    foreach ($list as $val) {
                                        if($count==0) echo '<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>';
                                        else echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$count.'"></li>';
                                        $count++;
                                    }
                                 ?>
                                <!-- <li data-target="#carouselExampleCaptions" data-slide-to="0"
                                    class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> -->
                            </ol>
                            <div class="carousel-inner">
                                <!-- Mỗi sản phẩm của slide-->
                                <?php 
                                    $count=0;
                                    foreach ($list as $val) {
                                        if($count==0) echo '<div class="carousel-item active">
                                                                <img class="item" itemID='.$val['id'].' src="'.$val['url'].'"
                                                                        style="height: 400px; width: 100%" class="d-block w-100"
                                                                        alt="...">
                                                                <div class="carousel-caption d-none d-md-block">
                                                                    <h5>'.$val['name'].'</h5>
                                                                   
                                                                </div>
                                                            </div>';
                                        else echo '<div class="carousel-item">
                                                    <img class="item" itemID='.$val['id'].' src="'.$val['url'].'"
                                                            style="height: 400px; width:100%" class="d-block w-100"
                                                            alt="...">
                                                    <div class="carousel-caption d-none d-md-block">
                                                       <h5>'.$val['name'].'</h5>  
                                                    </div>
                                                </div>';
                                        $count++;
                                    }
                                 ?>
                                
                                <!-- Finish-->
                                
                                
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions"
                                role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
               

 