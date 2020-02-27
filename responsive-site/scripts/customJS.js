(function() {
  'use strict';
  
    function changeLogoLink() {
    const headerLogo = document.querySelector('div.Header-logoHolder>div>a');
    const newUrl = 'https://library.depaul.edu/Pages/default.aspx';
    if (headerLogo) {
      headerLogo.href = newUrl;
      headerLogo.addEventListener('click', function(e) {
        this.href = newUrl;
        e.stopPropagation();
      });
    }
  }
  
// Move the collection browse button to just underneath the title
  document.addEventListener('cdm-collection-landing-page:ready', function(e){
    var pageContainer = document.getElementsByClassName('CollectionLanding-maincontentLanding')[0];
    var browseButton = document.getElementsByClassName('text-center')[0];
    var pageTitle = document.getElementsByClassName('CollectionLanding-aboutCollection')[0];

    pageContainer.insertBefore(browseButton,pageTitle.nextSibling);
  });
  
  document.addEventListener('cdm-home-page:ready', changeLogoLink);
  document.addEventListener('cdm-about-page:ready', changeLogoLink);
  document.addEventListener('cdm-login-page:ready', changeLogoLink);
  document.addEventListener('cdm-search-page:ready', changeLogoLink);
  document.addEventListener('cdm-collection-page:ready', changeLogoLink);
  document.addEventListener('cdm-advanced-search-page:ready', changeLogoLink);
  document.addEventListener('cdm-item-page:ready', changeLogoLink);
  document.addEventListener('cdm-custom-page:ready', changeLogoLink);

})();