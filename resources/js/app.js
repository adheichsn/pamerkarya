require("./bootstrap");

// Function to copy the text to clipboard
function copyToClipboard(text) {
    const textarea = document.createElement("textarea");
    textarea.value = text;
    textarea.style.position = "fixed"; // To prevent scrolling to bottom when adding textarea to body
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);
}

// Add event listener to the "Copy Link" button
const copyLinkBtn = document.getElementById("copyLinkBtn");
copyLinkBtn.addEventListener("click", function () {
    const textToCopy = this.getAttribute("data-clipboard-text");
    copyToClipboard(textToCopy);
    alert("Link copied to clipboard!");
});
