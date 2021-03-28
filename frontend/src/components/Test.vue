<template>
<div id="test">
<div class="container">
  <div class="row">
    <div class="block-1">1</div>
    <div class="block-2">2</div>
    <div class="block-3">3</div>
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
#test {
  grid-column: 2 / 3;
  grid-row: 4 / 5;
 /* CSS */
.container {
  display: flex;
  justify-content: center;
  align-items:center;
}
.row {
  display: flex;
  flex-direction: column;
  flex: 0 0 50%;
}
.block-1 {
  background-color: red;
  min-height: 100px;
  flex: 0 0 50%;
}
.block-2,
.block-3 {
   background-color: rgb(122, 180, 130);
  min-height: 100px;
  flex: 0 0 50%;
}
@media (min-width: 768px) {
  .row {
    flex: 33.3% 33.3% 33;
    flex-direction: row;
  }
  
  .block-1,.block-2, .block-3  {
    flex: 0 0 50%;
  }
}
}
</style>