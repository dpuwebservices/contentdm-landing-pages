'use strict';



function checkPath(){
  var curPath=window.location.pathname; 
    var searchBox = document.getElementById('search-input');
  
  if (curPath.endsWith('digital/')==true){
//    alert("on the home page");
    searchBox.setAttribute("placeholder", "Search all collections");
  }
  else{
    searchBox.setAttribute("placeholder", "Search this collection");
  }
}

(function() {
  
  // need to add listener for when page changes
  document.addEventListener("DOMContentLoaded", function () {
    checkPath();
  });

})();



