<template>
  <div id="footer">
    <div class="segment">
      <div class="wrapper">
        <div>One</div>
        <div>Two</div>
        <div>Three</div>
        <div>Four</div>
        <div>Five</div>
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
#footer {
  grid-column-start: 2;
  grid-column-end: 2;
  .segment {
    background-color: black;
  }
  .wrapper {
    display: grid;
  }
}
</style>