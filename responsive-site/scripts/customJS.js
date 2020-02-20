(function() {
  'use strict';
// Move the collection browse button to just underneath the title
  document.addEventListener('cdm-collection-landing-page:ready', function(e){
    var pageContainer = document.getElementsByClassName('CollectionLanding-maincontentLanding')[0];
    var browseButton = document.getElementsByClassName('text-center')[0];
    var pageTitle = document.getElementsByClassName('CollectionLanding-aboutCollection')[0];

    pageContainer.insertBefore(browseButton,pageTitle.nextSibling);
  });

})();