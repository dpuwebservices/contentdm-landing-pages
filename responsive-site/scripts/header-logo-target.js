(function() {
  'use strict';

  function changeLogoLink() {
    const headerLogo = document.querySelector('div.Header-logoHolder>div>a');
    const newUrl = 'https://library.depaul.edu';
    if (headerLogo) {
      headerLogo.href = newUrl;
      headerLogo.addEventListener('click', function(e) {
        this.href = newUrl;
        e.stopPropagation();
      });
    }
  }

  document.addEventListener('cdm-home-page:ready', changeLogoLink);
  document.addEventListener('cdm-about-page:ready', changeLogoLink);
  document.addEventListener('cdm-login-page:ready', changeLogoLink);
  document.addEventListener('cdm-search-page:ready', changeLogoLink);
  document.addEventListener('cdm-collection-page:ready', changeLogoLink);
  document.addEventListener('cdm-advanced-search-page:ready', changeLogoLink);
  document.addEventListener('cdm-item-page:ready', changeLogoLink);
  document.addEventListener('cdm-custom-page:ready', changeLogoLink);

})();
