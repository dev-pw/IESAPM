<?php

$img = wp_get_attachment_image_src(get_post_thumbnail_id(3080), 'full')[0];

$link_image = get_field('link_image', 3080);

if ($link_image == "true"):
    $link = get_field('link', 3080);
else:
    $link = '';
endif;

?>

<script>

    window.onload = function(){

        let body = document.body;
        let popup = document.querySelector('#popup');
        let close = document.querySelector('#icon-close');
        let bg = document.querySelector('#bg-popup');
        body.style.overflowY = 'hidden';

        close.addEventListener('click', closePopup);
        bg.addEventListener('click', closePopup);

        function closePopup(){
            
            body.style.overflowY = 'scroll';
            popup.style.opacity = '0';
            setTimeout(() => {
                popup.remove();
            }, 500);

        }
    }

</script>

<style>
    #popup{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 1000;
        transition: all .3s ease;
    }

    #bg-popup{
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        background-color: #000000d6;
    }

    #popup span {
        position: absolute;
        top: 25px;
        right: 25px;
        cursor: pointer;
    }

    #popup span #icon-close{
        width: 35px;
        height: 35px;
        display: block;
        position: relative;
    }

    #popup span #icon-close::before{
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        border-radius: 5px;
        background: #fff;
        transform: rotateZ(45deg);
        top: 15px;
    }

    #popup span #icon-close::after{
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        border-radius: 5px;
        background: #fff;
        transform: rotateZ(135deg);
        top: 15px;
        left: 0px;
    }

    #popup img{
        width: 500px;
    }
    
    @media(max-width: 576px){
        #popup img{
            width: 300px;
        }
    }

</style>

<div id="popup">
    <div id="bg-popup"> </div>
    <span> <i id="icon-close"></i> </span>

    <?php if ($link_image == "true"): ?>
    <a href="<?= $link; ?>" target="_blank">
    <?php endif; ?>

    <img src="<?= $img; ?>" alt="">

    <?php if ($link_image == "true"): ?>
    </a>
    <?php endif; ?>
</div>