var index = 1;
function load(){
    var arr = [
        '../images/container/banner1.png',
        '../images/container/banner3.png',
       
    ]
    document.getElementById('anh').src = arr[index]
    index++;
    if (index >= arr.length){
        index=0
    }
    setInterval(load(),1000)
}