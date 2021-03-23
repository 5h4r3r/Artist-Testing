<template>
  <div id="whyarewe">
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
#whyarewe {
  .segment {
    background: linear-gradient(to top, #e7b219, #f9dd0a);
  }
  .video {
    position: relative;
    height: 330px;
  }
}
</style>