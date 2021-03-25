<template>
  <div id="formtop">
    <div class="background" />
    <div class="form">
    </div>
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#formtop {
  display: grid;
  grid-template-columns: minmax(1em, auto) repeat(30, minmax(auto, 32px)) minmax(
      1em,
      auto
    );
  grid-template-rows: repeat(25, minmax(auto, 32px));
  display: none;
  .background {
    grid-column: 1 / -1;
    grid-row: 1 / -1;
    width: 100%;
    background-position: center;
    background-size: cover;
    background-image: url("../assets/video.png");
  }
  .video {
    position: relative;
    padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
    height: 0;
    overflow: hidden;
  }
  .video iframe {
    position: absolute;
    top: 11.5%;
    left: 3.1%;
    width: 60%;
    height: 60%;
    border-width: 0;
    outline-width: 0;
  }
  .info {
    grid-column: 2/32;
    grid-row: 19/26;
    position: relative;
    top: 12%;
    H2 {
      position: relative;
      text-align: center;
      font-size: 32px;
    }
    p {
      text-align: justify;
      font-size: 14pt;
    }
  }
   @media all and (min-width: 768px) and (max-width: 1024px) {
       display: grid;
     .background {
    grid-column: 1 / -1;
    grid-row: 1 / -1;
    width: 100%;
    background-position: top;
    background-size: cover;
    background-image: url("../assets/videom2.jpg");
  }
}
}
</style>