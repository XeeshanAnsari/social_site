 window.setInterval(function slideA() {
            var image = document.getElementById("mainContainer");
            imgCount = imgCount + 1;
            if(imgCount < 1){
                imgCount = total;
            }
            else if(imgCount > total){
                imgCount = 1;
            }
            else{
                var path  = "../image/img" + imgCount + ".jpg";
                 image.backgroundColor = "blue";
            }
              
        },3000);