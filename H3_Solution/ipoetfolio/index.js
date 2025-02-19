














// Select all elements with the classes you want to animate
const elementsToAnimate = document.querySelectorAll(".box, .progres, .drop");

// Function to handle the intersection observer callback
function handleIntersection(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      // Uncomment if you want to run the animation only once
      // observer.disconnect();
    }
  });
}

// Set up a single intersection observer for all elements
const observer = new IntersectionObserver(handleIntersection, {
  threshold: 0.2, // Trigger the callback when 10% of the element is visible
});

// Start observing each element
elementsToAnimate.forEach((element) => {
  observer.observe(element);
});

//
// head aniamtion

// List of sentences
var _CONTENT = ["I am a Developer", "Welcome to my portfolio!"];

// Current sentence being processed
var _PART = 0;

// Character number of the current sentence being processed
var _PART_INDEX = 0;

// Holds the handle returned from setInterval
var _INTERVAL_VAL;

// Element that holds the text
var _ELEMENT = document.querySelector("#text");

// Cursor element
var _CURSOR = document.querySelector("#cursor");

// Implements typing effect
function Type() {
  // Get substring with 1 characater added
  var text = _CONTENT[_PART].substring(0, _PART_INDEX + 1);
  _ELEMENT.innerHTML = text;
  _PART_INDEX++;

  // If full sentence has been displayed then start to delete the sentence after some time
  if (text === _CONTENT[_PART]) {
    // Hide the cursor
    _CURSOR.style.display = "none";

    clearInterval(_INTERVAL_VAL);
    setTimeout(function () {
      _INTERVAL_VAL = setInterval(Delete, 50);
    }, 1000);
  }
}

// Implements deleting effect
function Delete() {
  // Get substring with 1 characater deleted
  var text = _CONTENT[_PART].substring(0, _PART_INDEX - 1);
  _ELEMENT.innerHTML = text;
  _PART_INDEX--;

  // If sentence has been deleted then start to display the next sentence
  if (text === "") {
    clearInterval(_INTERVAL_VAL);

    // If current sentence was last then display the first one, else move to the next
    if (_PART == _CONTENT.length - 1) _PART = 0;
    else _PART++;

    _PART_INDEX = 0;

    // Start to display the next sentence after some time
    setTimeout(function () {
      _CURSOR.style.display = "inline-block";
      _INTERVAL_VAL = setInterval(Type, 100);
    }, 200);
  }
}

// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 100);

// function startTypingEffect(elementId, contentArray) {
//     let part = 0;
//     let partIndex = 0;
//     let intervalVal;
//     const element = document.querySelector(`#${elementId}`);
//     const cursor = document.querySelector(`#${elementId} + span`);

//     function type() {
//         const text = contentArray[part].substring(0, partIndex + 1);
//         element.innerHTML = text;
//         partIndex++;

//         if (text === contentArray[part]) {
//             cursor.style.display = 'none';
//             clearInterval(intervalVal);
//             setTimeout(() => {
//                 intervalVal = setInterval(deleteText, 50);
//             }, 1000);
//         }
//     }

//     function deleteText() {
//         const text = contentArray[part].substring(0, partIndex - 1);
//         element.innerHTML = text;
//         partIndex--;

//         if (text === '') {
//             clearInterval(intervalVal);
//             part = (part === contentArray.length - 1) ? 0 : part + 1;
//             partIndex = 0;

//             setTimeout(() => {
//                 cursor.style.display = 'inline-block';
//                 intervalVal = setInterval(type, 100);
//             }, 200);
//         }
//     }

//     intervalVal = setInterval(type, 100);
// }

// // Set up typing effects for both elements
// startTypingEffect('text', ["Hello, I'm Alex Smith", "Welcome to my portfolio!"]);
// startTypingEffect('text2Content', ["I'm a Web Developer", "Let's create something amazing!"]);

// dropdow

// //
// $(document).ready(function () {
//   $(".dropdown-submenu a.test").on("click", function (e) {
//     $(this).next("ul").toggle();
//     e.stopPropagation();
//     e.preventDefault();
//   });
// });
