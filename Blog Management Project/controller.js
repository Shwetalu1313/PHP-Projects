// Insert Image
const insertImage = document.getElementById("insert-image");
const content = document.getElementById("content");

insertImage.addEventListener("click", function () {
  const imageUrl = prompt("Enter image location");
  const imageTitle = prompt("Enter image title");

  if (imageUrl) {
    const newImgElement = document.createElement("img");
    newImgElement.classList.add("image-content");
    newImgElement.title = imageTitle;
    newImgElement.src = imageUrl;
    newImgElement.style.contentEditable = true;
    newImgElement.contentEditable = "true";
    newImgElement.addEventListener("mousedown", preventTextSelection);

    content.append(newImgElement);
  }
});

function preventTextSelection(event) {
  event.preventDefault();
}

// Allows image to resize if clicked
document.addEventListener("click", function (event) {
  if (event.target.classList.contains("image-content")) {
    event.target.classList.toggle("resize");
  }
});

// Buttons and Actions
const addCodeBtn = document.getElementById("addCode");
const addBigTitleBtn = document.getElementById("addBigTitle");
const addNormalTitleBtn = document.getElementById("addNormalTitle");
const addParagraphBtn = document.getElementById("addParagraph");

function highlightCode() {
  Prism.highlightAll();
}

// call code tag

addCodeBtn.addEventListener("click", function () {
  // Create parent div for the code
  const codediv = document.createElement("div");
  codediv.classList.add("code-div");

  // Create textarea
  const textarea = document.createElement("textarea");
  textarea.classList.add("textarea-code");
  textarea.placeholder = "Input your code here";

  // Create button
  const textareaButton = document.createElement("button");
  textareaButton.textContent = "Insert Code";
  textareaButton.setAttribute("id", "textAreaBtn");

  //

  // Create a caption element for the code div
  const captionElement = document.createElement("p");
  captionElement.textContent = "Add Code Caption";

  // Append caption element, textarea, and button to parent div
  codediv.appendChild(textarea);
  codediv.appendChild(textareaButton);
  content.appendChild(codediv);

  // Listen for button click event
  textareaButton.addEventListener("click", function () {
    const codeContent = textarea.value;
    textarea.style.display = "none";
    textareaButton.style.display = "none";

    if (codeContent) {
      // Create pre and code elements for highlighting
      const pre = document.createElement("pre");
      const codeElement = document.createElement("code");
      codeElement.classList.add("code");
      // Replace this with your dynamic class names
      const languageClasses = [
        "language-javascript",
        "language-css",
        "language-html",
        "language-php",
        "language-markup",
      ];

      // Add each language class to the codeElement
      languageClasses.forEach((className) => {
        codeElement.classList.add(className);
      });
      codeElement.textContent = codeContent;
      pre.appendChild(codeElement);
      codediv.innerHTML = ""; // Clear the div
      codediv.appendChild(pre);

      Prism.highlightElement(codeElement); // Highlight the code element
    } else {
      console.error(Error);
    }
  });
});

addBigTitleBtn.addEventListener("click", function () {
  const bigTitle = prompt("Enter big title:");

  if (bigTitle) {
    const titleElement = document.createElement("h1");
    titleElement.classList.add("big-heading");
    titleElement.textContent = bigTitle;
    titleElement.contentEditable = true;
    titleElement.style.textAlign = "center";
    titleElement.style.outline = "none";
    content.appendChild(titleElement);
  }
});

addNormalTitleBtn.addEventListener("click", function () {
  const normalTitle = prompt("Enter normal title:");

  if (normalTitle) {
    const titleElement = document.createElement("h2");
    titleElement.classList.add("normal-heading");
    titleElement.contentEditable = true;
    titleElement.style.textAlign = "center";
    titleElement.style.outline = "none";
    titleElement.textContent = normalTitle;
    content.appendChild(titleElement);
  }
});

addParagraphBtn.addEventListener("click", function () {
  const paragraphElement = document.createElement("p");
  paragraphElement.classList.add("paragraph");
  paragraphElement.contentEditable = true;
  paragraphElement.style.outline = "none";
  paragraphElement.textContent = "Enter your content here";

  content.appendChild(paragraphElement);
});


// make autosave on server with specific name 