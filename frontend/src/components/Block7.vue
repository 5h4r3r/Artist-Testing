<template>
  <div id="block7">
    <div class="block7-content">
    <div class="block7-title">
      <h2>МЫ МОЖЕМ ВСЁ! И ДЕЛАЕМ ЭТО ХОРОШО</h2>
      <p>
        Видеоролики • Аудиоролики • Графические макеты <br />
        Разработка фирменного стиля • Дизайн фасадов и вывесок <br />
        Презентационные фильмы
      </p>
    </div>
   
    <bottomform class="block7-form" />
  </div>
  </div>
</template>

<script>
import bottomform from "./singlecomponents/bottomform.vue";
export default {
  components: { bottomform },
  name: "Block7",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#block7 {
  height: 660px;
  background-position: top;
  background-image: url("../assets/formsegment.png");
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.block7-content {
  grid-column: 2 / 3;
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows:  30%  reapet(2, 1fr);
  .block7-form {
    grid-column: 1 / 2;
    grid-row: 3 / 4;
  }
  .block7-title {
    grid-column: 1 / 2;
  //grid-row: 1 / 2;
    color: white;
    justify-self: center;
    align-self: center;
    text-align: center;
  }
  .block7-info {
    grid-column: 1 / 2;
    //grid-row: 1 / 2;
    align-self: center;
    justify-self: center;
    text-align: center;
    p {
      color: white;
    }
  }
  @media all and (min-width: 480px) and (max-width: 768px) {
    //grid-template-columns: auto minmax(auto, 900px) auto;
    //grid-template-rows: repeat(2, 330px);
  }
}
</style>