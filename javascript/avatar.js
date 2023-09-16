function changeImage(div) {

    image = div.querySelector("img");

    var altSrc = image.getAttribute("data-alt");

    image.setAttribute("data-src", image.src);

    image.src = altSrc;
}

function restoreImage(div) {

    image = div.querySelector("img");

    var originalSrc = image.getAttribute("data-src");

    image.src = originalSrc;
}