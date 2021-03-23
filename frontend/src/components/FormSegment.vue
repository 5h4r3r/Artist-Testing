<template>
  <div id="formsegment">
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
#formsegment {
  .segment {
    background-image: url("../assets/formsegment.png");
  }
  .video {
    position: relative;
    height: 660px;
  }
}
</style>