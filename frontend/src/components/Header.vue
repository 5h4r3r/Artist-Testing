<template>
  <div id="header">
    <div class="background" />
    <div class="content">
      <div class="logo" />
      <div class="plank">
        <div class="num">+7(3522)23-23-23</div>
      </div>
      <div class="nav">
        <ul>
          <li><a href="#" v-scroll-to="'#whyarewe'">О нас</a></li>
          <li><a href="#" v-scroll-to="'#awards'">Почему мы</a></li>
          <li><a href="#" v-scroll-to="'#examples'">Портфолио</a></li>
          <li><a href="#" v-scroll-to="'#partners'">Партнеры</a></li>
          <li><a href="#" v-scroll-to="'#contacrs'">Контакты</a></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#header {
  grid-column: 1 / 4;
  display: grid;
  grid-template-columns: minmax(1em, auto) repeat(6, minmax(auto, 150px)) minmax(
      1em,
      auto
    );
  grid-template-rows: minmax(auto, 90px);

  .background {
    grid-column: 1 / -1;
    grid-row: 1 / -1;
    background: linear-gradient(to top, #e7b219, #f9dd0a);
  }
  .content {
    grid-column: 2/8;
    grid-row: 1;
    //grid
    display: grid;
    grid-template-columns: repeat(10, minmax(auto, 90px));
    grid-template-rows: repeat(2, 50%);
  }
  .logo {
    margin: 10px;
    height: 70px;
    width: 77px;
    background-image: url("../assets/header/header_logo.webp");
    //grid
    grid-column: 1/2;
    grid-row: 1/3;
  }
  .plank {
    height: 41px;
    width: 185px;
    background-image: url("../assets/header/header_item1.webp");
    background-size: cover;
    //grid
    grid-column: 9/11;
    grid-row: 1/2;
    .num {
      text-align: center;
      padding: 6%;
      padding-left: 25%;
      font-size: 12pt;
      color: #f9dd0a;
    }
  }
  .nav {
    grid-column: 6/11;
    grid-row: 3/2;

    ul {
      list-style: none; /*убираем маркеры списка*/
      margin: 0; /*убираем отступы*/
      padding-left: 0; /*убираем отступы*/
      padding-right: 0; /*убираем отступы*/
      //grid
      display: grid;
      grid-template-columns: repeat(5, minmax(auto, 90px));
    }
    a {
      color: black;
      font-size: 13pt;
      text-decoration: none; /*убираем подчеркивание текста ссылок*/
    }
    li {
      text-align: center;
      // width: 100%; /* сдвинуть по центру колонки*/
      //float: left; /*Размещаем список горизонтально для реализации меню*/
      margin-left: auto; /*Добавляем отступ у пунктов меню*/
    }
  }
  @media all and (min-width: 1024px) and (max-width: 1280px) {
    border: 2px solid blue;
    .background {
    }
    .content {
    }
    .logo {
    }
    .plank {
      .num {
      }
    }
    .nav {
      ul {
      }
      a {
      }
      li {
      }
    }
  }

  @media all and (min-width: 768px) and (max-width: 1024px) {
    border: 2px solid orchid;
    display: grid;
    grid-template-columns: minmax(1em, auto) repeat(2, minmax(auto, 512px)) minmax(
        1em,
        auto
      );
    grid-template-rows: minmax(auto, 128px);
    .background {
      grid-column: 1 / -1;
      grid-row: 1 / -1;
      background: linear-gradient(to top, #e7b219, #f9dd0a);
    }
    .content {
      grid-column: 1/5;
      grid-row: 1;
      //grid
      display: grid;
      grid-template-columns: repeat(16, minmax(auto, 64px));
      grid-template-rows: repeat(2, 50%);
    }
    .logo {
      height: auto;
      width: 120px;
      background-size: cover;
      //grid
      grid-column: 1/3;
      grid-row: 1/3;
    }
    .plank {
      height: 41 * 1.3px;
      width: 185 * 1.3px;
      background-image: url("../assets/Rounded_Rectangle_2.png");
      background-size: cover;
      //grid
      grid-column: 14/17;
      grid-row: 1/2;
      .num {
        text-align: center;
        padding: 6%;
        padding-left: 25%;
        font-size: 17pt;
        color: #f9dd0a;
      }
    }
    .nav {
      grid-column: 3/17;
      grid-row: 2/3;
      ul {
        list-style: none; /*убираем маркеры списка*/
        margin: 0; /*убираем отступы*/
        padding-left: 0; /*убираем отступы*/
        padding-right: 0; /*убираем отступы*/
        //grid
        display: grid;
        grid-template-columns: repeat(5, auto);
      }
      a {
        color: black;
        font-size: 22pt;
        text-decoration: none; /*убираем подчеркивание текста ссылок*/
      }
      li {
        text-align: center;
        // width: 100%; /* сдвинуть по центру колонки*/
        //float: left; /*Размещаем список горизонтально для реализации меню*/
        //margin-left: auto; /*Добавляем отступ у пунктов меню*/
      }
    }
  }
  @media all and (max-width: 480px) {
    border: 2px solid blueviolet;
  }
}
</style>