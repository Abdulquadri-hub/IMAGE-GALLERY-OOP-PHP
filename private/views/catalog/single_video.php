<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                        <video autoplay muted loop id="tm-video">
                            <source src="<?=BASE. $data->video?>" type="video/mp4">
                        </video>  
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?=$data->title?></h2>
                        <a href="<?=BASE?>video_detail/<?=$data->url_address?>">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span><?= get_date($data->date)?></span>
                    <span><?=$data->views?> views</span>
                </div>
</div>