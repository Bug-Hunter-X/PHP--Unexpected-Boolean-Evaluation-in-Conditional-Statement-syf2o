function myFunc() {
  //some code
  return $someVar;
}

// ... later in the code ...
if (myFunc()) {
  // This will fail if $someVar is 0, an empty string, or FALSE
}
