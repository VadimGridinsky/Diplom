document.getElementById('dwnld-trck').onchange = function () {
    document.getElementById('track-text').value = document.getElementById('dwnld-trck').value.replace(/.*[\\\/]/, "");
};
