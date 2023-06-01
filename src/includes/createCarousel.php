<?php
    function createCarouselWithDesc($id, $imgPaths, $interval, $description) {
        $carouselItems = (array) null;
        $num = 1;

        foreach($imgPaths as $imgPath) {

            if($num == 1) {
                array_push($carouselItems, '<div class="carousel-item active p-3" data-bs-interval="'. $interval .'">
                    <img src="'. $imgPath .'" class="mx-auto d-block img-fluid" alt="'. $id .' billed '. $num .'">
                </div>');
            }
            else {
                array_push($carouselItems, '<div class="carousel-item p-3" data-bs-interval="'. $interval .'">
                    <img src="'. $imgPath .'" class="mx-auto d-block" alt="'. $id .' billed '. $num .'">
                </div>');
            }
            
            $num++;
        }

        $carousel = '<div class="card mx-auto">
            <div id="'. $id .'" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">';
        
        foreach($carouselItems as $item) {
            $carousel .= $item;
        }

        $carousel .= '</div>

                <button class="carousel-control-prev" type="button" data-bs-target="#'. $id .'" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Forrige</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#'. $id .'" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Naeste</span>
                </button>
            </div>
            <div class="card-body border-top border-1">
                <p class="card-text text-center text-dark fs-2">
                    '. $description . '
                </p>
            </div>
        </div>';

        return $carousel;
    }

    function createCarousel($id, $imgPaths, $interval) {
        $carouselItems = (array) null;
        $num = 1;

        foreach($imgPaths as $imgPath) {

            if($num == 1) {
                array_push($carouselItems, '<div class="carousel-item active p-3" data-bs-interval="'. $interval .'">
                    <img src="'. $imgPath .'" class="mx-auto d-block img-fluid" alt="'. $id .' billed '. $num .'">
                </div>');
            }
            else {
                array_push($carouselItems, '<div class="carousel-item p-3" data-bs-interval="'. $interval .'">
                    <img src="'. $imgPath .'" class="mx-auto d-block" alt="'. $id .' billed '. $num .'">
                </div>');
            }
            
            $num++;
        }

        $carousel = '<div class="card mx-auto">
            <div id="'. $id .'" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">';
        
        foreach($carouselItems as $item) {
            $carousel .= $item;
        }

        $carousel .= '</div>

                <button class="carousel-control-prev" type="button" data-bs-target="#'. $id .'" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Forrige</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#'. $id .'" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Naeste</span>
                </button>
            </div>
        </div>';

        return $carousel;
    }