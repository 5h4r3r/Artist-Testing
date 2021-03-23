<template>
  <div id="video">
    <div class="segment">
      <div class="video content"></div>
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
  .segment {
    background-image: url("../assets/video.png");
  }
  .video {
    position: relative;
    height: 810px;
  }
}
</style>