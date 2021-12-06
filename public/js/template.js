var btnScrollTop = document.getElementById(btnScrollTop)
var rootElement = document.documentElement
function scrollToTop(){
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  })
}
btnScrollTop.addEventListener("click", scrollToTop)