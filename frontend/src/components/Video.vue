<template>
  <div id="video">
    <div class="segment">
      <div class="video-block content">
        <div class="video">
          <iframe
            width="536"
            height="302"
            src="https://www.youtube.com/embed/dCSr5fcjOeI"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
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
#video {
  .segment {
    background-image: url("../assets/video.png");
  }
  .video-block {
    position: relative;
    height: 810px;
    .video {
      position: relative;
      padding-bottom: 56.25%; /* задаёт высоту контейнера для 16:9 (если 4:3 — поставьте 75%) */
      height: 0;
      overflow: hidden;
    }
    .video iframe {
      position: absolute;
      top: 11.5%;
      left: 3.1%;
      width: 60%;
      height: 60%;
      border-width: 0;
      outline-width: 0;
    }
  }
}
</style>