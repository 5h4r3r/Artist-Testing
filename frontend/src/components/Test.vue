<template>
  <div id="test">
    <div class="block marker">
      <div class="video marker">
        <div class="video-item marker">
          <iframe
            width="100%"
            height="100%"
            src="https://www.youtube.com/embed/dCSr5fcjOeI"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="form marker">
        <div class="placeholder1" />
      </div>
      <div class="info marker">
        <h2>СТУДИЯ ПРОИЗВОДСТВА РЕКЛАМЫ "АРТИСТ"</h2>
        <p>
          Изготовит для Вас видеоролики любой сложности: от простых слайдов, до
          съемок игровых роликов и презентационных фильмов со сложной 3D
          анимацией. Голосами для Вашей будущей рекламы станут профессиональные
          дикторы и актеры, которых Вы сможете самостоятельно выбрать из большой
          базы голосов. Помимо видео- и аудио-роликов, мы также можем предложить
          изготовление флеш-баннеров и большого спектра графической продукции:
          от всевозможных макетов и иллюстраций, до тщательно продуманных
          логотипов и фирменных стилей.
        </p>
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
#test {
 
  .block {
    display: grid;
    grid-template-columns: auto 34%;
    grid-template-rows: 30% 30% auto;
    grid-column-start: 2;
    grid-column-end: 2;
    ///background-color: red;
    //height: 800px;
  }
  .marker {
    border: 2px solid red;
  }
  .video {
    grid-column-start: 1;
    grid-column-end: 1;
    grid-row-start: 1;
    grid-row-end: 3;
    display: grid;
    // height: 100%;
    // width: 100%;
    //margin-top: 5%;
    //margin-left: 4%;
    //margin-right: 5%;
    // margin-bottom: 4%;

    //height: 300px;
    //width: auto;
    //padding-top: 3.4em;
    //padding-left: 1.6em;
    //padding-right: 100%;
  }
  .video-item {
    margin-top: 9%;
    margin-left: 4%;
    margin-right: 3%;
    margin-bottom: 20%;
  }
  iframe {
    display: block;
    width: 100%;
    height: 100%;
    border-width: 0;
    outline-width: 0;
  }
  .form {
    grid-row-start: 1;
    grid-row-end: 3;

    //
  }
  .info {
    grid-column-start: 1;
    grid-column-end: 3;
    grid-row-start: 3;
    grid-row-end: 3;
    //padding: 1em;
    //padding-top: 50%;
  }
  .placeholder1 {
    width: 470px;
  }
}
@media all and (min-width: 1024px) and (max-width: 1280px) {
  #test {
    grid-template-columns: auto 900px auto;
    .block {
      grid-column-start: 2;
      grid-column-end: 2;
      //background-color: green;
    }
  }
}
@media all and (min-width: 768px) and (max-width: 1024px) {
  #test {
    background-position: top;
    background-size: 200%;
    grid-template-columns: minmax(auto, auto);
    .block {
      grid-column-start: 1;
      grid-column-end: 1;
    }
  }
}
@media all and (min-width: 480px) and (max-width: 768px) {
  #test {
      height: 10px;
    .marker {
      border: 2px solid purple;
    }
    background-position: top;
    background-size: 212%;
    grid-template-columns: minmax(auto, auto);
    .block {
      grid-template-columns: auto;
      grid-template-rows: auto auto auto;
      grid-column-start: 1;
      grid-column-end: 1;
    }
    .video {
      grid-column-start: 1;
      grid-column-end: 1;
    }
    .video-item {
    margin-top: 0;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;

  }
    .form {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 2;
      grid-row-end: 2;
    }
    .info {
      grid-column-start: 1;
      grid-column-end: 1;
    }
  }
}

@media all and (max-width: 480px) {
   #test {
      height: 310px;
    .marker {
      border: 2px solid purple;
    }
    background-position: top;
    background-size: 212%;
    grid-template-columns: minmax(auto, auto);
    .block {
      grid-template-columns: auto;
      grid-template-rows: auto auto auto;
      grid-column-start: 1;
      grid-column-end: 1;
    }
    .video {
      grid-column-start: 1;
      grid-column-end: 1;
    }
    .form {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 2;
      grid-row-end: 2;
    }
    .info {
      grid-column-start: 1;
      grid-column-end: 1;
    }
  }
}
</style>