<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    /* Carousel video height */
    .carousel-inner iframe {
        border-radius: 10px;
        height: 500px;
        width: 100%;
    }

    /* Carousel controls styled as circles outside the video */
    .carousel-control-prev,
    .carousel-control-next {
        width: 45px;
        height: 45px;
        border: 2px solid #396DA5;
        border-radius: 50%;
        background-color: transparent;
        color: #396DA5;
        font-size: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 250px;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #396DA5; 
        border-radius: 50%;
    }
    .carousel-control-prev {
        left: -60px; 
    }
    .carousel-control-next {
        right: -60px; 
    }
    
    /* Thumbnails styling */
    .related-videos {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 20px;
    }
    .thumbnail {
        width: 200px;
        height: auto;
        cursor: pointer;
        border: 2px solid #ddd;
        border-radius: 5px;
        transition: transform 0.3s ease;
    }
    .thumbnail:hover {
        transform: scale(1.05);
        border-color: #007bff;
    }
    
    /* Play button styling */
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 40px;
        color: white;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 10px 15px;
        cursor: pointer;
    }
    @media (max-width: 768px) {
.related-videos{
    display: none;
}
 .carousel-control-prev {
        left: -20px; 
    }
    .carousel-control-next {
        right: -20px; 
    }


    }

</style>

<div id="videoCarousel" class="carousel slide">
    <!-- Video Slides using YouTube iFrames -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="position-relative">
                <iframe class="d-block w-100" id="video1" src="https://www.youtube.com/embed/AKa2ABRRgPs?enablejsapi=1" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="play-button" onclick="playVideo('video1')">&#9658;</div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="position-relative">
                <iframe class="d-block w-100" id="video2" src="https://www.youtube.com/embed/AKa2ABRRgPs?enablejsapi=1" allow="encrypted-media" allowfullscreen></iframe>
                <div class="play-button" onclick="playVideo('video2')">&#9658;</div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="position-relative">
                <iframe class="d-block w-100" id="video3" src="https://www.youtube.com/embed/AKa2ABRRgPs?enablejsapi=1" allow="encrypted-media" allowfullscreen></iframe>
                <div class="play-button" onclick="playVideo('video3')">&#9658;</div>
            </div>
        </div>
    </div>

    <!-- Custom Left and Right Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Inline Thumbnails for Related Videos -->
<div class="related-videos">
    <img src="assets/img/video-img.png" alt="Video 1" class="thumbnail" onclick="changeSlide(0)">
    <img src="assets/img/video-img.png" alt="Video 2" class="thumbnail" onclick="changeSlide(1)">
    <img src="assets/img/video-img.png" alt="Video 3" class="thumbnail" onclick="changeSlide(2)">
</div>

<script>
    function playVideo(videoId) {
        // Pause all videos
        document.querySelectorAll('iframe').forEach(iframe => {
            iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        });

        // Play the selected video
        const iframe = document.getElementById(videoId);
        iframe.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    }

    function changeSlide(index) {
        const carousel = new bootstrap.Carousel(document.querySelector('#videoCarousel'));
        carousel.to(index); // Switch to the specified slide
    }
</script>
