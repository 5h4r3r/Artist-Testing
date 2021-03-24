<template>
  <div id="app">
    <Header />
    <Video />
    <Whyarewe />
    <Somenumbers />
    <Examples />
    <Awards />
    <Partners/>
    <Form-segment />
  </div>
</template>

<script>
import Awards from "./components/Awards.vue";
import Examples from "./components/Examples.vue";
import FormSegment from './components/FormSegment.vue';
import Header from "./components/Header.vue";
import Partners from './components/Partners.vue';
import Somenumbers from "./components/Somenumbers.vue";
import Video from "./components/Video.vue";
import Whyarewe from "./components/Whyarewe.vue";

export default {
  name: "App",
  components: {
    Header,
    Video,
    Whyarewe,
    Somenumbers,
    Examples,
    Awards,
    Partners,
    FormSegment,
  },
};
</script>

<style lang="scss">
#app {
  
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  //text-align: center;
  color: #2c3e50;
  .segment {
    position: relative;
    width: 100%;
    background: cover;
    background-position: center;
    
  }
  .content {
    display: block;
    margin-left: auto;
    margin-right: auto;

    max-width: 900px;
    min-width: 480px;
  }
}
@media all and (min-width: 1024px) and (max-width: 1280px) { }

@media all and (min-width: 768px) and (max-width: 1024px) {
#app{
  .segment{

  }
}
}
@media all and (min-width: 480px) and (max-width: 768px) { }

@media all and (max-width: 480px) { }
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
  font-size: 14px;
  font-style: normal;
  font-variant: normal;
  font-weight: 400;
  line-height: 20px;
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
