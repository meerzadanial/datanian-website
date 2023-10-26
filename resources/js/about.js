const observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry => {
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('show');
            
        } else{
            entry.target.classList.remove('show');
           
        }
    });
});    
       

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el => observer.observe(el)));
    

  $(document).ready(function () {
    $(".managetree").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      dots: true,
      center: true,
      navText: [
        
      ],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  });
  

