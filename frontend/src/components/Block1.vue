<template>
  <div id="block1">
    <div class="block1-content">
      <div id="video">
        <iframe
          width="1024"
          height="576"
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
          изготовление флеш-баннеров и большого спектра графической продукции:
          от всевозможных макетов и иллюстраций, до тщательно продуманных
          логотипов и фирменных стилей.
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import frontform from "./singlecomponents/frontform.vue";
export default {
  components: { frontform },
  name: "Block1",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#block1 {
  height: 810px;
  background-image: url("../assets/block1/block1_background1.webp");
  background-position: center;
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.block1-content {
  grid-column: 2 / 3;
  display: grid;
  grid-template-columns: repeat(3, minmax(auto, 300px));
  grid-template-rows: 450px auto 1fr;
  #video {
    grid-column: 1 / 3;
    grid-row: 1 / 2;
    //padding-top: 9.8%;
    //padding-left: 4.5%;
    //padding-right: 6%;
    //padding-bottom: 14.9%;
    position: relative;
    //padding-bottom: 56.25%;
    padding-bottom: 45.35%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
    margin-left: 4.5%;
    margin-right: 6%;
    margin-top: 9.8%;
    margin-bottom: 20%;
    iframe {
      //max-width: 100%;
      //max-height: 100%;
      //width: 60%;
      //height: 60%;
      //border-width: 0;
      //outline-width: 0;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  }
  #form {
    grid-column: 3/4;
    grid-row: 1/2;
    position: relative;
    padding-top: 10%;
    padding-left: 7%;
  }
  #info {
    grid-column: 1/-1;
    grid-row: 3/3;
    justify-self: center;
    align-self: center;
    H2 {
      text-align: center;
      margin-top: 1%;
      margin-bottom: 1%;
    }
    p {
      text-align: justify;
      font-size: 17px;
    }
  }
}
@media all and (max-width: 1024px) {
  #block1 {
    height: auto;
    background: #ebebeb;
    //background-image: url("../assets/block1/block1_background2.webp");
    //background-position: top;
    //background-repeat: no-repeat;
    //background-size: contain;
    display: grid;
    grid-template-columns: auto minmax(500px, 1fr) auto;
    background: #ebebeb;
    background-image: url("../assets/block1/block1_background2.webp");
    background-position: top;
    background-repeat: no-repeat;
    background-size: contain;
  }
  .block1-content {
    grid-column: 2 / 3;
    display: grid;
    grid-template-columns: minmax(300px, auto);
    grid-template-rows: 1fr 0.7fr 1fr;
    #video {
      grid-column: 1 / 2;
      grid-row: 1 / 2;
      //padding-top: 9%;
      //padding-left: 8.5%;
      //padding-right:8.5%;
      //padding-bottom: 7.5%;
      position: relative;
      //padding-bottom: 56.25%;
       padding-bottom: 45.5%;
      padding-top: 30px;
      height: 0;
      overflow: hidden;
      margin-top: 8%;
      margin-bottom: 20%;
      margin-left: 8%;
      margin-right: 8%;
      iframe {
        //max-width: 100%;
        //height: 75%;
        //border-width: 0;
        //outline-width: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
    }
    #form {
      grid-column: 1/-1;
      grid-row: 3/4;
      position: relative;
      padding-top: 0;
      padding-left: 0;
      justify-self: center;
      align-self: center;
    }
    #info {
      grid-column: 1/-1;
      grid-row: 2/3;
      justify-self: center;
      align-self: end;
      padding: 10%;
      H2 {
        text-align: center;
        margin-top: 1%;
        margin-bottom: 1%;
      }
      p {
        text-align: justify;
      }
    }
  }
}
</style>