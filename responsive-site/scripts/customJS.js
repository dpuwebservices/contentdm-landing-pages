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



function locationHashChanged() {
  if (location.hash === '#cool-feature') {
    console.log("You're visiting a cool feature!");
  }
  else{
    console.log("you're somewhere else");
  }
}


(function() {
  
  // need to add listener for when page changes
  document.addEventListener("DOMContentLoaded", function () {
    checkPath();
  });
window.onhashchange = locationHashChanged;
})();


/* this function directly from the cookbook is also not working
(function() {
'use strict';

  function urlRedirector() {
    const baseUrl = window.location.origin
      ? window.location.origin + '/'
      : window.location.protocol + '//' + window.location.host + '/';
    if (baseUrl == badUrl) {
      window.location = goodUrl;
    }
  }

  let badUrl = 'https://cdm15700.contentdm.oclc.org/';
  let goodUrl = 'https://cdmdemo.contentdm.oclc.org';

  // execute at earliest point in event lifecycle
  document.addEventListener('cdm-app:ready', function() {
    urlRedirector();
  });

})();

/* version history
*/