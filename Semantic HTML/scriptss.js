var x = 6
var y = 8
let z = x+y

console.log('here i am');

document.getElementById("alert").onclick=function() {alert("Hello! I am an alert box!!")};
document.getElementById("click").onclick=function() {document.write(z + y)};


document.getElementById("flexbocs").onclick=function openInNewTab(href) {
    Object.assign(document.createElement('a'), {
      target: '_blank',
      rel: 'noopener noreferrer',
      href: 'https://css-tricks.com/snippets/css/a-guide-to-flexbox/',
    }).click();
  }


document.getElementById("Grid").onclick=function openInNewTab(href) {
    Object.assign(document.createElement('a'), {
      target: '_blank',
      rel: 'noopener noreferrer',
      href: 'https://css-tricks.com/snippets/css/complete-guide-grid/#prop-grid-template-columns-rows',
    }).click();
  }


document.getElementById("contact").onclick=function openInNewTab(href) {
    Object.assign(document.createElement('a'), {
      target: '_blank',
      rel: 'noopener noreferrer',
      href: 'https://www.laylabs.it/privacy-policy/',
    }).click();
  }


  
  document.getElementById("Services").onclick=function openInNewTab(href) {
    Object.assign(document.createElement('a'), {
      target: '_blank',
      rel: 'noopener noreferrer',
      href: 'https://context.reverso.net/translation/english-italian/services',
    }).click();
  }