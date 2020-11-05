function triggerClick(){
    document.querySelector('#profileimage').click();
}

function triggerClick2(){
    document.querySelector('#searchsubmit').click();
}

function displayImage(e){
    if(e.files[0]){
        var reader= new FileReader();

        reader.onload=function(e){
            document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}