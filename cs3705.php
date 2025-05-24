<?php
include "header.php";
include "./database/north_class.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/gallery.css">
    <title>Document</title>
</head>
<body>
<?php
$gallery = new gallery;
$show_gallery = $gallery->show_gallery();
$lightboxIds = [];
?>
<h1>Gallery</h1>
<?php
if ($show_gallery) {
    while ($result = $show_gallery->fetch_assoc()) {
        // Lưu lại id của các lightbox để chuyển giữa chúng
        $lightboxIds[] = $result['id'];
?>
<div class="gallery">
    <div class="thumbnail">
        <img src='<?php echo $result['img']?>' alt="" onclick="openLightbox('<?php echo $result['id']?>', 1)">
    </div>

    <!-- Lightbox -->
    <div id='<?php echo "lightbox-" . $result['id']?>' class="lightbox" style="display:none;">
        <div class="lightbox-content">
            <span class="close" onclick="closeLightbox('<?php echo $result['id']?>')">&times;</span>
            
            <!-- Thêm các slide -->
            <div class="mySlides-<?php echo $result['id']?> mySlides">
                <div class="img2">
                    <img src='<?php echo $result['img']?>' alt="">
                </div>
            </div>
            <div class="mySlides-<?php echo $result['id']?> mySlides" style="display:none;">
                <div class="img2">
                    <img src='image2.jpg' alt="">
                </div>
            </div>
            <div class="mySlides-<?php echo $result['id']?> mySlides" style="display:none;">
                <div class="img2">
                    <img src='image3.jpg' alt="">
                </div>
            </div>

            <a class="prev" onclick="changeSlide('<?php echo $result['id']?>', -1)">&#10094;</a>
            <a class="next" onclick="changeSlide('<?php echo $result['id']?>', 1)">&#10095;</a>
        </div>
    </div>
</div>

<?php
    }
}
?>

<script>
    const lightboxIds = <?php echo json_encode($lightboxIds); ?>; // Lấy danh sách id của các lightbox
    let currentLightboxIndex = 0;

    function openLightbox(id, slideIndex) {
        currentLightboxIndex = lightboxIds.indexOf(id);
        document.getElementById('lightbox-' + id).style.display = 'block';
        document.getElementById('lightbox-' + id).setAttribute('data-slide-index', slideIndex);
        showSlides(id, slideIndex);
    }

    function closeLightbox(id) {
        document.getElementById('lightbox-' + id).style.display = 'none';
    }

    function changeSlide(id, n) {
        let slideIndex = document.getElementById('lightbox-' + id).getAttribute('data-slide-index');
        slideIndex = parseInt(slideIndex) + n;

        let slides = document.getElementsByClassName('mySlides-' + id);
        if (slideIndex > slides.length) { 
            // Khi đến slide cuối, chuyển sang lightbox tiếp theo
            nextLightbox();
        } else if (slideIndex < 1) {
            // Khi ở slide đầu, chuyển sang lightbox trước đó
            prevLightbox();
        } else {
            showSlides(id, slideIndex);
        }
    }

    function showSlides(id, n) {
        let slides = document.getElementsByClassName('mySlides-' + id);
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        slides[n - 1].style.display = 'block';
        document.getElementById('lightbox-' + id).setAttribute('data-slide-index', n);
    }

    function nextLightbox() {
        // Chuyển đến lightbox tiếp theo
        closeLightbox(lightboxIds[currentLightboxIndex]);
        currentLightboxIndex = (currentLightboxIndex + 1) % lightboxIds.length;
        openLightbox(lightboxIds[currentLightboxIndex], 1);
    }

    function prevLightbox() {
        // Chuyển đến lightbox trước đó
        closeLightbox(lightboxIds[currentLightboxIndex]);
        currentLightboxIndex = (currentLightboxIndex - 1 + lightboxIds.length) % lightboxIds.length;
        openLightbox(lightboxIds[currentLightboxIndex], 1);
    }
</script>


    <?php
        include "footer.php";
    ?>
</body>

</html>