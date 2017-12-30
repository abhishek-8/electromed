var i = 1,
    j = 10,
    k = 500;



function start() {
    if (j > 42)
        j = 42;
    if (k > 1024)
        k = 1024;
    if (i > 5)
        i = 5;

    setTimeout(function() {
        document.getElementById('field1').innerHTML = i;
        document.getElementById('field2').innerHTML = j;
        document.getElementById('field3').innerHTML = k;

        if (i < 5)
            i++;
        if (j < 42)
            j += 6;
        if (k < 1024)
            k += 80;

        if (i != 5 || j != 42 || k != 1024)
            start();
    }, 100);
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



function set5(x) {

    if (x == 'ntpc_rihand') {

        document.getElementById('r1d1').innerHTML = 'ON GATE';
        document.getElementById('r1d2').innerHTML = '<p class="bullets" style="display:inline;">Online Display Of Pollution Parameters</p>';
        document.getElementById('r2d1').innerHTML = '';
        document.getElementById('r2d2').innerHTML = '<p class="bullets" style="display:inline;">Multipage display</p>';
        document.getElementById('r3d1').innerHTML = '';
        document.getElementById('r3d2').innerHTML = '<p class="bullets" style="display:inline;">Rs485 communication</p>';
        document.getElementById('r4d1').innerHTML = 'AT ADMIN OFFICE & COLONY GATE';
        document.getElementById('r4d2').innerHTML = '<p class="bullets" style="display:inline;">Countdown displays for project activities</p>';
        document.getElementById('r5d1').innerHTML = '';
        document.getElementById('r5d2').innerHTML = '<p class="bullets" style="display:inline;">Automatic updation of days and months</p>';
        document.getElementById('r6d1').innerHTML = '';
        document.getElementById('r6d2').innerHTML = '<p class="bullets" style="display:inline;">Entry through either RS 485 or inbuilt keyboard</p>';

        document.getElementById('ri1').innerHTML = '<a href="project_page.php?id=patna_high_court"><img src="photos/patna_high_court1.jpg" height="170" alt=""></a>';
        document.getElementById('rd1').innerHTML = '';
        document.getElementById('rl1').innerHTML = '<br><a href="project_page.php?id=patna_high_court">PATNA HIGH COURT</a>';

        document.getElementById('ri2').innerHTML = '<a href="project_page.php?id=patna_railway_station"><img src="photos/patna_railway_station1.jpg" height="170" alt=""></a>';
        document.getElementById('rd2').innerHTML = '';
        document.getElementById('rl2').innerHTML = '<br><a href="project_page.php?id=patna_railway_station">RAILWAY STATION DISPLAY AT PATNA</a>';

        document.getElementById('ri3').innerHTML = '<a href="project_page.php?id=panki"><img src="photos/panki1.jpg" height="170" alt=""></a>';
        document.getElementById('rd3').innerHTML = '';
        document.getElementById('rl3').innerHTML = '<br><a href="project_page.php?id=panki">PANKI</a>';

        document.getElementById('ri4').innerHTML = '<a href="project_page.php?id=coach_guidance_system"><img src="photos/coach_guidance_system1.jpg" height="170" alt=""></a>';
        document.getElementById('rd4').innerHTML = '';
        document.getElementById('rl4').innerHTML = '<br><a href="project_page.php?id=coach_guidance_system">COACH GUIDANCE SYSTEM</a>';

        document.getElementById('project_image1').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image2').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '2.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image3').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '" >';

    } else if (x == 'patna_high_court') {



        document.getElementById('r1d1').innerHTML = '';
        document.getElementById('r1d2').innerHTML = '<p class="bullets" style="display:inline;">Online Display Of court case numbers of 40 courts.</p>';
        document.getElementById('r2d1').innerHTML = '';
        document.getElementById('r2d2').innerHTML = '<p class="bullets" style="display:inline;">Display outside courtrooms and at 14 different locations</p>';
        document.getElementById('r3d1').innerHTML = '';
        document.getElementById('r3d2').innerHTML = '<p class="bullets" style="display:inline;">Rs485 communication</p>';
        document.getElementById('r4d1').innerHTML = '';
        document.getElementById('r4d2').innerHTML = '<p class="bullets" style="display:inline;">Network length is 6 kms.</p>';



        document.getElementById('ri1').innerHTML = '<a href="project_page.php?id=ntpc_rihand"><img src="photos/ntpc_rihand1.jpg" height="170" alt=""></a>';
        document.getElementById('rd1').innerHTML = '';
        document.getElementById('rl1').innerHTML = '<br><a href="project_page.php?id=ntpc_rihand">NTPC RIHAND</a>';

        document.getElementById('ri2').innerHTML = '<a href="project_page.php?id=patna_railway_station"><img src="photos/patna_railway_station1.jpg" height="170" alt=""></a>';
        document.getElementById('rd2').innerHTML = '';
        document.getElementById('rl2').innerHTML = '<br><a href="project_page.php?id=patna_railway_station">RAILWAY STATION DISPLAY AT PATNA</a>';

        document.getElementById('ri3').innerHTML = '<a href="project_page.php?id=panki"><img src="photos/panki1.jpg" height="170" alt=""></a>';
        document.getElementById('rd3').innerHTML = '';
        document.getElementById('rl3').innerHTML = '<br><a href="project_page.php?id=panki">PANKI</a>';

        document.getElementById('ri4').innerHTML = '<a href="project_page.php?id=coach_guidance_system"><img src="photos/coach_guidance_system1.jpg" height="170" alt=""></a>';
        document.getElementById('rd4').innerHTML = '';
        document.getElementById('rl4').innerHTML = '<br><a href="project_page.php?id=coach_guidance_system">COACH GUIDANCE SYSTEM</a>';

        document.getElementById('project_image1').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image2').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image3').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '" >';

    } else if (x == 'patna_railway_station') {


        document.getElementById('r1d1').innerHTML = '';
        document.getElementById('r1d2').innerHTML = '<p class="bullets" style="display:inline;">RS485 communication</p>';
        document.getElementById('r2d1').innerHTML = '';
        document.getElementById('r2d2').innerHTML = '<p class="bullets" style="display:inline;">Display of important govt. messages</p>';
        document.getElementById('r3d1').innerHTML = '';
        document.getElementById('r3d2').innerHTML = '<p class="bullets" style="display:inline;">Installation in 2007</p>';



        document.getElementById('ri1').innerHTML = '<a href="project_page.php?id=ntpc_rihand"><img src="photos/ntpc_rihand1.jpg" height="170" alt=""></a>';
        document.getElementById('rd1').innerHTML = '';
        document.getElementById('rl1').innerHTML = '<br><a href="project_page.php?id=ntpc_rihand">NTPC RIHAND</a>';

        document.getElementById('ri2').innerHTML = '<a href="project_page.php?id=patna_high_court"><img src="photos/patna_high_court1.jpg" height="170" alt=""></a>';
        document.getElementById('rd2').innerHTML = '';
        document.getElementById('rl2').innerHTML = '<br><a href="project_page.php?id=patna_high_court">PATNA HIGH COURT</a>';

        document.getElementById('ri3').innerHTML = '<a href="project_page.php?id=panki"><img src="photos/panki1.jpg" height="170" alt=""></a>';
        document.getElementById('rd3').innerHTML = '';
        document.getElementById('rl3').innerHTML = '<br><a href="project_page.php?id=panki">PANKI</a>';

        document.getElementById('ri4').innerHTML = '<a href="project_page.php?id=coach_guidance_system"><img src="photos/coach_guidance_system1.jpg" height="170" alt=""></a>';
        document.getElementById('rd4').innerHTML = '';
        document.getElementById('rl4').innerHTML = '<br><a href="project_page.php?id=coach_guidance_system">COACH GUIDANCE SYSTEM</a>';

        document.getElementById('project_image1').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image2').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '2.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image3').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '" >';


    } else if (x == 'shakti_bhawan') {


        document.getElementById('r1d1').innerHTML = '';
        document.getElementById('r1d2').innerHTML = '<p class="bullets" style="display:inline;">Display of various data from excel sheet</p>';
        document.getElementById('r2d1').innerHTML = '';
        document.getElementById('r2d2').innerHTML = '<p class="bullets" style="display:inline;">RS 485 communication</p>';



        document.getElementById('ri1').innerHTML = '<a href="project_page.php?id=ntpc_rihand"><img src="photos/ntpc_rihand1.jpg" height="170" alt=""></a>';
        document.getElementById('rd1').innerHTML = '';
        document.getElementById('rl1').innerHTML = '<br><a href="project_page.php?id=ntpc_rihand">NTPC RIHAND</a>';

        document.getElementById('ri2').innerHTML = '<a href="project_page.php?id=patna_high_court"><img src="photos/patna_high_court1.jpg" height="170" alt=""></a>';
        document.getElementById('rd2').innerHTML = '';
        document.getElementById('rl2').innerHTML = '<br><a href="project_page.php?id=patna_high_court">PATNA HIGH COURT</a>';

        document.getElementById('ri3').innerHTML = '<a href="project_page.php?id=panki"><img src="photos/panki1.jpg" height="170" alt=""></a>';
        document.getElementById('rd3').innerHTML = '';
        document.getElementById('rl3').innerHTML = '<br><a href="project_page.php?id=panki">PANKI</a>';

        document.getElementById('ri4').innerHTML = '<a href="project_page.php?id=coach_guidance_system"><img src="photos/coach_guidance_system1.jpg" height="170" alt=""></a>';
        document.getElementById('rd4').innerHTML = '';
        document.getElementById('rl4').innerHTML = '<br><a href="project_page.php?id=coach_guidance_system">COACH GUIDANCE SYSTEM</a>';

        document.getElementById('project_image1').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image2').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image3').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '" >';


    } else if (x == 'panki') {


        document.getElementById('r1d1').innerHTML = '';
        document.getElementById('r1d2').innerHTML = '<p class="bullets" style="display:inline;">Display of various data from excel sheet</p>';
        document.getElementById('r2d1').innerHTML = '';
        document.getElementById('r2d2').innerHTML = '<p class="bullets" style="display:inline;">RS 485 communication</p>';



        document.getElementById('ri1').innerHTML = '<a href="project_page.php?id=ntpc_rihand"><img src="photos/ntpc_rihand1.jpg" height="170" alt=""></a>';
        document.getElementById('rd1').innerHTML = '';
        document.getElementById('rl1').innerHTML = '<br><a href="project_page.php?id=ntpc_rihand">NTPC RIHAND</a>';

        document.getElementById('ri2').innerHTML = '<a href="project_page.php?id=patna_high_court"><img src="photos/patna_high_court1.jpg" height="170" alt=""></a>';
        document.getElementById('rd2').innerHTML = '';
        document.getElementById('rl2').innerHTML = '<br><a href="project_page.php?id=patna_high_court">PATNA HIGH COURT</a>';

        document.getElementById('ri3').innerHTML = '<a href="project_page.php?id=shakti_bhawan"><img src="photos/shakti_bhawan1.jpg" height="170" alt=""></a>';
        document.getElementById('rd3').innerHTML = '';
        document.getElementById('rl3').innerHTML = '<br><a href="project_page.php?id=shakti_bhawan">SHAKTI BHAWAN</a>';

        document.getElementById('ri4').innerHTML = '<a href="project_page.php?id=coach_guidance_system"><img src="photos/coach_guidance_system1.jpg" height="170" alt=""></a>';
        document.getElementById('rd4').innerHTML = '';
        document.getElementById('rl4').innerHTML = '<br><a href="project_page.php?id=coach_guidance_system">COACH GUIDANCE SYSTEM</a>';

        document.getElementById('project_image1').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image2').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image3').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '" >';


    } else if (x == 'coach_guidance_system') {



        document.getElementById('r1d1').innerHTML = '';
        document.getElementById('r1d2').innerHTML = '<p class="bullets" style="display:inline;">Train, coach and platform number display through RS 485 communication.</p>';



        document.getElementById('ri1').innerHTML = '<a href="project_page.php?id=ntpc_rihand"><img src="photos/ntpc_rihand1.jpg" height="170" alt=""></a>';
        document.getElementById('rd1').innerHTML = '';
        document.getElementById('rl1').innerHTML = '<br><a href="project_page.php?id=ntpc_rihand">NTPC RIHAND</a>';

        document.getElementById('ri2').innerHTML = '<a href="project_page.php?id=patna_high_court"><img src="photos/patna_high_court1.jpg" height="170" alt=""></a>';
        document.getElementById('rd2').innerHTML = '';
        document.getElementById('rl2').innerHTML = '<br><a href="project_page.php?id=patna_high_court">PATNA HIGH COURT</a>';

        document.getElementById('ri3').innerHTML = '<a href="project_page.php?id=panki"><img src="photos/panki1.jpg" height="170" alt=""></a>';
        document.getElementById('rd3').innerHTML = '';
        document.getElementById('rl3').innerHTML = '<br><a href="project_page.php?id=panki">PANKI</a>';

        document.getElementById('ri4').innerHTML = '<a href="project_page.php?id=shakti_bhawan"><img src="photos/shakti_bhawan1.jpg" height="170" alt=""></a>';
        document.getElementById('rd4').innerHTML = '';
        document.getElementById('rl4').innerHTML = '<br><a href="project_page.php?id=shakti_bhawan">SHAKTI BHAWAN</a>';
        document.getElementById('project_image1').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '1.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image2').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '2.jpg' + ' alt="' + x + '">';
        document.getElementById('project_image3').innerHTML = '<img style="border-radius:10px;" width="100%" height="100%" src=photos/' + x + '3.jpg' + ' alt="' + x + '" >';


    }

    $("img").error(function() {
        $(this).hide();
    });

    var x, y;
    for (x = 1; x <= 7; x++) {
        if ($('#r' + x + 'd2').is(':empty')) {
            $('#r' + x).hide();
        }
    }
}

