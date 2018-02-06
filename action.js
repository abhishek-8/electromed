function countdown(i,j,k,iMax,jMax,kMax) {

    setTimeout(function() {
        document.getElementById('cntdwn1').innerHTML = i;
        document.getElementById('cntdwn2').innerHTML = j;
        document.getElementById('cntdwn3').innerHTML = k;

        if (i < iMax)
            i++ ;
        if (j < jMax)
            j += 7 ;
        if (k < kMax)
            k += 3;

        if (i <= iMax || j <= jMax || k <= kMax)
            countdown(i,j,k,iMax,jMax,kMax);
    }, 30);
}

function set1(x,n) {


    document.getElementById('product_image').innerHTML = '<img style="border-radius:5px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + ' ' + '">';

    document.getElementById('product_image1').innerHTML = '<img style="border-radius:10px;" width="100" height="80" src=photos/' + x + '1.jpg' + ' alt="">';
    document.getElementById('product_image2').innerHTML = '<img style="border-radius:10px;" width="100" height="80" src=photos/' + x + '2.jpg' + ' alt="" >';
    document.getElementById('product_image3').innerHTML = '<img style="border-radius:10px;" width="100" height="80" src=photos/' + x + '3.jpg' + ' alt="" >';
    document.getElementById('product_image4').innerHTML = '<img style="border-radius:10px;" width="100" height="80" src=photos/' + x + '4.jpg' + ' alt="" >';
    document.getElementById('product_image5').innerHTML = '<img style="border-radius:10px;" width="100" height="80" src=photos/' + x + '5.jpg' + ' alt="" >';
    document.getElementById('product_image6').innerHTML = '<img style="border-radius:10px;" width="100" height="80" src=photos/' + x + '6.jpg' + ' alt="" >';

    var x, y;
    for (x = 1; x <= 6; x++) {
        if ($('#product_image' + x ).is(':empty')) {
            $('#product_image' + x).hide();
        }
    }
}

function set2(x,y) {
    document.getElementById('product_image').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + y + '.jpg' + ' alt="' + x + '">';
}

