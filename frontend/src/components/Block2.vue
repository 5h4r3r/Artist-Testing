<template>
  <div id="block2">
    <div class="block2-content">
      <div class="block2-title"><h2>ПОЧЕМУ ВЫБИРАЮТ НАС</h2></div>
      <div class="block2-item">
        <img src="../assets/block2/block2_item1.webp" />
        <p>Богатый опыт</p>
      </div>
      <div class="block2-item">
        <img src="../assets/block2/block2_item2.webp" />
        <p>
          Лидеры на рынке <br />
          рекламных услуг
        </p>
      </div>
      <div class="block2-item">
        <img src="../assets/block2/block2_item3.webp" />
        <p>
          Качество, подтвержденное <br />
          неоднократно
        </p>
      </div>
      <div class="block2-item">
        <img src="../assets/block2/block2_item4.webp" />
        <p>
          Конкурентоспособная <br />
          цена
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Block2",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#block2 {
  height: 330px;
  background: linear-gradient(to top, #e7b219, #f9dd0a);
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.block2-content {
  grid-column: 2 / 3;
  display: grid;
  grid-template-columns: repeat(4, minmax(auto, 225px));
  grid-template-rows: repeat(auto-fit, auto);
  column-gap: 2em;
  .block2-title {
    grid-column: 1 / -1;
    justify-self: center;
    align-self: center;
    h2 {
      font-size: 30pt;
    }
  }
  .block2-item {
    justify-self: center;
    text-align: center;
    p {
      font-size: 14pt;
    }
  }
}
@media all and (min-width: 768px) and (max-width: 1024px) {
    #block2 {
    height: 100%;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block2-content {
    grid-template-columns: repeat(2, 2fr);
    grid-template-rows: repeat(auto-fit, auto);
  }
}
@media all and (max-width: 768px) {
  #block2 {
    height: 100%;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block2-content {
    grid-template-columns: repeat(1, minmax(480px, 2fr));
    grid-template-rows: repeat(auto-fit, auto);
  }
}
</style>