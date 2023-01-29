const videos = document.querySelectorAll('.video')
videos.forEach((video) => {
    video.addEventListener('loadedmetadata', function () {
        this.currentTime = 1;
    })
})
