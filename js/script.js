let i = 0;

function toggleColor() {
  const orange = document.querySelectorAll(".orange");
  const purple = document.querySelectorAll(".purple");

  if (i % 2 == 0) {
    orange.forEach(tag => {
        tag.classList.replace("orange", "purple")
    });
  }else {
    purple.forEach(tag => {
        tag.classList.replace("purple", "orange")
    });
  }

  i++;
}
