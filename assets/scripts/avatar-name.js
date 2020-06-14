document.getElementById('avatar').onchange = function () {
    document.getElementById('avatar-text').value = document.getElementById('avatar').value.replace(/.*[\\\/]/, "");
};
