
 $(document).ready(function(){ 	

$('.open_fancybox').fancybox({
    helpers : {
        thumbs : {
            stationary:true
        }
    }
});

$(".open_fancybox").click(function() {
    
    $.fancybox.open([
        {
            href : '/img/verstka/3333333.jpg',
            title : 'manual 1st title'
        },
        {
            href : 'http://fancyapps.com/fancybox/demo/2_b.jpg',
            title : '2nd title'
        },
        {
            href : 'http://fancyapps.com/fancybox/demo/3_b.jpg',
            title : '3rd title'
        }
    ], {
        nextEffect : 'none',
        prevEffect : 'none',
        padding    : 0,
         type: 'image',
        autoScale: true,
        prevEffect: 'none',
        nextEffect: 'none',

        helpers    : {
            title : {
                type: 'over'  
            },
        thumbs: {
                width: 50,
                height: 50,
                source: function (image) {
                    return image.thumbnail;
                },
                position: 'bottom'  //'top', 'bottom'
            }
        }
    });


    //  $.fancybox([{
    //     href: 'rep/img01.jpg',
    //     rel: 'fancybox-thumb',
    //     class: 'fancybox-thumb'
    // }, {
    //     href: 'rep/img02.jpg',
    //     rel: 'fancybox-thumb',
    //     class: 'fancybox-thumb'
    // }], {
    //     // API options
    //     type: 'image',
    //     autoScale: true,
    //     prevEffect: 'none',
    //     nextEffect: 'none',
    //     helpers: {
    //         thumbs: {
    //             width: 50,
    //             height: 50
    //         } //  thumbs
    //     } //  helpers
    // }); // fancyb
    
    return false;
}); 
// end fancy box 



// end
});

//   var map;
// function initMap() {
//   map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: -34.397, lng: 150.644},
//     zoom: 8
//   });
// }


