<template>
  <div id="block4">
    <div class="block4-content">
      <div class="block4-title"><h2>ПРИМЕРЫ РАБОТ</h2></div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item1.webp" />
        <p>Логотип для Курганского завода колесных тягачей «КЗКТ»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item2.webp" />
        <p>Логотип для специального конструкторского бюро «Энергомаш»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item3.webp" />
        <p>Нейминг и логотип для жилого комплекса «Снегири»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item4.webp" />
        <p>Каталог для жилого дома «Аврора»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item5.webp" />
        <p>Серия тематических плакатов для РЦ «Pushka»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item6.webp" />
        <p>Иллюстрация для календаря сети магазинов «Акватехника»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item7.webp" />
        <p>Билборд для «Курганского Центра Дезинфексции»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item8.webp" />
        <p>Упаковка для автофильтров SibTec</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item9.webp" />
        <p>Фасад кофейни «Гоголь»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item10.webp" />
        <p>Фасад ювелирного салона «Яхонт»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item11.webp" />
        <p>Сайт кинотеатра «MegaFilm»</p>
      </div>
      <div class="block4-item">
        <img src="../assets/block4/block4_item12.webp" />
        <p>Сайт службы доставки еды «Мега Экспресс»</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Block4",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
#block4 {
  height: 840px;
  background-color: white;
  display: grid;
  grid-template-columns: auto minmax(auto, 900px) auto;
}
.block4-content {
  grid-column: 2 / 3;
  display: grid;
  grid-template-columns: repeat(4, auto);
  grid-template-rows: repeat(auto-fit, auto);
   column-gap: 1.5em;
  .block4-title {
    grid-column: 1 / -1;
    justify-self: center;
    align-self: center;
    h2 {
      font-size: 30pt;
    }
  }
  .block4-item {
    justify-self: center;
    text-align: center;
    p {
      font-size: 14pt;
    }
  }
}
@media all and (min-width: 768px) and (max-width: 1024px) {
  #block4 {
      height: 1400px;
    background-color: white;
    display: grid;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block4-content {
    grid-column: 1 / 4;
    display: grid;
    grid-template-columns: repeat(2, 2fr);
    grid-template-rows: repeat(auto-fill, auto);
    grid-gap: 2%;
    column-gap: 5%;
    justify-self: center;
    align-items: center; 
  } 
}

@media all and (max-width: 768px) {
  #block4 {
    height: 2800px;
    background-color: white;
    display: grid;
    grid-template-columns: auto minmax(500px, 1fr) auto;
  }
  .block4-content {
    grid-column: 1 / 4;
    display: grid;
    grid-template-columns: repeat(1, minmax(480px, 2fr));
    grid-template-rows: repeat(auto-fit, auto);
    grid-gap: 1%;
    //justify-self: center;
    //align-items: center;
  } 
}
</style>