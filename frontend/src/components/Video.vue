<template>
  <div id="video">
    <div class="segment">
      <div class="video-block content">
        <div class="video">
          <iframe
            width="536"
            height="302"
            src="https://www.youtube.com/embed/dCSr5fcjOeI"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <div class="info">
          <h2>СТУДИЯ ПРОИЗВОДСТВА РЕКЛАМЫ "АРТИСТ"</h2>
          <p>
            Изготовит для Вас видеоролики любой сложности: от простых слайдов,
            до съемок игровых роликов и презентационных фильмов со сложной 3D
            анимацией. Голосами для Вашей будущей рекламы станут
            профессиональные дикторы и актеры, которых Вы сможете самостоятельно
            выбрать из большой базы голосов. Помимо видео- и аудио-роликов, мы
            также можем предложить изготовление флеш-баннеров и большого спектра
            графической продукции: от всевозможных макетов и иллюстраций, до
            тщательно продуманных логотипов и фирменных стилей.
          </p>
        </div>
      </div>
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
  //display: grid;
  //grid-column-start: 2;
  //grid-column-end: 2;
  .segment {
    background-image: url("../assets/video.png");
  }
  .video-block {
    //display: grid;
    //grid-template-columns: auto auto auto;
    //grid-auto-rows: 200px;
    height: 810px;
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