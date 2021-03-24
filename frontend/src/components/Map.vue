<template>
  <div id="map">
    <div class="segment">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aea741f0f750fa94eedcde6a34b58b839b88a6a67d994869a9915ec339e3be0f0&amp;source=constructor" width="100%" height="330" frameborder="0"></iframe>
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
#map {
  .segment {
    background-image: url("../assets/Layer_4.png");
  }
  .video {
    position: relative;
    height: 330px;
  }
}
</style>