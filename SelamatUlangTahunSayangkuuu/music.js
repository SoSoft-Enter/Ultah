// Mengecek jika musik sudah diputar
if (localStorage.getItem("musicPlaying") === "true") {
    var audio = document.getElementById("background-music");
    // Jika audio belum dimulai, mulai pemutaran
    if (audio.paused) {
        audio.play();
    }
} else {
    // Jika audio belum diputar, mulai audio dan set status ke 'true'
    var audio = document.getElementById("background-music");
    audio.play();
    localStorage.setItem("musicPlaying", "true");
}

// Pastikan audio terus berlanjut meskipun berpindah halaman
window.onbeforeunload = function() {
    localStorage.setItem("musicPlaying", "true");
};
