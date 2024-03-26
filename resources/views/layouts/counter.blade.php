@extends('layouts.footer')
@extends('layouts.navbar')

<style>
    body {
        font-family: Arial, sans-serif; /* Ganti dengan jenis huruf yang diinginkan */
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: auto;
    }

    .description {
        margin-top: 20px;
        line-height: 1.6;
    }

    .img-fluidd {
        max-width: 70%;
        height: auto;
        display: block; /* Hindari margin tambahan pada elemen gambar */
        margin: 0 auto; /* Pusatkan gambar di dalam kontainer */
    }

    .stats-container {
  display: grid;
  gap: 24px;
  grid-template-columns: 1fr 1fr 1fr;
  margin: 30px auto;
  max-width: 1000px;
  padding-inline: 16px;
}

.stats-container .stat {
  background: #ef233c;
  padding: 24px;
  text-align: center;
  color: #edf2f4;
}

.stats-container .stat .odometer {
  font-size: 50px;
  font-weight: bold;
  display: inline-block;
}

.stats-container .stat .type {
  font-size: 20px;
}

.odometer.plus {
  position: relative;
}

.odometer.plus::after {
  content: "+";
  position: absolute;
  top: 0;
  right: -16px;
  font-size: 20px;
}

@media (max-width: 700px) {
  .stats-container {
    grid-template-columns: 1fr;
  }
}

    @media (min-width: 768px) {
        /* Aturan CSS untuk layar desktop */
        .img-fluid {
            max-width: 80%;
            float: left;
            margin-right: 20px;
        }

        .description {
            overflow: hidden;
        }
    }
</style>

<script
      src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/odometer.min.js"
      integrity="sha512-v3fZyWIk7kh9yGNQZf1SnSjIxjAKsYbg6UQ+B+QxAZqJQLrN3jMjrdNwcxV6tis6S0s1xyVDZrDz9UoRLfRpWw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>



@section('content')
<script>
    const createOdometer = (el, value) => {
  const odometer = new Odometer({
    el: el,
    value: 0,
  });

  let hasRun = false;

  const options = {
    threshold: [0, 0.9],
  };

  const callback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (!hasRun) {
          odometer.update(value);
          hasRun = true;
        }
      }
    });
  };

  const observer = new IntersectionObserver(callback, options);
  observer.observe(el);
};

const subscribersOdometer = document.querySelector(".subscribers-odometer");
createOdometer(subscribersOdometer, 29800);

const videosOdometer = document.querySelector(".videos-odometer");
createOdometer(videosOdometer, 790);

const projectsOdometer = document.querySelector(".projects-odometer");
createOdometer(projectsOdometer, 89);
</script>

<div class="stats-container">
    <div class="stat">
      <div class="subscribers-odometer odometer plus">323</div>
      <div class="type">Subscribers</div>
    </div>

    <div class="stat">
      <div class="videos-odometer odometer plus">1212</div>
      <div class="type">Videos</div>
    </div>

    <div class="stat">
      <div class="projects-odometer odometer">91293</div>
      <div class="type">Projects</div>
    </div>
  </div>
@endsection
