<template>
  <div id="somenumbers">
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
#somenumbers {
  .segment {
    background-image: url("../assets/Layer_4.png");
  }
  .video {
    position: relative;
    height: 330px;
  }
}
</style>