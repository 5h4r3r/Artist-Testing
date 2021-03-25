<template>
  <div id="header">
    <div class="segment">
      <div class="content header">
        <div class="logo" />
        <div class="plank">
          <div class="num">8-800-555-35-35</div>
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
#header {
    grid-column-start: 2;
    grid-column-end: 2;
  .segment {
    background: linear-gradient(to top, #e7b219, #f9dd0a);
  }
  .header {
    position: relative;
    height: 90px;
    a {
      font-size: 12pt;
      color: black;
    }
    .logo {
      position: absolute;
      margin: 10px;
      height: 70px;
      width: 77px;
      //background-image: url("../assets/logo.png");
      left: 0;
    }
    .plank {
      position: absolute;
      margin-top: 0px;
      height: 41px;
      width: 185px;
      background-image: url("../assets/Rounded_Rectangle_2.png");
      background-size: cover;
      right: 0;
      .num {
        text-align: center;
        padding: 6%;
        padding-left: 20%;
        font-size: 12pt;
        color: #f9dd0a;
      }
    }
    .nav {
      position: absolute;
      display: inline-block;
      top: 2.5em;
      left: auto;
      right: 0;
      padding: 10px;
      padding-right: 0;
      //margin-top: 20px;
      //margin-left: 50%;
      //argin-right: 20%;
      ul {
        left: 10%;
        list-style: none; /*убираем маркеры списка*/
        margin: 0; /*убираем отступы*/
        padding-left: 0; /*убираем отступы*/
        padding-right: 0; /*убираем отступы*/
      }
      a {
        text-decoration: none; /*убираем подчеркивание текста ссылок*/
      }
      li {
        float: left; /*Размещаем список горизонтально для реализации меню*/
        margin-left: 20px; /*Добавляем отступ у пунктов меню*/
      }
    }
  }
}
</style>