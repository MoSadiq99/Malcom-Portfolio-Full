// Contact Form 

function checkvalue(val)
{
    if(val==="other")
       document.getElementById('dropdown').style.display='block';
    else
       document.getElementById('dropdown').style.display='none'; 
}

// Testimonials carousel
$(".testimonial-carousel").owlCarousel({
   autoplay: false,
   smartSpeed: 1000,
   margin: 25,
   loop: true,
   center: true,
   dots: false,
   nav: true,
   navText : [
       '<i class="bi bi-chevron-left"></i>',
       '<i class="bi bi-chevron-right"></i>'
   ],
   responsive: {
       0:{
           items:1
       },
       768:{
           items:2
       },
       992:{
           items:3
       }
   }
});