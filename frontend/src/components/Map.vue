<template>
  <div id="map">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aea741f0f750fa94eedcde6a34b58b839b88a6a67d994869a9915ec339e3be0f0&amp;source=constructor" width="100%" height="330" frameborder="0"></iframe>
  </div>
</template>

<script>
export default {
  name: "Map",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#map {
  height: 330px;
}
</style>