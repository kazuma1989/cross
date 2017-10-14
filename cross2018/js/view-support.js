document.addEventListener("DOMContentLoaded", () => {
    let anchorElements = document.getElementsByTagName("a");
    Array.prototype.forEach.call(anchorElements, a => {
        let sameLocation = a.href === window.location.href;
        if (sameLocation) {
            a.classList.add("active");
        }
    });
});
