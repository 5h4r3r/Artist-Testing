<template>
  <div id="first">
    <div class="background" />
    <div id="video">
      <iframe
        width="100%"
        height="100%"
        src="https://www.youtube-nocookie.com/embed/dCSr5fcjOeI?controls=0"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>
    <div id="form">
      <frontform />
    </div>
    <div id="info">
      <h2>СТУДИЯ ПРОИЗВОДСТВА РЕКЛАМЫ "АРТИСТ"</h2>
      <p>
        Изготовит для Вас видеоролики любой сложности: от простых слайдов, до
        съемок игровых роликов и презентационных фильмов со сложной 3D
        анимацией. Голосами для Вашей будущей рекламы станут профессиональные
        дикторы и актеры, которых Вы сможете самостоятельно выбрать из большой
        базы голосов. Помимо видео- и аудио-роликов, мы также можем предложить
        изготовление флеш-баннеров и большого спектра графической продукции: от
        всевозможных макетов и иллюстраций, до тщательно продуманных логотипов и
        фирменных стилей.
      </p>
    </div>
  </div>
</template>

<script>
import frontform from "./singlecomponents/frontform.vue";
export default {
  components: { frontform },
  name: "Video",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#first {
  height: 810px;
  grid-column: 1 / 4;
  display: grid;
  //display: grid;
  grid-template-columns: auto repeat(3, minmax(auto, 300px)) auto;
  grid-template-rows: 480px 330px;
  //height: 900px;
  .background {
    grid-column: 1 / -1;
    grid-row: 1 / -1;
    background-position: top;
    background-image: url("../assets/video.webp");
  }
  #video {
    grid-column: 2 / 4;
    grid-row: 1 / 2;
    padding-top: 9.8%;
    padding-left: 4.5%;
    padding-right: 6%;
    padding-bottom: 19.9%;
    iframe {
      //width: 60%;
      //height: 60%;
      border-width: 0;
      outline-width: 0;
    }
  }
  #form {
    position: relative;
    padding-top: 10%;
    padding-left: 7%;
    grid-column: 4/5;
    grid-row: 1/2;
  }
  #info {
    grid-column: 2/5;
    grid-row: 2/3;
    position: relative;
    padding: 3%;
    padding-top: 13%;
    H2 {
      position: relative;
      text-align: center;
      font-size: 40px;
    }
    p {
      text-align: justify;
      font-size: 17px;
    }
  }
  @media all and (min-width: 768px) and (max-width: 1024px) {
    border: 2px solid blue;
    #form {
      background-color: red;
      position: relative;
      top: 0;
      left: 0;
      grid-column: 1/ 2;
      grid-row: 2/3;
    }
  }
}
@media all and (min-width: 768px) and (max-width: 1024px) {
  #video {
    grid-column: 1/-1;
    //grid-row: 2 / 3;
    grid-template-columns: auto;
    grid-template-rows: repeat(auto-fill, minmax(480px, 1024px));
    .background {
      grid-column: 1 / -1;
      grid-row: 1 / -1;
      width: 100%;
      background-position: top;
      background-size: cover;
      background-image: url("../assets/videom1.jpg");
    }
    .info {
      //grid-column: 1/-1;
      //grid-row: 3/3;
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
  }
}
</style>