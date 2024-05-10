const newsTitle = document.querySelectorAll(".news-title");
const newsText = document.querySelectorAll(".news-text");
newsTitle.forEach((title, i) => {
    if (title.innerText.length > 36) {
        title.innerText = title.innerText.slice(0, 36);
        title.innerText += "...";
    }
});
newsText.forEach((text, i) => {
    if (text.innerText.length > 50) {
        text.innerText = text.innerText.slice(0, 60);
        text.innerText += "...";
    }
});
