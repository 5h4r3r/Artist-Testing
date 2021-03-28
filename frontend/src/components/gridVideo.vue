<template>
  <div id="video">
    <div class="background" />
    <div class="info">
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
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#video {
  display: grid;
  grid-template-columns: minmax(1em, auto) repeat(30, minmax(auto, 32px)) minmax(
      1em,
      auto
    );
  grid-template-rows: repeat(25, minmax(auto, 32px));
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
     .background {
    grid-column: 1 / -1;
    grid-row: 1 / -1;
    width: 100%;
    background-position: top;
    background-size: cover;
    background-image: url("../assets/videom1.jpg");
  }
   .info {
    grid-column: 2/32;
    grid-row: 25/26;
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