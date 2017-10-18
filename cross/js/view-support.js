document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("a[href]").forEach(a => {
        let isSameLocation = a.href === window.location.href;
        if (isSameLocation) {
            a.classList.add("active");
        }
    });
});
