$(".category").on("click", function() {
    if ($(".active")[0]) {
        $(".active").removeClass("active");
    }
    $(this).addClass("active");
});

$(document).ready(function() {
    //create sciencenter map
    var map = new google.maps.Map(document.getElementById('googleMap1'), {
        center: {lat: 42.4503514, lng: -76.5041515},
        zoom: 13
    });
    var marker = new google.maps.Marker( {
        position: {lat: 42.4503514, lng: -76.5041515},
        map: map,
    });
    //create SPIF map
    var map = new google.maps.Map(document.getElementById('googleMap2'), {
        center: {lat: 42.4539689, lng: -76.4864427},
        zoom: 13
    });
    var marker = new google.maps.Marker( {
        position: {lat: 42.4539689, lng: -76.4864427},
        map: map,
    });
    
    function getImgSize(imgSrc1, imgSrc2) {
        var newImg1 = new Image();
        var newImg2 = new Image();

        newImg1.onload = function() {
            var height = newImg1.height;
            var width = newImg1.width;
            var height2 = newImg2.height;
            var width2 = newImg2.width;
                
            var aspect1 = width/height;
            var aspect2 = width2/height2;
            
            $('.imgCont1').css('flex-grow', parseFloat(aspect1));
            $('.imgCont1').css('flex-shrink', 1.0);
            $('.imgCont1').css('flex-basis', '0%');
            $('.imgCont2').css('flex-grow', parseFloat(aspect2));
            $('.imgCont2').css('flex-shrink', 1.0);
            $('.imgCont2').css('flex-basis', '0%');

        }

        newImg1.src = imgSrc1; // this must be done AFTER setting onload
        newImg2.src = imgSrc2;
    }
    
    getImgSize($('#img1').attr('src'), $('#img2').attr('src'));
    
});

