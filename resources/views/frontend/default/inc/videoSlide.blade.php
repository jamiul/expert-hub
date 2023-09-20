<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{asset('assets/frontend/default/css/home.css')}}">
</head>

<body>
  <div class="video-container">
    <div class="slide-container active">
      <div class="slide">
        <div class="content">
          <h3>Video slider 01</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus illo rerum fuga doloribus temporibus
            itaque architecto cum, quod molestias saepe.</p>
          <a href="" class="btn">Learn More</a>
        </div>
        <video src="{{asset('/assets/home/1.mp4')}}" muted autoplay loop></video>
      </div>
    </div>

    <div class="slide-container">
      <div class="slide">
        <div class="content">
          <h3>Video slider 02</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus illo rerum fuga doloribus temporibus
            itaque architecto cum, quod molestias saepe.</p>
        </div>
        <video src="{{asset('/assets/home/2.mp4')}}" muted autoplay loop></video>
      </div>
    </div>

    <div class="slide-container">
      <div class="slide">
        <div class="content">
          <h3>Video slider 03</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus illo rerum fuga doloribus temporibus
            itaque architecto cum, quod molestias saepe.</p>
        </div>
        <video src="{{asset('/assets/home/3.mp4')}}" muted autoplay loop></video>
      </div>
    </div>

    <div class="slide-container">
      <div class="slide">
        <div class="content">
          <h3>Video slider 04</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus illo rerum fuga doloribus temporibus
            itaque architecto cum, quod molestias saepe.</p>
        </div>
        <video src="{{asset('/assets/home/4.mp4')}}" muted autoplay loop></video>
      </div>
    </div>
    <div id="next" onclick="next()"> >
    </div>
    <div id="prev" onclick="prev()">
      < </div>
    </div>

    <script>
    let slides = document.querySelectorAll('.slide-container');
    let index = 0;

    function next() {
      slides[index].classList.remove('active')
      index = (index + 1) % slides.length;
      slides[index].classList.add('active')
    }

    function prev() {
      slides[index].classList.remove('active')
      index = (index - 1 + slides.length) % slides.length;
      slides[index].classList.add('active')
    }
    </script>
</body>

</html>
