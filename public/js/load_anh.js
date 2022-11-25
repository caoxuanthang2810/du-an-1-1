// function load(){
//     var index = 1;
//     var arr = [
//         './public/images/container/banner1.png',
//         './public/images/container/banner3.png',
//     ]
//     document.getElementById('anh').src = arr[index]
//     index++;
//     if (index >= arr.length){
//         index=0
//     }
//     setInterval(load(),1000)
// }

// load();

let i;
let count = 0;
var images = ["./public/images/container/banner1.png","./public/images/container/banner3.png"]

function slideShow(){
    for(i = 0; i < images.length; i++){
        document.getElementById("change_image").src = images[count];
    }

    count++;
    
    if(count >= images.length){
        count = 0;
    }

    setTimeout(slideShow,1000);
}
