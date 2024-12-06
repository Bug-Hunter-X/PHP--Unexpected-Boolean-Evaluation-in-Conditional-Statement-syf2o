function myFunc() {
  //some code
  return $someVar;
}

// ... later in the code ...
if (myFunc() === true) {
  //This will only execute if the function returns strictly true
} elseif (myFunc() === 0) {
  //Handle the case where function returns 0
} elseif (myFunc() === "") {
  //Handle the case where function returns an empty string
} else {
  //Handle other cases
}
