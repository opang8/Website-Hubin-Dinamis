<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script type="text/javascript">
   function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
  alert("Artikel Berhasil DIsalin Ke Clipboard.");
}
</script>

    <script type="text/javascript">
        $('#myModal').modal('toggle');
		$(document).scroll(function(){
			$('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
		});
        function openForm() {
        document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
        document.getElementById("myForm").style.display = "none";
        }
    </script>
    <script type="text/javascript">
        $('.slider__offset').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: $(".arrow__left"),
                nextArrow: $(".arrow__right"),
                fade: false,
                infinite: true,
                autoplay: true,
                pauseOnHover:true,
                focusOnSelect: true,
                centerPadding: 0,
                slideMargin: 1000,
                centerPadding: 0,
                responsive: [
                {
                    breakpoint: 1140,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
                ]
            });
      </script>