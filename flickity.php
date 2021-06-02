<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<h1>Flickity - images</h1>

<!-- Flickity HTML init -->
<div class="carousel"
  data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" alt="submerged" />
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" alt="look-out" />
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" alt="One World Trade" />
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" alt="drizzle" />
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose" />
</div>

<style>
    /* external css: flickity.css */

* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel img {
  display: block;
  height: 200px;
}

@media screen and ( min-width: 768px ) {
  .carousel img {
    height: 400px;
  }
}
</style>


<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>