<template>
  <div id="partners">
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
#partners {
  .segment {
    background-color: white;
  }
  .video {
    position: relative;
    height: 660px;
  }
}
</style>