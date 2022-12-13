const header = document.querySelector("header")
window.addEventListener("scroll", function() {
    x = window.pageYOffset
    if (x > 0) {
        header.classList.add("sticky")
    } else {
        header.classList.remove("sticky")
    }
})
const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    //    console.log(imgPosition)
const imgContainer = document.querySelector(".aspect-ratio-169")
const dotItem = document.querySelectorAll(".dot")
let index = 0
let imgnumber = imgPosition.lengths

imgPosition.forEach(function(image, index) {
    image.style.left = index * 100 + "%"
    dotItem[index].addEventListener("click", function() {
        silder(index)

    })

})

function imgSlide() {
    index++
    console.log(index)
    if (index > imgnumber) {
        index = 0
    }
    // function silder(index)
    { imgContainer.style.left = "-" + index * 100 + "%" }
}

function silder(index) {
    imgContainer.style.left = "-" + index * 100 + "%"
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}
setInterval(imgSlide, 5000)
const toP = document.querySelector(".top")
window.addEventListener("scroll", function() {
    const x = this.pageYOffset;
    if (x > 1) { toP.classList.add("active") } else {
        toP.classList.remove("active")
    }
})
const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
itemsliderbar.forEach(function(menu, index) {
        menu.addEventListener("click", function() {
            menu.classList.toggle("block")
        })
    })
    // product//
const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
if (baoquan) {
    baoquan.addEventListener("click", function() {
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
    })
}
if (chitiet) {
    chitiet.addEventListener("click", function() {
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
    })
}