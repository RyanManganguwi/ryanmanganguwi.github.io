let change = document.getElementById("change")
let img = document.querySelector("#gallery img")
let i = 0;
let images = [
    'https://hololive.hololivepro.com/wp-content/uploads/2023/11/Vestia-Zeta_pr-img_01.png',
    'https://hololive.hololivepro.com/wp-content/uploads/2020/07/Vestia-Zeta_pr-img_02.png',
    'https://hololive.hololivepro.com/wp-content/uploads/2020/07/Vestia-Zeta_pr-img_03.png',
    'https://hololive.hololivepro.com/wp-content/uploads/2020/07/Vestia-Zeta_pr-img_04.png'
];


change.addEventListener("click", () => {
    if(images && images.length > 0){
        img.style.filter="opacity(0)"
        setTimeout(() => {
            img.style.filter="opacity(1)"
            img.setAttribute("src", `${images[i]}`)
        }, 500);
        console.log(i)
        console.log(images[i])
        i++;
        if(i >= images.length){
            i = 0
        }
    }
})