<template>
  <div id="app">
    <Header />
    <block-1 />
    <block-2 />
    <block-3 />
    <block-4 />
    <block-5 />
    <block-6 />
    <block-7 />
    <Map />
    <Footer />
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import Map from "./components/Map.vue";
import Footer from "./components/Footer.vue";
import Block2 from "./components/Block2.vue";
import Block3 from "./components/Block3.vue";
import Block4 from "./components/Block4.vue";
import Block5 from "./components/Block5.vue";
import Block6 from "./components/Block6.vue";
import Block7 from "./components/Block7.vue";
import Block1 from './components/Block1.vue';
export default {
  name: "App",
  components: {
    Header,
    Block2,
    Block3,
    Block4,
    Block5,
    Block6,
    Block7,
    Map,
    Footer,
    Block1,
  },
};
</script>

<style lang="scss">
#app {
  font-family: Cuprum;
  //display: grid;
  //grid-template-columns: auto minmax(auto, 900px) auto;
  .marker {
    border: 2px solid red;
    //background: red;
  }
  .block6-background {
    grid-column: 1 / -1;
    grid-row: 7 / 8;
    background-color: red;
  }
}
@media all and (min-width: 1024px) and (max-width: 1280px) {
}

@media all and (min-width: 768px) and (max-width: 1024px) {
  #app {
    grid-template-columns: 100%;
  }
}
@media all and (min-width: 480px) and (max-width: 768px) {
}

@media all and (max-width: 480px) {
}
body {
  margin: 0;
  padding: 0;
}

h1 {
  font-family: Cuprum;
  font-size: 24px;
  font-style: normal;
  font-variant: normal;
  font-weight: 700;
  line-height: 26.4px;
}
h2 {
  font-family: Cuprum;
  font-size: 20px;
  font-style: normal;
  font-variant: normal;
  font-weight: 700;
  line-height: 1;
  // 
  margin-top: 5%;
  margin-bottom: 5%;
  font-size: 30pt;
}
h3 {
  font-family: Cuprum;
  font-size: 14px;
  font-style: normal;
  font-variant: normal;
  font-weight: 700;
  line-height: 15.4px;
}
p {
  font-family: Cuprum;
  font-size: 14pt;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 20px;
  margin: 0;
  // подмена шрифта
  font-display: fallback;
}
a {
  font-family: Cuprum;
  font-size: 14px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 20px;
}
blockquote {
  font-family: Cuprum;
  font-size: 21px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 30px;
}
pre {
  font-family: Cuprum;
  font-size: 13px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 18.5667px;
}
</style>
