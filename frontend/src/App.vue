<template>
  <div id="app">
        <Header/>
        <Video/>
        <form-top/>
        <formsegment />
  </div>
</template>

<script>
import FormTop from './components/FormTop.vue';
import Header from './components/Header.vue';
import Video from './components/Video.vue';
import formsegment from './components/FormSegment.vue';
export default {
  name: "App",
  components: {
    Header,
    Video,
    FormTop,
    formsegment,
  },
};
</script>

<style lang="scss">
#app {
 .marker {
    border: 2px solid red;
    //background: red;
  }
}
@media all and (min-width: 1024px) and (max-width: 1280px) {
}

@media all and (min-width: 768px) and (max-width: 1024px) {
  
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
h2{
  font-family: Cuprum;
  font-size: 20px;
  font-style: normal;
  font-variant: normal;
  font-weight: 700;
  line-height: 20.4px;
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
